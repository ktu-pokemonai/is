@extends('layout.master')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-user"></i>
            Register
          </div>
          <div class="panel-body">
            {{ Form::open(['route' => 'register', 'method' => 'post', 'class' => 'form-horizontal col-md-8 col-md-offset-2']) }}
                @include('admin.registrations.form')

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-user"></i>
                            Register
                        </button>
                    </div>
                </div>
            {{ Form::close() }}
          </div>
        </div>
    </div>
@stop