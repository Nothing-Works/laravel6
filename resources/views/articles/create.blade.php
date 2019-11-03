@extends('_layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>This is the form for a new article</h1>
            <form action="/articles" method="POST">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <div><input type="text" name="title" id="title"/></div>
                </div>
                <div>
                    <label for="excerpt">Excerpt</label>
                    <div><input type="text" name="excerpt" id="excerpt"/></div>
                </div>
                <div>
                    <label for="body">Body</label>
                    <div><input type="text" name="body" id="body"/></div>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
