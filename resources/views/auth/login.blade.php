@extends('layouts.Auth')

@section('content')

<div class="row">
      <div class="col s12">
          <div class="container"><div id="login-page" class="row">
            <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
              <form class="login-form" action="{{ route('login') }}" method="POST">
              @csrf    
              <div class="row">
                  <div class="input-field col s12">
                    <h5 class="ml-4">Sign in</h5>
                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">person_outline</i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="email" class="center-align">email</label>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                  </div>
                </div>
                <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">lock_outline</i>
                    <input id="password" type="password" name="password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12 l12 ml-2 mt-1">
                    <p>
                      <label>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <span>Remember Me</span>
                      </label>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <Button type="submit"  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</Button>
                  </div>
                </div>
                <div class="row">
                  <!-- <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="{{ route('register') }}">Register Now!</a></p>
                  </div> -->
                  <div class="input-field col s6 m6 l6">
                    <!-- @if (Route::has('password.request'))
                    <p class="margin right-align medium-small"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
                    @endif -->
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


