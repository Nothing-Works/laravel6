@extends('_layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{$conversation->title}}</h2>
                <p>Posted By {{ $conversation->user->name}}</p>
                <div>{{ $conversation->body }}</div>
                <p style="margin-top: 2em">

                    <h2>Replies</h2>

                    @foreach ($conversation->replies as $reply)
                    <hr>
                    {{-- @if ($conversation->best_reply_id === $reply->id) --}}
                    @if ($reply->isBest())
                    <span style="color: green;">Best Reply!!</span>
                    @endif
                    <p>{{$reply->user->name}} said</p>
                    <div>{{ $reply->body}}

                        {{-- for gate --}}
                        {{-- @can('update-conversation', $conversation) --}}
                        @can('update', $conversation)
                        <form action="/best-replies/{{$reply->id}}" method="POST">
                            @csrf
                            <button type="submit">Best Reply?</button>
                        </form>
                        @endcan
                    </div>
                    @endforeach

                </p>
            </div>
        </div>
    </div>
</div>
@endsection
