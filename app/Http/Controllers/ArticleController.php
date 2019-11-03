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
        $article = new Article();
        $article->title = $request->get('title');
        $article->body = $request->get('body');
        $article->excerpt = $request->get('excerpt');

        $article->save();

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request, Article $article)
    {
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
