<?php

namespace App\Services;

use App\Enums\Status\MessageEmbeddingStatus;
use Illuminate\Support\Facades\Http;
use OpenAI\Laravel\Facades\OpenAI;
use \Probots\Pinecone\Client as Pinecone;

class EmbeddingService
{
    public function getOpenAIEmbedding($question, $message){
        $embeddedMessage = OpenAI::embeddings()->create([
            'model' => 'text-embedding-ada-002',
            'input' => $question
        ])->embeddings[0]->embedding;

        $this->updateMessageStatus($message, MessageEmbeddingStatus::EMBEDDED);

        return $embeddedMessage;
    }

    public function getWordIdFromVectorDB($embeddings, $message){
        $pinecone = new Pinecone(config('services.pinecone.api_key'), config('services.pinecone.environment'));
        $results = $pinecone->index(config('services.pinecone.index'))->vectors()->query(
            vector: $embeddings,
            topK: 1,
        )->body();

        $this->updateMessageStatus($message, MessageEmbeddingStatus::EXPLAINED);

        return json_decode($results)->matches[0]->id;
    }

    public function getSiwarDetails($id, $message){

        $details = Http::withHeaders([
            'accept' => 'application/json',
            'apiKey' => config('services.siwar.api_key'),
            'Content-Type' => 'application/json'
        ])->patch(config('services.siwar.bulk_entries_endpoint'), [
            'ids' => [
                $id
            ]
        ])->body();

        $this->updateMessageStatus($message, MessageEmbeddingStatus::DETAILED);

        return $details;
    }

    public function getGptAnswer($details, $message){

        $answer = OpenAI::chat()->create([
            'model' => 'gpt-4-1106-preview',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'أنت عالم تنقيب  بيانات ولديك السيناريو التالي
 السؤال هو$'.$message->content . 'يحتوي السؤال على طلب إيجاد معنى لكلمة أو مجموعة كلمات
 لديك قاعدة بيانات تحتوي على كلمات  بهذه التفاصيل '.$details.'

قم بإعطاء معنى الكلمة في السؤال.
قم بإعطاء مثال باستخدام الكلمة في السؤال
قم بإعطاء الكلمات التي لها نفس معنى الكلمة المحددة والتي يمكن استخدامها بدلاً منها

يجب أن يحتوي المثال على 15  كلمة  على الأكثر
من الأفضل استخدام الأمثلة التي لها مرجع بالكتب العربية المشهورة أو الشعر
. في حال لم يتوافق المعنى المقدم من قاعدة البيانات أو عدم إرجاع نتيجة قم باستخدام مهارات  ChatGPT لعمل المطلوب'
                ],
            ],
        ])->choices[0]->message->content;

        $this->updateMessageStatus($message, MessageEmbeddingStatus::ANSWERED);

        return $answer;
    }

    private function updateMessageStatus($message, MessageEmbeddingStatus $status){
        $message->update(['embedding_status' => $status]);
    }
}
