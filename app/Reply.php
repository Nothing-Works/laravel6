<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isBest()
    {
        return $this->conversation->best_reply_id === $this->id;
    }

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
