@extends('layout')
@section('head')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="container mx-auto px-4 my-6">
    <div class="w-full max-w-xs mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('payment.store')}}">
            @csrf
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Make Payment
                </button>
            </div>
            @if (session('message'))
            <p class="text-green-500 text-xs">{{session('message')}}</p>
            @endif
        </form>
    </div>
</div>

@endsection
