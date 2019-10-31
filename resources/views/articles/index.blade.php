@extends('_layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @foreach($articles as $article)
                <div id="content">
                    <div class="title">
                        <h2><a href="/articles/{{$article->id}}">{{$article->title}}</a></h2>
                        <span class="byline">Mauris vulputate dolor sit amet nibh</span></div>
                    <p><img src="images/banner.jpg" alt="" class="image image-full"/></p>
                    <p>{{$article->excerpt}}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
