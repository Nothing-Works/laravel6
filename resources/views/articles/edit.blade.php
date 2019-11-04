@extends('_layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update article</h1>
            <form action="{{$article->path()}}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <label for="title">Title</label>
                    <div><input type="text" name="title" value="{{$article->title}}" id="title"/></div>
                </div>
                <div>
                    <label for="excerpt">Excerpt</label>
                    <div><input type="text" name="excerpt" value="{{$article->excerpt}}" id="excerpt"/></div>
                </div>
                <div>
                    <label for="body">Body</label>
                    <div><input type="text" name="body" value="{{$article->body}}" id="body"/></div>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
