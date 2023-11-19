<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Session extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    public $incrementing = false;

    /**
     * Get the chats of a specific Session
     */
    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }

    /**
     * Get the messages of a specific Session
     */
    public function chatMessages(): HasMany
    {
        return $this->hasMany(ChatMessage::class);
    }
}
