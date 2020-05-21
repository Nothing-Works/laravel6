<?php

use App\Article;
use App\Conversation;
use App\Reply;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // factory(User::class, 2)->create()->each(function ($user) {
        //     $user->articles()->save(factory(Article::class)->make());
        // });
        factory(User::class, 3)->create()->each(function ($user) {
            factory(Conversation::class, 3)->create(['user_id' => $user->id])->each(function ($conversation) {
                factory(Reply::class, 5)->create(['conversation_id' => $conversation->id]);
            });
        });
        // factory(Reply::class, 5)->create();
    }
}
