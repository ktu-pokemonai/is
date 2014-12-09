<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
             {{ HTML::image(asset('img/logo.jpg'), 'Pokemon', ['class' => 'img-responsive']) }}
        </div>

        <ul class="nav navbar-nav">
            @section('menu')
                @include('layout.menu.master')
            @show
        </ul>

        @if(Auth::guest())
            {{ Form::open(['route' => 'auth.login', 'class' => 'navbar-form navbar-right']) }}
                <div class="form-group">
                    {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-sign-in"></i>
                    </button>
                </div>
            {{ Form::close() }}
        @else
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::user()->is_admin)
                {{ nav(route('admin.index'), 'Admin panel', 'fa fa-btn fa-tasks') }}
            @elseif(!Auth::user()->apartment_id)
                {{ nav(route('manager.index'), 'Manager panel', 'fa fa-btn fa-tasks') }}
            @else
                {{ nav(route('user.index'), 'User panel', 'fa fa-btn fa-tasks') }}
            @endif
            {{ nav(route('auth.logout'), 'Logout', 'fa fa-btn fa-sign-out') }}
        </ul>
        @endif
    </div>
</div>