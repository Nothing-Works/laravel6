@extends('_layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        @foreach($all as $conversation)
        <div id="content">
            <div class="title">
                <h2><a href="/conversation/{{$conversation->id}}">{{$conversation->title}}</a></h2>
                @continue($loop->last)
                <hr>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
