<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['uuid'];

    protected $primaryKey = 'uuid';

    public $incrementing = false;

    /**
     * Get all the messages of a specific Chat
     */
    public function messages(): HasMany
    {
        return $this->hasMany(ChatMessage::class);
    }

    /**
     * Get the session of a specific Chat
     */
    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }
}
