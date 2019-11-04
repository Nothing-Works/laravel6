<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
        ]);

        Article::create($attributes);

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
