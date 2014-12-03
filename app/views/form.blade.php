@extends($layout)

@section('content')
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        @if(isset($icon))
            <i class="{{ $icon }}"></i>
        @endif

        {{ $title }}
      </div>
      <div class="panel-body">
        @yield('form')
      </div>
    </div>
</div>
@stop