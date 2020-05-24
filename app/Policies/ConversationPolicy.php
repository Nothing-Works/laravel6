<?php

namespace App\Policies;

use App\Conversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any conversations.
     *
     * @return mixed
     */
    public function viewAny(User $user)
    {
    }

    /**
     * Determine whether the user can view the conversation.
     *
     * @return mixed
     */
    public function view(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    }

    /**
     * Determine whether the user can create conversations.
     *
     * @return mixed
     */
    public function create(User $user)
    {
    }

    //admin policy level
    // public function before($user, $ability)
    // {
    //     if ('andy' === $user->name) {
    //         return true;
    //     }
    // }

    /**
     * Determine whether the user can update the conversation.
     *
     * @return mixed
     */
    public function update(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    }

    /**
     * Determine whether the user can delete the conversation.
     *
     * @return mixed
     */
    public function delete(User $user, Conversation $conversation)
    {
    }

    /**
     * Determine whether the user can restore the conversation.
     *
     * @return mixed
     */
    public function restore(User $user, Conversation $conversation)
    {
    }

    /**
     * Determine whether the user can permanently delete the conversation.
     *
     * @return mixed
     */
    public function forceDelete(User $user, Conversation $conversation)
    {
    }
}
