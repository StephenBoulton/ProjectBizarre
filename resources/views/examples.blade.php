@extends('layouts.master')

@section('title', 'My Home Page')

@section('content')
    <section class='projectContent'>
        <div class="opener">
            <img src="{{asset('images/examples.svg')}}" alt="Past Papers page">
            <h1>Past Projects</h1>
            <p>If you are looking for some inspiration then you are in the right place. Here you will find some previous projects and the types of skills each of them required.</p>
            <p>You will also be able to look at what types of research methods other people have used on previous work which could be some great insight into the routes you may explore.</p>
        </div>

        {{--displaying the finals data from the database--}}
        {{-- the $final->.... is calling that cloumn from the database so can arrangew where information id displayed--}}

    @if (isset ($finals))
            @foreach ($finals as $final)

                <div class="exampleBody" id={{$final->id}}>
                    <h2 class="exampleTitle">{{ $final->title}}</h2>
                    {{--javascript is used her to toggle the exampleText box on and off--}}
                    <div class="exampleText">
                        <h2 class="exampleTitle">{{ $final->title}}</h2>
                        <div class="exampleGrid">
                        <div class="mainText">
                            <div class="intro">
                                <h2>Introduction</h2>
                                <p>Introduction {{ $final->abstract}}</p>
                            </div>
                            <div class="conclu">
                                <h2>Conclusion</h2>
                                <p>Conclusion {{ $final->conclusion}}</p>
                            </div>
                        </div>
                        <div class="methods">
                            <h2>Research Methods</h2>
                            <p>methods {{ $final->methods}}</p>
                        </div>

                        <div class="keySkills">
                            <h2>Key Skill Used</h2>
                            <p>key skills {{ $final->skills}}</p>
                        </div>
                    </div><!--grid-->
                    </div>
                </div>

            @endforeach
        @endif
    </section>
    <footer>
        @include('includes.footer')
    </footer>
@endsection


