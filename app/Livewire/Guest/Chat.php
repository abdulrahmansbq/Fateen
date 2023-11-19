<?php

namespace App\Livewire\Guest;

use App\Models\Chat as ChatModel;
use App\Models\Session;
use App\Services\EmbeddingService;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Chat extends Component
{
    #[Rule('required|min:3|max:1024')]
    public $question;

    public $chatUuid;

    public function mount($chatUuid = null)
    {
        $this->chatUuid = $chatUuid;
    }

    public function render()
    {
        $chat = ChatModel::with('messages')->find($this->chatUuid);
        return view('livewire.guest.chat', compact('chat'))->layout('components.layouts.chat');
    }

    public function sendMessage()
    {
        $this->validate();

        $question = $this->question;

        $this->reset('question');


        $sessionId = session()->getId();

        $chat = ChatModel::find($this->chatUuid);

        abort_if($chat && $chat->session_id !== $sessionId, 403);

        $session = Session::find($sessionId);

        if (!$chat) {
            $chat = $session->chats()->create();
        }

        $message = $chat->messages()->create([
            'content' => $question,
            'session_id' => $sessionId,
        ]);


        if (!$this->chatUuid) {
            $this->redirect(route('chat.show', $chat->uuid), navigate: false);
        }

        $embeddingService = (new EmbeddingService);

        $embeddings = $embeddingService->getOpenAIEmbedding($question, $message);

        $wordIdInSiwar = $embeddingService->getWordIdFromVectorDB($embeddings, $message);

        $siwarDetails = $embeddingService->getSiwarDetails($wordIdInSiwar, $message);

        $answer = $embeddingService->getGptAnswer($siwarDetails, $message);
        $message = $chat->messages()->create([
            'content' => $answer,
            'is_bot' => true,
        ]);
    }

    public function destroySession(){
        session()->flush();
        $this->redirect(route('chat.show'));
    }


}
