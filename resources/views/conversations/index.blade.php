@extends('layouts.app')
@section('content')
@foreach ($conversations as $conversation)
<h2 class="text-center"><a href="{{route('conversations.show',$conversation->id)}}">{{$conversation->title}}</a></h2>
@continue($loop->last)
<hr>
@endforeach
@endsection
