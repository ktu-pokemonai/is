@extends('admin.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-envelope-o"></i>
        Messages
        {{ button(route('admin.messages.create'), 'Create message', 'btn btn-success', 'fa fa-btn fa-plus') }}
    </h1>

    {{ Form::open(['method' => 'delete', 'id' => 'remove-message', 'class' => 'hidden']) }}
    {{ Form::close() }}

    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->user->username }}</td>
                <td>{{ $message->message }}</td>
                <td>@include('admin.messages.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop