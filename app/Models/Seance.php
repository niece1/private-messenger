<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    /**
     * Get messages associated with the specified seance.
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Get all of the chats for the seance.
     */
    public function chats()
    {
        return $this->hasManyThrough(Chat::class, Message::class);
    }
}
