@extends('frontend.app')
@section('title', 'About Me')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
    <div class="banner container py-5">
        <div class="row">
            <div class="col-lg-12">
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
            </div>
          
            <div class="col-lg-12">
                <h2>
                    Short Story Behind The Dev: Gurpreet alias (Robin)
                </h2>
                <p class="intro-para">
                    I come from a non-tech background basically it’s because, till my 11th standard in 2019, I didn’t know
                    about the “p”
                    of programming. But eventually, after that, someone advised me that this (web development) is something
                    that you can
                    start and choose as a career option. I wasn’t aware of this then rather than finding my first job. I
                    started writing
                    proposals on Upwork and after trying a lot on Upwork I moved to Fiverr and got my first work on Fiverr.
                    So, it was
                    an amazing journey for me till now. And I’m enjoying it a lot.
                </p>
            </div>
            <div class="col-lg-12 d-flex justify-content-center my-3">
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ol class="timeline">
                    <li class="timeline-item">
                        <span class="timeline-item-icon | avatar-icon">
                            <i class="avatar">
                                <img src="https://42works.net/wp-content/uploads/2023/05/unnamed-e1684993275832.png" />
                            </i>
                        </span>
                        <div class="new-comment">
                            <div class="row">
                                <div class="col-lg-12">42 Works</div>
                                <div class="col-lg-12 text-secondary">Nov 2023 - Present    </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-item-icon | avatar-icon">
                            <i class="avatar">
                                <img src="http://innerxcrm.com/website/assets/images/logo1.png" />
                            </i>
                        </span>
                        <div class="new-comment">
                            <div class="row">
                                <div class="col-lg-12">Innerxcrm Informatics</div>
                                <div class="col-lg-12 text-secondary">May 2023 - Oct 2023 · 6 mos</div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-item-icon | avatar-icon">
                            <i class="avatar bg-light">
                                <img src="https://www.paradisosolutions.com/wp-content/uploads/2022/09/Logo-GIF-1.gif" />
                            </i>
                        </span>
                        <div class="new-comment">
                            <div class="row">
                                <div class="col-lg-12">Paradiso Solutions</div>
                                <div class="col-lg-12 text-secondary">Dec 2022 - Apr 2023 · 5 mos</div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-item-icon | avatar-icon">
                            <i class="avatar bg-light">
                                <img src="https://bainslabs.com/wp-content/uploads/2022/02/logo-color-200.png" />
                            </i>
                        </span>
                        <div class="new-comment">
                            <div class="row">
                                <div class="col-lg-12">Bainslabs</div>
                                <div class="col-lg-12 text-secondary">Aug 2022 - Dec 2022 · 5 mos</div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-item-icon | avatar-icon">
                            <i class="avatar">
                                <img src="{{ asset('images/robindev.png') }}" />
                            </i>
                        </span>
                        <div class="new-comment">
                            <div class="row">
                                <div class="col-lg-12">Freelancer (self employed)</div>
                                <div class="col-lg-12 text-secondary">Nov 2020 - Jul 2022 </div>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Habits</h2>
                <p class="">
                    I love writing and this is my first habit. As I was kind of an introverted student so that’s why I
                    failed to develop an interest in the outer world, most of the time I spent with myself. And I played
                    indoor games like chess.
                    <br>
                    <br>
                    <b>
                    Writing
                    </b>
                    <br>
                    <b>
                    Playing Chess
                    </b><br><b>Playing the Flute</b><br>
                    <b>Travel</b>
                </p>
            </div>
            <div class="col-lg-12">
                <h2>Why this Blog</h2>
                <p>
                    Well, I think that whenever I write a blog I feel like it’s something that is better for me. And maybe someone is getting free resources with a different point of view. And One more thing that I would say, is when I started writing I wasn’t that involved in the coding world but after that whenever I used to write the blog I always find/learn new things. So, this is the motivation.

so, the target is to write deeper and more valuable blogs about my learnings or someday it can be researched on a particular topic. I think this is why I write here. And money is the second thing that comes here because I can do this by doing my job or something else. But this is something that motivates me to write about things that I learned or practiced.
                </p>
            </div>
            <div class="col-lg-12">
                <h2>It's Me</h2>
                <div class="elfsight-app-b56f3e66-6b8b-46c5-8171-39d884777e4f" data-elfsight-app-lazy></div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<script>
    let tag = document.getElementByClassName("eapps-widget-toolbar-panel");
    tag.classlist.add = 'd-none';
</script>
@endpush
