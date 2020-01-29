<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Article;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simple', function () {
    return view('simple');
});

Route::get('/about', function () {
    $articles = Article::latest()->get();

    return view('about', ['articles' => $articles]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function () {
    $email = request()->validate(['email' => 'required|email']);
    // text email
    // Mail::raw('It works', function ($message) use ($email) {
    //     $message->to($email['email'])->subject('hello there');
    // });
    Mail::to($email)->send(new ContactMe('laravel'));

    return redirect('/contact')->with('message', 'email sent');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/andy', function () {
    return 'Hello World';
});

Route::get('/andy1', function () {
    return ['foo' => 'bar'];
});

Route::get('/andy2', function () {
    return view('test', ['name' => request('name')]);
});

Route::get('/posts/{post}', function ($data) {
    $posts = [
        'my-first-one' => 'Hello, this is my first blog post!',
        'my-second-one' => 'Now, I am getting the hang of this blogging thing',
    ];
    if (!array_key_exists($data, $posts)) {
        abort(404, 'Sorry We could not find the post');
    }

    return view('post', ['post' => $posts[$data]]);
});

Route::get('/blog/{blog}', 'BlogController@show');

Route::get('/thread/{thread}', 'ThreadController@show');

Route::get('/articles', 'ArticleController@index');
Route::get('/articles/create', 'ArticleController@create');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/{article}', 'ArticleController@show');
Route::get('/articles/{article}/edit', 'ArticleController@edit');
Route::patch('/articles/{article}', 'ArticleController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
