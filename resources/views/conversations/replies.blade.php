@foreach ($conversation->replies as $reply)
<div class="container-fluid">
    <header style="display:flex; justifiy-content:space-between;">
        <p class="m-0"><strong>{{$reply->user->name}} said ...</strong></p>
        @if ($reply->isBest())
        <span style="color: green; float:right;">Best Reply!!!</span>
        @endif
    </header>
    {{$reply->body}}
    @can('update', $conversation)
    <form action="/best-replies/{{$reply->id}}" method="POST">
        @csrf
        <button type="submit" class="p-0 btn text-muted">Best Reply?</button>
    </form>
    @endcan
</div>
@continue($loop->last)
<hr>
@endforeach
