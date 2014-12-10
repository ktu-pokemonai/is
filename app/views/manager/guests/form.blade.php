<div class="form-group">
    {{ Form::label('first_name', 'First name', ['class' => 'control-label']) }}
    {{ Form::text('first_name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('last_name', 'Last name', ['class' => 'control-label']) }}
    {{ Form::text('last_name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('id_nr', 'ID nr.', ['class' => 'control-label']) }}
    {{ Form::text('id_nr', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('user_id', 'User', ['class' => 'control-label']) }}
    {{ Form::select('user_id', $userslist, null, ['class' => 'form-control']) }}
</div>