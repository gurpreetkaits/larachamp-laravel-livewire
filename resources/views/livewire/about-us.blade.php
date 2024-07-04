@extends('frontend.app')
@section('title', 'About Me')
@section('content')
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
<div class="banner container py-5">
    <div class="row">
            <style>
                .aboutImg {
                    padding: 4px;
                    box-shadow: rgba(100, 100, 111, 0.3) 0px 7px 29px 0px;
                }
            </style>
        <div class="col-lg-4 w-25">
            <img src="{{asset('me.jpeg')}}" alt="me" class="img-fluid aboutImg">
        </div>
        <div class="col-lg-8">
            <p>
                I am a FullStack PHP/Laravel developer and love using Laravel.
                Basically most of the time I love to read
                about
                Laravel coz I’m a Laravel enthusiast. Nowadays trying to contribute in the community as a developer.

                Welcome to the Blog. I love writing whether it’s my personal feelings about any topic or it’s any
                regular Laravel
                PHP learning I love sharing everything. I feel like writing is something that gives me inner
                satisfaction when I
                share something with the community which is still providing a free source of learning. Basically,
                Laravel itself is
                my first love in the programming world after PHP or can say with PHP.

                Nowadays I am just working As a Laravel developer and finding ways to learn new things every day.
            </p>
            <h2>
                Short Story Behind The Dev: Gurpreet alias (Robin)
            </h2>
            <p class="intro-para">
                I come from a non-tech background basically it’s because, till my 11th standard in 2019,I didn’t know
            </p>
        </div>

        <div class="col-lg-12 my-3">
            <p class="intro-para">
                about the “p”
                of programming. But eventually, after that, someone advised me that this (web development) is something
                that you can
                start and choose as a career option. I wasn’t aware of this then rather than finding my first job. I
                started writing
                proposals on Upwork and after trying a lot on Upwork I moved to Fiverr and got my first work on Fiverr.
                So, it was
                an amazing journey for me till now. And I’m enjoying it a lot.
            </p>
            <h2>Habits</h2>
            <p class="">
                I love writing and this is my first habit. As I was kind of an introverted student so that’s why I
                failed to develop an interest in the outer world, most of the time I spent with myself. And I played
                indoor games like chess.
                <br>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <p>
                Well, I think that whenever I write a blog I feel like it’s something that is better for me. And maybe
                someone is getting free resources with a different point of view. And One more thing that I would say,
                is when I started writing I wasn’t that involved in the coding world but after that whenever I used to
                write the blog I always find/learn new things. So, this is the motivation.

                so, the target is to write deeper and more valuable blogs about my learnings or someday it can be
                researched on a particular topic. I think this is why I write here. And money is the second thing that
                comes here because I can do this by doing my job or something else. But this is something that motivates
                me to write about things that I learned or practiced.
            </p>
        </div>
    </div>
</div>
@endsection
