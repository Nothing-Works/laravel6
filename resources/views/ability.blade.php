@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="links">
            @can('edit_forum')
            <a href="">Edit Forum</a>
            @endcan
            @can('do some thing else')
            <a href="">Andy</a>
            @endcan
            @can('view_reports')
            <a href="/reports">view reports</a>
            @endcan
            <a href="">Laracasts</a>
            <a href="">News</a>
            <a href="">Blog</a>
            <a href="">Nova</a>
            <a href="">Forge</a>
            <a href="">Vapor</a>
            <a href="">GitHub</a>
        </div>
    </div>
</div>

@endsection
