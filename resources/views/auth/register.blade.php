@extends('auth.app')

@section('title')
    Register
@stop

@section('content')
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 1-column register-bg  blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="register-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="input-field col s12">
              <h5 class="ml-4">Register</h5>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-2">person_outline</i>
              <input id="username" type="text">
              <label for="username" class="center-align">Username</label>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-2">mail_outline</i>
              <input id="email" type="email">
              <label for="email">Email</label>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-2">lock_outline</i>
              <input id="password" type="password">
              <label for="password">Password</label>
            </div>
        </div>
        <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix pt-2">lock_outline</i>
              <input id="password-again" type="password">
              <label for="password-again">Password again</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <a href="index.html" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Register</a>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
              <p class="margin medium-small"><a href="{{ route('login') }}">Already have an account? Login</a></p>
            </div>
        </div>
    </form>
  </div>
</div>
        </div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('js/plugin.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom-script.js')}}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  
</body>
@endsection

<!-- OLD REGISTER -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 -->