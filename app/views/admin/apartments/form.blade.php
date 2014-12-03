<div class="form-group">
    {{ Form::label('nr', 'Apartment number', ['class' => 'control-label']) }}
    {{ Form::text('nr', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('capacity', 'Capacity', ['class' => 'control-label']) }}
    {{ Form::text('capacity', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    @include('admin.actions', ['back' => route('admin.apartments.index')])
</div>