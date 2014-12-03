<div class="form-group">
    {{ Form::label('name', 'Name', ['class' => 'control-label']) }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('capacity', 'Capacity', ['class' => 'control-label']) }}
    {{ Form::text('capacity', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('from_min', 'From', ['class' => 'control-label']) }}
    {{ Form::text('from_min', null, ['class' => 'form-control', 'placeholder' => '00:00']) }}
</div>

<div class="form-group">
    {{ Form::label('to_min', 'To', ['class' => 'control-label']) }}
    {{ Form::text('to_min', null, ['class' => 'form-control', 'placeholder' => '00:00']) }}
</div>

<div class="form-group">
    {{ Form::label('duration', 'Duration in minutes', ['class' => 'control-label']) }}
    {{ Form::text('duration', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    @include('admin.actions', ['back' => route('admin.rooms.equipment.index', [$room->id])])
</div>