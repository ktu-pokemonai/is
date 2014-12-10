@extends('form', ['layout' => 'user.layout', 'title' => 'Register complaint', 'icon' => 'fa fa-warning'])

@section('form')
    {{ Form::open(['route' => 'user.complaints.store', 'method' => 'post']) }}
        <div class="form-group">
            {{ Form::label('text', 'Complaint', ['class' => 'control-label']) }}
            {{ Form::textarea('text', null, ['class' => 'form-control']) }}
        </div>

        @include('user.actions', ['back' => route('user.complaints.index'), 'save' => 'Send'])
    {{ Form::close() }}
@stop