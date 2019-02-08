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
                <h1>GALLERY</h1>
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
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link activated" href="/gallery">Gallery</a>
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

    <h1 class="text-center" data-aos="fade-up" data-aos-duration="2000">EQUIPMENTS</h1>
    <h3 class="text-center text-secondary" data-aos="fade-up" data-aos-duration="2000">WE ARE WELL EQUIPPED</h3>
    <div class="equipments" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/equipments/Cardiomachines.jpg') }}" alt="">
                        </div>
                        <br>
                        <div class="col-md-12">
                            <img src="{{ asset('images/equipments/Dumbbells.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/equipments/Weightmachines.jpg') }}" alt="">
                    <img src="{{ asset('images/equipments/small-dumbells.jpg') }}" alt="">
                    <img src="{{ asset('images/equipments/wheels.jpg') }}" alt="">
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('images/equipments/Flexionmachines.jpg') }}" alt="">
                        </div>
                        <br>
                        <div class="col-md-12">
                            <img src="{{ asset('images/equipments/Pull-upbars.jpg') }}" alt="">
                        </div>
                        <div class="col-md-12">
                            <img src="{{ asset('images/equipments/pullup.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery">
        <h2 class="text-center">Gallery</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/alora-griffiths-750409-unsplash.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/alora-griffiths-750409-unsplash.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/body-building.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/body-building.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/body-building2.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/body-building2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/cut.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/cut.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/head-background.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/head-background.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/history.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/history.jpg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/all/kettle.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/all/kettle.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/jogging.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/jogging.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/muscles.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/muscles.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/presses.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/presses.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/pullup-girl.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/pullup-girl.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="example-image-link" href="{{ url('images/pullup.jpg') }}" data-lightbox="example-set" data-title="This displays the description of the image">
                        <img class="example-image" src="{{ asset('images/pullup.jpg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('inc.footer')
        
    @endsection
    @push('script')
        <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
    @endpush