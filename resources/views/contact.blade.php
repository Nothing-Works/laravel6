@extends('layout')
@section('content')
<h1>send email</h1>
<form method="POST" action="/contact">
    @csrf
    <label for="email">email</label>
    <input type="text" name="email" id="email">
    @error('email')
    <div>{{$message}}</div>
    @enderror
    <button type="submit">email me</button>
</form>
@if(session('message'))
<div>{{session('message')}}</div>
@endif
@endsection
