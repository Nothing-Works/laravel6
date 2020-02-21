@extends('layouts.app')
@section('content')
<h1>Payments</h1>
<form method="POST" action="/token">
    @method('PUT')
    @csrf
    <button type="submit">Generate Token</button>
</form>

@if(session('message'))
{{session('message')}}
@endif
@endsection
