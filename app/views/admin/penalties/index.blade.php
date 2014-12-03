@extends('admin.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-thumbs-o-down"></i>
        Penalties
        {{ button(route('admin.penalties.create'), 'Create penalty', 'btn btn-success', 'fa fa-plus') }}
    </h1>

    {{ Form::open(['method' => 'delete', 'class' => 'hidden', 'id' => 'remove-penalty']) }}
    {{ Form::close() }}

    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Reason</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($penalties as $penalty)
            <tr>
                <td>{{ $penalty->user->username }}</td>
                <td>{{ $penalty->reason }}</td>
                <td>@include('admin.penalties.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop