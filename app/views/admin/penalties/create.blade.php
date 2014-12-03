@extends('admin.layout')

@section('content')
    <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-thumbs-o-down"></i>
                Create penalty
              </div>
              <div class="panel-body">
                {{ Form::open(['route' => 'admin.penalties.store', 'method' => 'post']) }}
                    <div class="form-group">
                        {{ Form::label('user_id', 'User', ['class' => 'control-label']) }}
                        {{ Form::select('user_id', User::lists('username', 'id'), null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('reason', 'Reason', ['class' => 'control-label']) }}
                        {{ Form::text('reason', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        @include('admin.actions', ['back' => route('admin.penalties.index')])
                    </div>
                {{ Form::close() }}
              </div>
            </div>
        </div>
@stop