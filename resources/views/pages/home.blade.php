@extends('layouts.app')

@push('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">
	<style type="text/css">
	.slider {
		width: 90%;
		margin: 100px auto;
	}

	.slick-slide {
		margin: 0px 20px;
	}

	/*.slick-slide img {
		width: 100%;
	}*/

	.slick-prev:before,
	.slick-next:before {
		color: #999;
	}


	.slick-slide {
		transition: all ease-in-out .3s;
		opacity: .2;
	}

	.slick-active {
		opacity: .5;
	}

	.slick-current {
		opacity: 1;
	}
	</style>
@endpush

@section('content')
	@include('inc.joinus')
    <div class="head">
		<img src="{{ asset('images/body-building2.jpg') }}">
		<div class="head-content">
			<div class="container" 
				data-aos="fade-up"
				data-aos-duration="1000">
				<div>
					<h1>This Is The Heading</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<div 
						data-aos="fade-left"
						data-aos-duration="1000">
						<button type="button" data-toggle="modal" data-target="#exampleModal">Join Us</button>
						<a href="#message">Contact Us</a>
					</div>
				</div>
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
						<a class="nav-link activated" href="/">Home</a>
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
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
				</ul>
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link btn btn-success" type="button" data-toggle="modal" data-target="#exampleModal">
							Join Us
						</a>
					</li>
				</ul>				
			</div>
		</div>
	</nav>
	<div class="head-spacing">
	</div>
	<div class="container">
		<div class="events">
			<div class="event">
				<img src="{{ asset('images/body-building.jpg') }}" alt="">
				<div class="container" 
					data-aos="fade-left"
					data-aos-duration="500">
					<h2>Martial Arts</h2>
					<p>Judo, Karate, Olympic Freestyle Wrestling and Thai Box are amongst the list of our classes</p>
					<div class="event-price">
						<p>Rs. 1000/=</p>
					</div>
				</div>
			</div>
			<div class="event">
				<img src="{{ asset('images/all/yoga.jpg') }}" alt="">
				<div class="container" 
				data-aos="fade-left"
				data-aos-duration="1500">
					<h2>Yoga & Pilates</h2>
					<p>From increased strength to flexibility to heart health, we have 38 benefits to rolling out the mat.</p>
					<div class="event-price">
						<p>Rs. 1000/=</p>
					</div>
				</div>
			</div>
			<div class="event">
				<img src="{{ asset('images/head-background.jpg') }}" alt="">
				<div class="container" 
				data-aos="fade-left"
				data-aos-duration="2500">
					<h2>Weight Training</h2>
					<p>Here are the basic guidelines, rules, and easy-to-follow workouts.</p>
					<div class="event-price">
						<p>Rs. 1000/=</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="quote" 
		data-aos="fade-up"
		data-aos-duration="1500">
		<h2 class="text-center">BEING FIT IS ATTRACTIVE</h2>
		<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
	</div>
	<div class="our-classes"
		data-aos="fade-up"
		data-aos-duration="1500">
		<div class="container">
			<h1 class="text-center">Our Classes</h1>
			<h3 class="text-center">Classes</h3>
			<div class="row">
				<div class="img">
					<img src="{{ asset('images/jogging.jpg') }}" alt="">
				</div>
				<div class="desc">
					<h2>Class Name</h2>
					<p>This is a short description about the class and the prices for the classes.</p>
					<small><i class="far fa-calendar-alt"></i> 2019-02-10 </small>
					<small><i class="far fa-clock"></i> 7'O Clock</small>
				</div>
				<div class="img">
					<img src="{{ asset('images/push-ups.jpg') }}" alt="">
				</div>
				<div class="desc">
					<h2>Class Name</h2>
					<p>This is a short description about the class and the prices for the classes.</p>
					<small><i class="far fa-calendar-alt"></i> 2019-02-10 </small>
					<small><i class="far fa-clock"></i> 7'O Clock</small>
				</div>
			</div>
			<div class="row">
				<div class="img">
					<img src="{{ asset('images/treadmill.jpg') }}" alt="">
				</div>
				<div class="desc">
					<h2>Class Name</h2>
					<p>This is a short description about the class and the prices for the classes.</p>
					<small><i class="far fa-calendar-alt"></i> 2019-02-10 </small>
					<small><i class="far fa-clock"></i> 7'O Clock</small>
				</div>
				<div class="img">
					<img src="{{ asset('images/yoga.jpg') }}" alt="">
				</div>
				<div class="desc">
					<h2>Class Name</h2>
					<p>This is a short description about the class and the prices for the classes.</p>
					<small><i class="far fa-calendar-alt"></i> 2019-02-10 </small>
					<small><i class="far fa-clock"></i> 7'O Clock</small>
				</div>
			</div>
		</div>
	</div>

	<div class="trainees"
		data-aos="fade-up"
		data-aos-duration="1500">
		<h1 class="text-center">Our Trainees</h1>
		<section class="center slider">
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-1.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-2.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-3.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-4.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-1.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-2.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-3.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-4.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
			<div>
				<img class="slick-image-item" src="{{ asset('images/trainees/team-1.png') }}">
				<div class="social-media-div">
					<div>
						<a href="">
							<i class="fab fa-facebook"></i>
						</a>
						<a href="">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</div>
				<h3 class="text-center">Trainee Name</h3>
			</div>
		</section>
	</div>

	<div class="schedule">
		<h1 class="text-center">Our Schedule</h1>
		<div class="container">
			<div class="row">
				<div data-aos="fade-down" data-aos-duration="500">
					<p>
						<i class="far fa-heart"></i>
					</p>
					<h3 class="text-center">Cardio Program</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
				<div data-aos="fade-down" data-aos-duration="1500">
					<p>
						<i class="fas fa-running"></i>
					</p>
					<h3 class="text-center">Loose Weight Program</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
				<div data-aos="fade-down" data-aos-duration="2500">
					<p>
						<i class="fas fa-om"></i>
					</p>
					<h3 class="text-center">Yoga Classes</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
				<div data-aos="fade-down" data-aos-duration="3000">
					<p>
						<i class="fas fa-fist-raised"></i>
					</p>
					<h3 class="text-center">Boxing Program</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
			</div>
			<div class="row">
				<div>
					<p>
						<i class="fas fa-trophy"></i>
					</p>
					<h3 class="text-center">Karate Classes</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
				<div>
					<p>
						<i class="fas fa-dumbbell"></i>
					</p>
					<h3 class="text-center">Body Building</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
				<div>
					<p>
						<i class="fas fa-swimmer"></i>
					</p>
					<h3 class="text-center">Swimming Program</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
				<div>
					<p>
						<i class="fas fa-dumbbell"></i>
					</p>
					<h3 class="text-center">Basic Exercise</h3>
					<ul class="text-secondary">
						<li>
							<small>Monday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Tuesday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Wednessday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Thursday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Friday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Saturday: 06:00 - 08:00</small>
						</li>
						<li>
							<small>Sunday: 06:00 - 08:00</small>
						</li>
					</ul>
					<p>Instructor Name</p>
				</div>
			</div>
		</div>
	</div>

	<div class="contact" id="message" data-aos="fade-up" data-aos-duration="2000">
		<h1 class="text-center">Contact Us</h1>
		<div class="container">
			<form action="{{ url('send/email') }}" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="">First Name</label>
							<input type="text" name="first_name" class="form-control" placeholder="Your First Name" required />
						</div>
						<div class="form-group">
							<label for="">Last Name</label>
							<input type="text" name="last_name" class="form-control" placeholder="Your Last Name" />
						</div>
						<div class="form-group">
							<label for="">Phone Number</label>
							<input type="text" name="phone" class="form-control" placeholder="Your Phone Number" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Message</label>
							<textarea name="message" id="" cols="30" rows="5" placeholder="Your Message" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<br>
							<input type="submit" name="" value="SEND" class="btn btn-primary form-control" />
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	@include('inc.footer')
@endsection

@push('script')
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="{{ asset('slick/slick.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		$(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 3,
			slidesToScroll: 3
		});
		});
	</script>
@endpush