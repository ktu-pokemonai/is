@extends('form', ['layout' => 'admin.layout', 'title' => 'Approve registration', 'icon' => 'fa fa-user'])

@section('form')
    {{ Form::model($registration, ['route' => ['admin.registrations.update', $registration->id], 'method' => 'put', 'class' => 'form-horizontal']) }}
        @include('admin.registrations.form')

        <div class="form-group">
            <div class="checkbox col-md-9 col-md-offset-3">
                <label>
                    {{ Form::checkbox('is_admin') }}
                    Administrator
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
                <div class="form-group">
                    @include('admin.actions', ['back' => route('admin.registrations.index')])
                </div>
            </div>
        </div>
    {{ Form::close() }}
@stop