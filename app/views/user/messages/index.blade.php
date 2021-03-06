@extends('user.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-envelope-o"></i>
    Messages
</h1>
@stop

@section('content')
    <div class="list-group">
    @foreach($messages as $message)
        <a href="{{ route('user.messages.show', [$message->id]) }}" class="list-group-item">
            @if(is_null($message->viewed_at))
                <strong>{{ $message->subject }}</strong>
            @else
                {{ $message->subject }}
            @endif
        </a>
    @endforeach
    </div>
@stop