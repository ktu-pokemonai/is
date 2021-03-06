@extends('admin.layout')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-envelope-o"></i>
            Create message
          </div>
          <div class="panel-body">
            {{ Form::open(['route' => 'admin.messages.store', 'method' => 'post']) }}
                @include('admin.messages.form')

                <div class="form-group">
                    @include('admin.actions', ['back' => route('admin.messages.index'), 'save' => 'Save & new'])
                </div>
            {{ Form::close() }}
          </div>
        </div>
    </div>
@stop