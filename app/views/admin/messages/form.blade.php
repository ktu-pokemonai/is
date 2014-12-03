<div class="form-group">
    {{ Form::label('user_id', 'User', ['class' => 'control-label']) }}
    {{ Form::select('user_id', User::lists('username', 'id'), null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('subject', 'Subject', ['class' => 'control-label']) }}
    {{ Form::text('subject', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('message', 'Message', ['class' => 'control-label']) }}
    {{ Form::textarea('message', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    @include('admin.actions', ['back' => route('admin.messages.index')])
</div>