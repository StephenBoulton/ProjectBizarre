<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</head>
<body>

<header class="row">
    @include('includes.header')
</header>

<div class="container">

    <article class="row">

        @yield('content')

    </article>

</div><!-- close container -->
</body>
</html>