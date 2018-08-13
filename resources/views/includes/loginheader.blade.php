
{{--This naviagtion is for the login and register pages as to prevent users from accessing pages without signing in--}}
<header>
    <nav>
        <ul>
            @if (Auth::guest())
                <li class="homeButton"><img class="logoMob" src="{{asset('images/logo.png')}}"><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="homeButton"><img class="logoMob" src="{{asset('images/logo.png')}}"><a href="{{ url('/logout') }}">Log Out</a></li>
            @endif
        </ul>
    </nav>
</header>


