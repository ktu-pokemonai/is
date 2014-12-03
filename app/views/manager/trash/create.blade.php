@extends('form', ['layout' => 'manager.layout', 'title' => 'Register trash', 'icon' => 'fa fa-trash-o'])

@section('form')
    {{ Form::open(['route' => 'manager.trash.store', 'method' => 'post']) }}
        <div class="form-group">
            {{ Form::label('apartment_id', 'Apartment', ['class' => 'control-label']) }}
            {{ Form::select('apartment_id', Apartment::lists('nr', 'id'), null, ['class' => 'form-control']) }}
        </div>

        @include('manager.actions', ['back' => 'manager.trash.index'])
    {{ Form::close() }}
@stop