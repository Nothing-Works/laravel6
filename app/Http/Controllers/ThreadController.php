<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    public function show($slug)
    {
//        $post = DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFail();

//        if (!$post) {
//            abort(404, 'can not find it');
//        }

        return view('thread', compact('post'));
    }
}
