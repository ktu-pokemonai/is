@extends('layout.master')

@section('content')
<div class="col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
            {{ Form::open(['route' => 'auth.login', 'method' => 'post', 'class' => 'form-horizontal col-sm-8 col-sm-offset-2']) }}
                <div class="form-group">
                    {{ Form::label('username', 'Username', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('username', null, ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-10">
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </button>
                    </div>
                  </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop