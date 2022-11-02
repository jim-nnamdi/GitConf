@extends('layouts.dashboard')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-20 mx-auto">
        <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Welcome {{ucfirst(auth()->user()->name)}} !</h1>
                <div class="h-1 w-20 bg-blue-700 rounded"></div>
            </div>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Getting into tech Conference is a student run programme so expect talks on how to build a career in tech and how to manage being a studemt in tech and Action pointers to begin with in tech and also Q&A sessions.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <img class="h-40 w-full object-cover object-center" src="/gitconf.jpeg" alt="content">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="tracking-widest text-blue-500 text-xs font-medium title-font">SESSIONS</h3>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">GitConf sessions</h2>
                    <p class="leading-relaxed text-base">See the sessions to be taken at GitConference, talks, lightning sessions and technical talks.</p>
                </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <img class="h-40 w-full object-cover object-center" src="/gitconf.jpeg" alt="content">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="tracking-widest text-blue-500 text-xs font-medium title-font">SPEAKERS</h3>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">GitConf Speakers</h2>
                    <p class="leading-relaxed text-base">See our catalog of speakers which span across design and engineering pros.</p>
                </div>
            </div>
            
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <img class="h-40 w-full object-cover object-center" src="/gitconf.jpeg" alt="content">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="tracking-widest text-blue-500 text-xs font-medium title-font">SPONSORS</h3>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">GitConf Sponsors</h2>
                    <p class="leading-relaxed text-base">GitConference Sponsors page and dedicated listings on who and what they are.</p>
                </div>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <img class="h-40 w-full object-cover object-center" src="/gitconf.jpeg" alt="content">
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="tracking-widest text-blue-500 text-xs font-medium title-font">DECKS</h3>
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Speaker SlideDecks</h2>
                    <p class="leading-relaxed text-base">Want to go over the conference slide decks again, click here to see all the slide decks.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection