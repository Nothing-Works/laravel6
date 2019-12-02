@extends('_layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>This is the form for a new article</h1>
        <form action="/articles" method="POST">
            @csrf
            <div>
                <label for="title">Title</label>
                <div>
                    <input type="text" name="title" id="title" value="{{old('title')}}" />
                    @error('title')
                    <p>{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="excerpt">Excerpt</label>
                <div>
                    <input type="text" name="excerpt" id="excerpt" value="{{old('excerpt')}}" />
                    @error('excerpt')
                    <p>{{$errors->first('excerpt')}}</p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="body">Body</label>
                <div>
                    <input type="text" name="body" id="body" value="{{old('body')}}" />
                    @error('body')
                    <p>{{$errors->first('body')}}</p>
                    @enderror
                </div>
            </div>
            <div>
                <label for="tag">Tags</label>
                <div>
                    <select name="tags[]" multiple>
                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    @error('tags')
                    <p>{{$errors->first('tags')}}</p>
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection
