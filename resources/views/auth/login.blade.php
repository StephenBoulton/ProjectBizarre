@extends('layouts.loginlayout')

@section('content')
    <section class="banner">
<div class="loginBox">
    <div class="navheading">Login</div>
    <form class="" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        {{--asking user to enter email address--}}
        <div class="formStyle {{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="">E-Mail Address</label>
            <div>
                <input id="email" type="email" name="email" value="{{ old('email') }}">

                {{--If email doesn't have a @ symble then user is told to insert one--}}
                @if ($errors->has('email'))
                    <span>
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {{--asking user to enter password--}}
        <div class="formStyle {{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="">Password</label>
            <div>
                <input id="password" type="password" name="password">
                {{--If password doesn't match the records then cant get in--}}
                @if ($errors->has('password'))
                    <span>
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <a class="" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
        </div>

        <div class="formStyle">
            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>
        </div>
        <div class="buttonDiv">
            <button type="submit">
                Login
            </button>
        </div>
    </form>
</div>
        <img class="coverPic" src="{{asset('images/coverImageOutline.svg')}}" alt="Cover Photo">
    </section>

    <section class="mainBody">
    <div class="opener">
        <h1>What We Do</h1>
        <p>Welcome to Project Bizarre, there are three main section to the project. Below you can see a overview of each section along with a icon connected to it. The primary objective is to walk students through the process of undertaking a project, from learning what each section of a report entails to looking at past project for ideas and inspiration </p>
    </div>
        <div class="selection">

            <div>
                <svg width=300px height=300px>
                    <circle cx="150" cy="150" r="140" stroke="black" stroke-width="4" fill="green" />
                </svg>
                <img src="{{asset('images/head-puzzle.svg')}}" alt="Information Tab">
            </div>

            <div>
                <svg width=300px height=300px>
                    <circle cx="150" cy="150" r="140" stroke="black" stroke-width="4" fill="green" />
                </svg>
                <img src="{{asset('images/examples.svg')}}" alt="Past Projects">
            </div>

            <div>
                <svg width=300px height=300px>
                    <circle cx="150" cy="150" r="140" stroke="black" stroke-width="4" fill="green" />
                </svg>
                <img src="{{asset('images/Project_list.svg')}}" alt="Available Projects">
            </div>

            <div class="options">
                <h2>How to write a dissertation</h2>
                <h3>Here you will have each section of a dissertation broken down and explained in the hopes that it aids you on your future projects.</h3>
            </div>
            <div class="options">
                <h2>Past Projects</h2>
                <h3>Being able to view previous work can be vital for moving forward in your own. Here we hope you can see how other students went about their projects and take their pros and cons to improve your own projects. </h3>
            </div>
            <div class="options">
                <h2>Projects Ideas</h2>
                <h3>Feel free to browse and take some project ideas, we try and cover a range of topic to give you a overview of what sort of projects universities are looking for.</h3>
            </div>
        </div>
    </section>

    <footer>
        @include('includes.footer')
    </footer>
@endsection
