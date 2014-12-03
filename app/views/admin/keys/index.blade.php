@extends('admin.layout')

@section('content')
    {{ Form::open(['route' => ['admin.rooms.keys.store', $room->id], 'method' => 'post', 'class' => 'hidden', 'id' => 'create-key']) }}
    {{ Form::close() }}

    <h1 class="page-header">
        <i class="fa fa-key"></i>
        Keys for room {{ $room->id }}
        <button class="btn btn-success" type="submit" form="create-key">
            <i class="fa fa-btn fa-plus"></i>
            Create key
        </button>
    </h1>

    @include('delete-form')

    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Created at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($keys as $key)
        <tr>
            <td>{{ $key->id }}</td>
            <td>{{ $key->created_at }}</td>
            <td>@include('admin.keys.actions')</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@stop