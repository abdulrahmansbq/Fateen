<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the chat of a specific ChatMessage
     */
    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }

    /**
     * Get the session of a specific ChatMessage
     */
    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

}
