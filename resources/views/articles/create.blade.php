@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>
        <form action="{{route('articles.store')}}" method="POST">
            @csrf
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                <input type="text" class="input @error('title') is-danger @enderror" name="title" id="title"">
                    @if ($errors->has('title'))
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                    @endif
                </div>
            </div>
            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>
                <div class="control">
                    <textarea type="text" class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt" cols="30"
                        rows="10"></textarea>
                        @if ($errors->has('excerpt'))
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @endif
                </div>
            </div>
            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea type="text" class="textarea @error('excerpt') is-danger @enderror" name="body" id="body" cols="30"
                        rows="10"></textarea>
                        @if ($errors->has('body'))
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @endif
                </div>
            </div>
            <div class="field">
                <label for="tags" class="label">Tags</label>
                <div class="control select  is-multiple">
                    <select name="tags[]" multiple id="tags">
                        @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                        @error ('tags')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
