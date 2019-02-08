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
        <div class="container">
            <div class="row">
                <div class="col col-md-8 push-down-sm">
                    <h2>Welcome to the page!</h2>
                    <div class="row">
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/alora-griffiths-750409-unsplash.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/alora-griffiths-750409-unsplash.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/body-building.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/body-building.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/body-building2.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/body-building2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/cut.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/cut.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/head-background.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/head-background.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/history.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/history.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/history2.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/history2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/jogging.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/jogging.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/muscles.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/muscles.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/presses.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/presses.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/pullup-girl.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/pullup-girl.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a class="example-image-link" href="{{ url('images/pullup.jpg') }}" data-lightbox="example-set">
                                <img class="example-image" src="{{ asset('images/pullup.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('script')
        <script src="{{ asset('js/lightbox-plus-jquery.min.js') }}"></script>
    @endpush