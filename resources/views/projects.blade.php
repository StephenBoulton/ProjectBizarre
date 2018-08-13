@extends('layouts.master')

@section('title', 'My Home Page')

@section('content')

    <section class='projectContent'>
        {{--opening paragraph--}}
        <div class="opener">
            <img src="{{asset('images/Project_list.svg')}}" alt="Project list Page">
            <h1>Project Ideas</h1>
            <p> Coming up with ideas for projects and dissertations can be the real challenge in all of this, hopefully, with pumping ideas down your throat something will catch on.</p>
            <p>Feel free to take inspiration and ideas from these projects below, each will give you a small break down of what is expected from each project. </p>
        </div>
        {{--displaying the project data from the database--}}
        {{-- the $project->.... is calling that cloumn from the database so can arrangew where information id displayed--}}
        @if (isset ($projects))
            @foreach ($projects as $project)
                <div class="templateBox" id={{$project->id}}>
                    <h2>{{ $project->title}}</h2>
                    <span class="circle"></span>
                    {{--javascript is used her to toggle the templateinfo box on and off--}}
                    <div class="templateInfo">
                        <h3>{{ $project->title}}</h3>
                        <p>{{ $project->brief}}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
{{--includes footer--}}
    <footer>
        @include('includes.footer')
    </footer>

@endsection


