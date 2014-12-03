<div class="form-group">
    {{ Form::label('room_id', 'Apartment', ['class' => 'control-label col-md-3']) }}
    <div class="col-md-9">
        {{ Form::select('apartment_id', ['' => 'Choose room...'] + Apartment::lists('nr', 'id'), null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('first_name', 'First name', ['class' => 'control-label col-md-3']) }}
    <div class="col-md-9">
    {{ Form::text('first_name', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('last_name', 'Last name', ['class' => 'control-label col-md-3']) }}
    <div class="col-md-9">
    {{ Form::text('last_name', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('email', 'Email', ['class' => 'control-label col-md-3']) }}
    <div class="col-md-9">
    {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('phone', 'Phone', ['class' => 'control-label col-md-3']) }}
    <div class="col-md-9">
    {{ Form::text('phone', null, ['class' => 'form-control']) }}
    </div>
</div>