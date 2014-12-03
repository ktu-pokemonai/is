@extends('manager.layout')

@section('content')
    <h1 class="page-header">
        <i class="fa fa-trash-o"></i>
        Trash
        {{ button(route('manager.trash.create'), 'Register trash', 'btn btn-success', 'fa fa-btn fa-plus') }}
    </h1>

    {{ Form::open(['method' => 'delete', 'id' => 'delete-trash']) }}

    <table class="table">
        <thead>
            <tr>
                <th>Apartment</th>
                <th>Registered</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trashes as $trash)
            <tr>
                <td>{{ $trash->apartment->nr }}</td>
                <td>{{ $trash->created_at }}</td>
                <td>@include('manager.trash.actions')</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop