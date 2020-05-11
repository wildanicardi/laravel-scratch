@extends('layout')
@section('content')
<div class="container mx-auto px-4 my-6">
    <ul>
        @forelse($notifications as $notification)
        <li>
            @if ($notification->type === 'App\Notifications\EmailNotification')
            We Have Received a payment of {{$notification->data['amount']}} from you
            @endif
        </li>
        @empty

        <p>You Have No Notifications at this Time!</p>
        @endforelse
    </ul>
</div>

@endsection
