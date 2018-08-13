@extends('layouts.reglayout')

@section('content')
<div class="loginBox registerBox">

                <div class="navheading">Register</div>
                <div>
                    <form role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="formStyle{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>

                            <div>
                                <input id="name" type="text"name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span>
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="formStyle{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <div>
                                <input id="email" type="email"name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="formStyle{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" name="password">

                                @if ($errors->has('password'))
                                    <span>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="formStyle{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Confirm Password</label>

                            <div>
                                <input id="password-confirm" type="password" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span>
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="buttonDiv">
                                <button type="submit">
                                   Register
                                </button>
                            </div>
                    </form>
                </div>

</div>

<footer>
    @include('includes.footer')
</footer>
@endsection
