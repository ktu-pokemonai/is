@extends('manager.layout')

@section('header')
<h1 class="page-header">
    <i class="fa fa-key"></i>
    Keys
    {{ button(route('manager.keys.create'), 'Issue key', 'btn btn-success', 'fa fa-btn fa-plus') }}
</h1>
@stop

@section('content')
    {{ Form::open(['method' => 'patch', 'class' => 'hidden', 'id' => 'update-key-issue']) }}
    {{ Form::close() }}

    <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Room</th>
            <th>User</th>
            <th>Issues at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($keysIssues as $issue)
        <tr>
            <td>{{ $issue->key->id }}</td>
            <td>{{ $issue->key->room->name }}</td>
            <td>{{ $issue->user->username }}</td>
            <td>{{ $issue->issued_at }}</td>
            <td>@include('manager.keys.actions')</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@stop