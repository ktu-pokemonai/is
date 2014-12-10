{{ Form::open(['route' => 'user.equipment.store', 'method' => 'post', 'class' => 'form-inline']) }}
    <div class="form-group">
        {{ Form::label('room_id', 'Room', ['class' => 'control-label']) }}
        {{ Form::select('room_id', Room::lists('name', 'id'), null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">
            <i class="fa fa-btn fa-search"></i>
            Find
        </button>
    </div>
{{ Form::close() }}