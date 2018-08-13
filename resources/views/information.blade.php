@extends('layouts.master')

@section('title', 'My Home Page')

@section('content')
    {{--Navigation for the informational page--}}
    <ul class="secondnav">
        <li class="navheading">Navigation</li>
        <li><a href="#A1">What is a Dissertation?</a></li>
        <li><a href="#A2">Structuring</a></li>
        <li><a href="#A3">Abstract</a></li>
        <li><a href="#A5">Methodologies</a></li>
        <li><a href="#A6">Analysing Data</a></li>
        <li><a href="#A7">Conclusion</a></li>
        <li><a href="#A8">References</a></li>
    </ul>

    <section class='projectContent'>
        {{--introdution paragraph--}}
    <div class="opener">
        <img src="{{asset('images/head-puzzle.svg')}}" alt="Dissertation break down page">
        <h1>Past Projects</h1>
        <p>If you are looking for some inspiration then you are in the right place. Here you will find some previous projects and the types of skills each of them required.</p>
        <p>You will also be able to look at what types of research methods other people have used on previous work which could be some great insight into the routes you may explore.</p>
    </div>
    </section>

    <section class="dissertationHelp">

        {{--each section have a header, icon and text in it--}}
        <div id="A1" class="infoContent">
            <img src="{{asset('images/seed.svg')}}" alt="Section 1: What is a dissertation">
            <h2>What is a Dissertation</h2>
            <p>A dissertation is a particular kind of academic task.
                You will usually be asked to generate a topic for yourself;
                to plan and execute a project investigating that topic; and
                to write-up what you did and what your findings were.
                Important stages in the dissertation process include:<br>
                ·         choosing a topic,<br>
                ·         developing a research question,<br>
                ·         effective planning of the research,<br>
                ·         being organised and methodical while conducting your research,<br>
                ·         reporting the research
            </p>
        </div>

        <div id="A2" class="infoContent white">
            <img src="{{asset('images/template_icon.svg')}}" alt="Section 2: Structuring">
            <h2>Structuring</h2>
            <p>
                A dissertation is an extended project that asks you to manage your time and undertake a variety of tasks. Some courses schedule the dissertation at the end, while others have it running along concurrently with other modules. Whichever way your course is organised, it is essential that you create a plan that helps you allocate enough time to each task you have to complete.
                It is useful to work out how many weeks you have until you need to submit your completed dissertation, and draw a chart showing these weeks. Block out the weeks when you know you will be unable to work, and mark in other main commitments you have that will take time during this period. Then allocate research tasks to the remaining time.
                It is very important to be realistic about how long each task is likely to take. Some focused thought at the beginning, then at the planning stage of each phase, could save hours later on.  Write down the resources needed for each stage. It could be time in the library; the resource of your working hours; or the use of equipment or room space that needs to be booked in advance.
                To improve the prospect of completing on time, and avoiding procrastination, you need to:<br><br>
                ·         be realistic about when you can/will start;<br>
                ·         devote time to planning and revising your plan;<br>
                ·         try to work out if any of your research will take a set amount of time to complete;<br>
                ·         allocate appropriate time for any travelling you need to do for your research;<br>
                ·         include other (non-dissertation related) things that you have to do between now and then;<br>
                ·         have clear and achievable objectives for each week;<br>
                ·         focus on one thing at a time;<br>
                ·         leave time for editing and correcting;<br>
                ·         reward yourself when you complete objectives that you have timetabled;<br>
                ·         if you fall behind make sure you spend time reworking your plan.<br><br>
                Your research plan should also include information about what equipment you will need to complete your project, and any travel costs or other expenses that you are likely to incur through the pursuit of your research. You should also think about whether you are dependent on any one else to complete your project, and think about what you are going to do if they are unable to help you.
                Once you have created your plan it is a good idea to show it to someone else. Ideally you will be able to show it to a member of academic staff or bring it to the Learning Development, but talking it over with a friend may also help you to spot anything that you have forgotten or anywhere that you have been unrealistic in your planning.

            </p>
        </div>

        <div id="A3" class="infoContent">
            <img src="{{asset('images/planning_icon.svg')}}" alt="Section 3: Abstract">
            <h2>Abstract</h2>
            <p>
                This may be one of the shortest sections of your thesis or dissertation, but it is worthwhile taking great care to write it well. Essentially, the Abstract is a succinct summary of the research. It should be able to stand alone in representing why and how you did what you did, and what the results and implications are. It is often only one page long, and there may be a word limit to adhere to. The Abstract is an important element of the thesis, and will become a document in its own right if the thesis is registered within any database. The examiners will therefore assess your Abstract both as part of your thesis, and as a potentially independent document.
                It can be best to write the Abstract last, once you are sure what exactly you are summarising. Alternatively it can be useful to write the abstract earlier on, as an aid to identifying the crucial main thread of your research, its purpose, and its findings, which could then guide the structure of the dissertation.
                Attending to the very restrictive word / space limit, while at the same including all the relevant material is quite a challenge. It might be useful to look at how others have managed. It is certainly an academic exercise, but perhaps not too different from the concise explanations of your research you may have had to give to relatives and neighbours over the last few years, in terms of its brevity, accessibility, and comprehensiveness.

            </p>
        </div>

        <div id="A5" class="infoContent white">
            <img src="{{asset('images/light_icon.svg')}}" alt="Section 5: Methodologies">
            <h2>Methodologies</h2>
            <p>
                In these chapters a straightforward description is required of how you conducted the research. If you used particular equipment, processes, or materials, you will need to be clear and precise in how you describe them.  You must give enough detail for another researcher to replicate your study.

            </p>
        </div>

        <div id="A6" class="infoContent">
            <img src="{{asset('images/data2.svg')}}" alt="Section 6: Analysing Data">
            <h2>Analysing Data</h2>
            <p>
                For most research projects the data collection phase feels like the most important part. However, you should avoid jumping straight into this phase until you have adequately defined your research problem, and the extent and limitations of your research. If you are too hasty you risk collecting data that you will not be able to use.
                Consider how you are going to store and retrieve your data. You should set up a system that allows you to:<br><br>
                ·         record data accurately as you collect it;<br>
                ·         retrieve data quickly and efficiently;<br>
                ·         analyse and compare the data you collect;<br>
                ·         create appropriate outputs for your dissertation e.g. tables and graphs, if appropriate.<br><br>
                There are many systems that support effective data collection and retrieval. These range from card indexes and cross-referenced exercise books, through electronic tools like spreadsheets, databases and bibliographic software, to discipline-specific tools. You should talk about how you plan to store your data with your supervisor, an information librarian, or a study adviser in the Learning Development. As you undertake your research you are likely to come up with lots of ideas. It can be valuable to keep a record of these ideas on index cards, in a dedicated notebook, or in an electronic file. You can refer back to this ‘ideas store’ when you start to write. They may be useful as ideas in themselves, and may be useful as a record of how your thinking developed through the research process.

            </p>
        </div>

        <div id="A7" class="infoContent white">
            <img src="{{asset('images/planning_icon.svg')}}" alt="Section 7: Conclusion">
            <h2>Conclusion</h2>
            <p>
                This chapter tends to be much shorter than the Discussion. It is not a mere ‘summary’ of your research, but needs to be ‘conclusions’ as to the main points that have emerged and what they mean for your field.
            </p>
        </div>

        <div id="A8" class="infoContent">
            <img src="{{asset('images/book_icon.svg')}}" alt="Section 8: References">
            <h2>References</h2>
            <p>
                This section needs to be highly structured, and needs to include all of your references in the required referencing style. As you edit and rewrite your dissertation you will probably gain and lose references that you had in earlier versions. It is important therefore to check that all the references in your reference list are actually referenced within the text; and that all the references that appear in the text appear also in the reference list.
            </p>
        </div>

    </section>

    <footer>
        @include('includes.footer')
    </footer>
@endsection

