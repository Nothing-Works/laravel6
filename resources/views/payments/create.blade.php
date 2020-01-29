@extends('layouts.app')
@section('content')
<h1>Payments</h1>
<form method="POST" action="/payments">
    @csrf
    <button type="submit">make payment</button>
</form>
@endsection
