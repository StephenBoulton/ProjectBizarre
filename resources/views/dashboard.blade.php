@extends('layouts.dashheader')

@section('content')
    {{--center grid on dashboard--}}
    <section class="dashboard">
        <div>
            {{--each article has a title of page, text about page, icon and button to page--}}
            <article>
                <img src="images/head-puzzle.svg" alt="dashboard Information">
                <h5>What is a Dissertation?</h5>
                <p> Step by step break down of the different sections invloved in a dissertation or project</p>
                <a href="/information"><button><<</button></a>
            </article>
            <article>
                <img src="images/examples.svg" alt="dashboard Information">
                <h5>Past Projects</h5>
                <p> Shows you previous projects for insperation, can even upload some of your previous project to inspire the future students</p>
                <a href="/examples"><button>\/</button></a>
            </article>
            <article>
                <img src="images/Project_list.svg" alt="dashboard Information">
                <h5>Project Ideas</h5>
                <p>A list of projects that you can choose from, ideas covering all ranges of computing.</p>
                <a href="/projects"><button>>></button></a>
            </article>
        </div>
    </section>

    <footer>
        @include('includes.footer')
    </footer>
@endsection
