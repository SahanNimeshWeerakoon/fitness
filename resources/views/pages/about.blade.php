@extends('layouts.app')
    @push('head')
        <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}"/>
        <style>
            .row img{
                width: 100%;
            }
        </style>
    @endpush
    @section('content')
        @include('inc.joinus')
        <div class="head">
            <img src="{{ asset('images/body-building2.jpg') }}">
            <div class="head-content">
                <div class="container packages">
                    <h1>ABOUT US</h1>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/packages">Pricing And Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link activated" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Gallery</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a href="" class="nav-link btn btn-success" type="button" data-toggle="modal" data-target="#exampleModal">
                                Join Us
                            </a>
                        </li>
                    </ul>				
                </div>
            </div>
        </nav>
        <div class="head-spacing">
        </div>

        <div class="history">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('images/history.jpg') }}" alt="">
                        <img src="{{ asset('images/presses.jpg') }}" alt="">
                    </div>
                    <div class="col-md-7">
                        <div class="details">
                            <h3 class="text-center">
                                Hi there
                            </h3>
                            <hr>
                            <p>
                                We’re the Fitness Time, a totally new way to exercise. Affordable, high-spec nationwide gyms, that 
                                make absolutely everybody feel welcome.Whatever your starting point, and wherever you want to go, 
                                we can help.So we’re for everyone who’s had enough of the unbelievably-expensive-monthly-contract 
                                gym, or the make-me-feel-judged-the-moment-I-walk-through-the-door gym.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="text-center">We Believe ...</h4>
                                <hr>
                                <p class="text-secondary">
                                    Helping Sri Lanka to achieve a healthy balance, to be more precise. We think everybody deserves
                                     the support to reach their goals whatever they are, and without paying a premium or being tied
                                     into a contract. 
                                </p>
                                <strong class="float-right"><i class="fas fa-arrow-right"></i></strong>
                            </div>
                            <div class="col-md-4">
                                <h4 class="text-center">...In Balance</h4>
                                <hr>
                                <p class="text-secondary">
                                        That’s why we offer no pressure membership that you can stop and start whenever you want. 
                                        Instead of being tied to a year’s contract, and opening hours that just don’t suit lots of us, 
                                        like shift workers and students, you can have exactly the way you want it.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="text-center">Friendly Trainers</h4>
                                <hr>
                                <p class="text-secondary">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis fuga, asperiores exercitationem
                                        consequuntur eius eligendi! Obcaecati, fugit facere laudantium ullam sapiente suscipit quo 
                                        voluptatum. Veniam est illum ducimus blanditiis totam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="leadership">
            <h1 class="text-center">Our Leaders</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="img">
                            <img src="{{ asset('images/leader/leader1.jpg') }}" alt="">
                        </div>
                        <h4 class="text-center">Mike Richardsan</h4>
                        <h4 class="text-center text-secondary">CEO</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="img">
                            <img src="{{ asset('images/leader/leader2.jpg') }}" alt="">
                        </div>
                        <h4 class="text-center">Mellisa Howard</h4>
                        <h4 class="text-center text-secondary">Manager</h4>
                    </div>
                    <div class="col-md-4">
                        <div class="img">
                            <img src="{{ asset('images/leader/leader3.jpg') }}" alt="">
                        </div>
                        <h4 class="text-center">Charles White</h4>
                        <h4 class="text-center text-secondary">Owner</h4>
                    </div>
                </div>
            </div>
        </div>

        @include('inc.footer')
    @endsection
    @push('script')
        <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
    @endpush