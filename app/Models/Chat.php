<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    /**
     * Get message record associated with the specified chat.
     */
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
