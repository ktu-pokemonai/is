@extends('user.layout')

@section('content')
    {{ Form::open(['route' => ['user.messages.destroy', $message->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'delete-message']) }}
    {{ Form::close() }}

    <h1 class="page-header">
        <i class="fa fa-envelope-o"></i>
        {{ $message->subject }}
        <button class="btn btn-danger">
            <i class="fa fa-times"></i>
            Remove message
        </button>
    </h1>

    <small>{{ $message->created_at }}</small>
    <p>{{ nl2br(e($message->message)) }}</p>
@stop