<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Session extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get all of the chats for a specific Session
     */
    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }
}
