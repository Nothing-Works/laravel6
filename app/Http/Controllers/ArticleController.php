<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $articles = Article::latest()->get();

        if ($tag = $request->input('tag')) {
            $articles = Tag::where('name', $tag)->firstOrFail()->articles;
        }

        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create', ['tags' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'tags' => 'exists:tags,id',
        ]);

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 2;
        $article->save();
        $article->tags()->attach($request->input('tags'));
        // Article::create($attributes);

        return  redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request, Article $article)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
        ]);

        $article->update($attributes);

        return redirect($article->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Article $article)
    {
    }
}
