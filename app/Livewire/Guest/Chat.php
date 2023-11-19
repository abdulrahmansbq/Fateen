<?php

namespace App\Livewire\Guest;

use Livewire\Component;

class Chat extends Component
{
    public $question;

    public function render()
    {
        return view('livewire.guest.chat')->layout('components.layouts.chat');
    }

    public function submit()
    {
        $this->validate([
            'question' => 'required|min:3'
        ]);

        $this->emit('chatMessageReceived', $this->question);

        $this->question = '';
    }

    public function sendMessage()
    {
        sleep(4);
    }
}
