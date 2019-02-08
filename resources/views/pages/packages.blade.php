@extends('layouts.app')
    @section('content')
        @include('inc.joinus')
        <div class="head">
            <img src="{{ asset('images/body-building2.jpg') }}">
            <div class="head-content">
                <div class="container packages">
                    <h1>PACKAGES AND PRICINGS</h1>
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
                            <a class="nav-link activated" href="/packages">Pricing And Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
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

        <div class="plan">
            <h1 class="text-center">Choose the Perfect Plan for you</h1>
            <p class="text-center text-secondary">Who are in extremely love with eco friendly system.</p>

            <div class="container">
                
                <h2 class="sub-heading">Plans For Individuals</h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Standard</h3>
                                <p>For body building individuals</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Business</h3>
                                <p>For the busy people</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Ultimate</h3>
                                <p>For the elders</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                </div>

                <h2 class="sub-heading">Yoga Plans</h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Standard</h3>
                                <p>For body building individuals</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Business</h3>
                                <p>For the busy people</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Ultimate</h3>
                                <p>For the elders</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                </div>

                <h2 class="sub-heading">Massinve Building Plans</h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Standard</h3>
                                <p>For body building individuals</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Business</h3>
                                <p>For the busy people</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-danger">Ultimate</h3>
                                <p>For the elders</p>  
                            </div>
                            <div class="col-md-6">
                                <h2>Rs. 1000/=</h2>
                            </div>
                        </div>
                        <div class="title-desc">
                            <p class="text-center">
                                <strong>Title Describing The Package</strong>
                            </p>
                        </div>
                        <div class="desc">
                            <p>
                                Here goes the description of the package. This contains all the details including,
                                time period which the package is valid, the expiration dates, pricings and the number of 
                                members should be in a team if there is a team. ore anything related to a gym plan.
                                And for the testing purposes this shoud be little bit longer to see what could happen
                                if the content is long. 
                            </p>
                            <a href="" class="btn btn-outline-dark">Call Us For More Info</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @include('inc.footer')
    @endsection