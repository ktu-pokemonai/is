@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <i class="fa fa-btn fa-check"></i>
      {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <i class="fa fa-btn fa-warning"></i>
      {{ Session::get('warning') }}
    </div>
@endif

@if(Session::has('danger'))
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <i class="fa fa-btn fa-warning"></i>
      {{ Session::get('danger') }}
    </div>
@endif

@if(Session::has('info'))
    <div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <i class="fa fa-btn fa-info-circle"></i>
      {{ Session::get('info') }}
    </div>
@endif

@if(!$errors->isEmpty())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <i class="fa fa-btn fa-warning"></i>
        Form validation failed with errors:
        <ul>
        @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
        </ul>
    </div>
@endif