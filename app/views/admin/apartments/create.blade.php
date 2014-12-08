@extends('form', ['layout' => 'admin.layout', 'title' => 'Add apartment', 'icon' => 'fa fa-building'])

@section('form')
    {{ Form::open(['route' => 'admin.apartments.store', 'method' => 'post']) }}
        @include('admin.apartments.form')

        <div class="form-group">
            @include('admin.actions', ['back' => route('admin.apartments.index'), 'save' => 'Save & next'])
        </div>
    {{ Form::close() }}
@stop