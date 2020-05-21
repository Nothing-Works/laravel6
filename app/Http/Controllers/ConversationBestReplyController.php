<?php

namespace App\Http\Controllers;

use App\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        //for the gate.
        // $this->authorize('update-conversation', $reply->conversation);

        //for the policy
        $this->authorize('update', $reply->conversation);

        $reply->conversation->setBestReply($reply);

        return back();
    }
}
