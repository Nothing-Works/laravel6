<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function show($data)
    {
        $posts = [
            'my-first-one' => 'Hello, this is my first blog post!',
            'my-second-one' => 'Now, I am getting the hang of this blogging thing',
        ];
        if (!array_key_exists($data, $posts)) {
            abort(404, 'Sorry We could not find the post');
        }

        return view('post', ['post' => $posts[$data]]);
    }
}
