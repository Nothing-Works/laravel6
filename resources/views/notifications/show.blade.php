@extends('layouts.app')
@section('content')
<h1>Notification</h1>
<ul>
    @forelse ($notifications as $notification)
    <li>{{$notification->type}}</li>
    <li>{{$notification->data['amount']}}</li>
    @empty
    <p>you do not have any notifications</p>
    @endforelse
</ul>
@endsection
