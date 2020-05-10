@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Edit Article</h1>
        <form class="" action="{{route('articles.update',$article->id)}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" class="input" name="title" id="title" value="{{$article->title}}">
                </div>
            </div>
            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>
                <div class="control">
                    <textarea type="text" class="textarea" name="excerpt" id="excerpt" cols="30"
                        rows="10">{{$article->excerpt}}</textarea>
                </div>
            </div>
            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea type="text" class="textarea" name="body" id="body" cols="30"
                        rows="10">{{$article->body}}</textarea>
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
