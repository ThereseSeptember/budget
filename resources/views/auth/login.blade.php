@extends('layouts.master') 
@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="card">
                    <form method="POST" action="{{ route('login') }}" class="card-content">
                        @csrf
                        <h1 class="title">Login</h1>
                        <div class="field">
                            <label class="label">E-Mail Address</label>
                            <div class="control">
                                <input class="input" type="email" name="email" value="{{ old('email') }}" >
                            </div>
                            @if ($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input class="input" name="password" type="password">
                            </div>
                            @if ($errors->has('password'))
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <div class="control">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Remember Me
                                  </label>
                            </div>
                        </div>
                        <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link">Login</button>
                                </div>
                                <div class="control">
                                    <a href="{{ route('password.request') }}" class="button is-text">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection