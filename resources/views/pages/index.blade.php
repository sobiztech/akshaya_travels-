@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- Header Main -->
<div class="demo-screen-headline main-demo main-demo-1 overflow-hidden pb-0 mb-6" id="home">
	<div class="container px-5 px-md-0">
		<div class="overflow-hidden">
			<div class="row">
				<div class="col-lg-6 text-left pos-relative overflow-hidden market-image">
					<div id="carousel-indicators" class="carousel slide" data-bs-ride="carousel">
						<ol class="carousel-indicators">
							<li data-bs-target="#carousel-indicators" data-bs-slide-to="0" class="active"></li>
							<li data-bs-target="#carousel-indicators" data-bs-slide-to="1"></li>
							<li data-bs-target="#carousel-indicators" data-bs-slide-to="2"></li>
							<li data-bs-target="#carousel-indicators" data-bs-slide-to="3"></li>
							<li data-bs-target="#carousel-indicators" data-bs-slide-to="4"></li>
						</ol>
						<div class="carousel-inner" style="width: 600px; height: 400px; object-fit: cover;">
							<div class="carousel-item active">
								<img class="d-block w-100" alt="" src="../assets/images/media/1.jpg" data-bs-holder-rendered="true">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="" src="../assets/images/media/2.png" data-bs-holder-rendered="true">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="" src="../assets/images/media/3.png" data-bs-holder-rendered="true">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="" src="../assets/images/media/4.jpg" data-bs-holder-rendered="true">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="" src="../assets/images/media/5.jpg" data-bs-holder-rendered="true">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 text-left pos-relative overflow-hidden p-3">
					<h1 class="text-shadow text-white">Join hands with <span class="text-warning">Akshaya Travels</span></h1>
					<h6 class="mt-3 text-white text-justify">Akshaya Travels (Pvt) Ltd and experience seamless journeys like never before! We offer a wide
						range of exceptional travel services, including airline ticket booking with the best deals, effortless visa assistance and
						renewals, secure package delivery both domestically and internationally, and personalized travel itineraries tailored just
						for you. All this comes at unbeatable rates, ensuring top-notch services at the most competitive prices. Turn your travel
						dreams into reality with Akshaya Travels and discover a world of hassle-free, enjoyable, and unforgettable journeys!.</h6>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header Main close -->

<!-- statistic Info -->
<div class="row bg-info-gradient">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body p-4 text-dark">
				<div class="statistics-info">
					<div class="row text-center text-white">
						<div class="col-lg-3 col-sm-6 mt-4 mb-4">
							<div class="counter-status">
								<div class="counter-icon bg-primary-gradient box-shadow-primary">
									<i class="icon icon-people text-white"></i>
								</div>
								<h5 class="mb-2">Total Airline Ticket Booking</h5>
								<h2 class="counter mb-0">2569</h2>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 mt-4 mb-4">
							<div class="counter-status">
								<div class="counter-icon bg-secondary-gradient box-shadow-secondary">
									<i class="icon icon-rocket text-white"></i>
								</div>
								<h5 class="mb-2">Total Visa Approovals</h5>
								<h2 class="counter  mb-0">1765</h2>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6  mt-4 mb-4">
							<div class="counter-statuss">
								<div class="counter-icon bg-success-gradient box-shadow-success">
									<i class="icon icon-docs text-white"></i>
								</div>
								<h5 class="mb-2">Total Delivry</h5>
								<h2 class="counter mb-0">846</h2>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6 mt-4 mb-4">
							<div class="counter-status">
								<div class="counter-icon bg-danger-gradient box-shadow-danger">
									<i class="fe fe-trending-up text-white"></i>
								</div>
								<h5 class="mb-2">Total Student Visa</h5>
								<h2 class="counter  mb-0">7253</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- COL-END -->
</div>
<!-- statistic Info close -->

<!-- Service -->
<div class="section pb-7">
	<div class="container px-5 px-md-0">
		<div class="row text-center justify-content-center">
			<div class="col-lg-8 ps-4">
				<h3 class="header-family text-warning">Services</h3>
				<p class="text-default text-white sub-text">We are dedicated to providing comprehensive and reliable travel services
					to meet all your needs.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4 p-4 fanimate">
				<div class="features-icon text-white" style="display: flex; align-items: center;">
					<img src="../assets/images/pngs/airlinetickets.png" alt="Feature Icon" style="width: 50px;height: 50px;">
					<h2 class="mx-1">Airline Ticket</h2>
				</div>
				<p class="text-default text-justify text-white sub-text mb-0">We offer efficient and cost-effective airline ticket booking services,
					ensuring you get the best deals and convenient flight options for both domestic and international travel.</p>
				<div class="text-white">
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Lowest Airfares</span></p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Premium Services</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Free In-Flight Meals</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Flexible Dates</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Generous Baggage Allowance</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Easy Online Booking</span>.</p>
						</div>
					</div>
				</div>
				<span><a href="/airlineticket" target="_blank" class="btn btn-primary ms-2">View More</a></span>
				<a href="/airlineticketreservationform" target="_blank" class="btn btn-primary-gradient ms-2">Reserve Your Slot</a>
			</div>
			<div class="col-12 col-md-4 p-4 fanimate">
				<div class="features-icon text-white" style="display: flex; align-items: center;">
					<img src="../assets/images/pngs/visa.png" alt="Feature Icon" style="width: 50px;height: 50px;">
					<h2 class="mx-1">VISA</h2>
				</div>
				<p class="text-default text-justify text-white sub-text mb-0">Our experienced team assists you in obtaining visas for various
					countries, guiding you through the application process to ensure a smooth and hassle-free experience.</p>
				<div class="text-white">
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Srilankan Visa</span></p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Indian Visa</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Thailand Visa</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">France Visa</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">American Visa</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Netherland Visa & more</span>.</p>
						</div>
					</div>
				</div>
				<span><a href="/visa" target="_blank" class="btn btn-primary ms-2">View More</a></span>
				<a href="/visareservationform" target="_blank" class="btn btn-primary-gradient ms-2">Reserve Your Slot</a>
			</div>
			<div class="col-12 col-md-4 p-4 fanimate">
				<div class="features-icon text-white" style="display: flex; align-items: center;">
					<img src="../assets/images/pngs/packagedelivery.png" alt="Feature Icon" style="width: 50px;height: 50px;">
					<h2 class="mx-1">Parcel</h2>
				</div>
				<p class="text-default text-justify text-white sub-text mb-0">We provide secure and timely package delivery services within Sri Lanka
					and to international destinations. Whether it’s personal belongings or business goods, we ensure your packages reach their destination safely.</p>
				<div class="text-white">
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Swift Delivery</span></p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Safety First</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Free In-Flight Meals</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Government Approved</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Generous Baggage Allowance</span>.</p>
						</div>
					</div>
				</div>
				<span><a href="/parcel" target="_blank" class="btn btn-primary ms-2">View More</a></span>
				<a href="/parcelreservationform" target="_blank" class="btn btn-primary-gradient ms-2">Reserve Your Slot</a>
			</div>
			<div class="col-12 col-md-4 p-4 fanimate">
				<div class="features-icon text-white" style="display: flex; align-items: center;">
					<img src="../assets/images/pngs/transport.png" alt="Feature Icon" style="width: 50px;height: 50px;">
					<h2 class="mx-1">Transport</h2>
				</div>
				<p class="text-default text-justify text-white sub-text mb-0">We provide secure and timely Transport services within Sri Lanka.
					Whether it’s personal belongings or Airport, we ensure your passengers reach their destination safely.</p>
				<div class="text-white">
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Reliability</span></p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Safety</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Convenience</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Comfort</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Affordability</span>.</p>
						</div>
					</div>
					<div class="d-flex">
						<span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
								<path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
							</svg></span>
						<div class="ms-3">
							<p><span style="font-weight: bold;">Customer Satisfaction</span>.</p>
						</div>
					</div>
				</div>
				<span><a href="/transport" target="_blank" class="btn btn-primary ms-2">View More</a></span>
				<a href="/transportreservationform" target="_blank" class="btn btn-primary-gradient ms-2">Reserve Your Slot</a>
			</div>
		</div>
	</div>
</div>
<!-- Service close -->

<!-- About Us-->
<div class="section pb-5 bg-info-gradient">
	<div class="container px-5 px-md-0">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8 ps-4 mb-lg-0- mb-4">
				<h3 class="header-family text-warning">About Us</h3>
				<p class="text-default sub-text text-white text-justify mb-0">We, Akshaya Travels (Pvt) Ltd, are a government-approved company registered under
					the Companies Act No. 7 of 2007 in Sri Lanka. We offer services such as booking airline tickets, obtaining visas, renewing visas,
					and sending packages domestically and internationally. Our services are available throughout Sri Lanka at very competitive rates.
					Partner with us to fulfill your international travel dreams and aspirations.</p>
			</div>
		</div>
	</div>
</div>
<!-- About Us close -->

<!-- Partner -->
<div class="section">
	<div class="container px-5 px-md-0">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8 ps-4 mb-lg-0- mb-4">
				<h3 class="header-family text-warning">Partners</h3>
				<p class="text-default sub-text text-white text-justify mb-0">Partnering with leading airlines and courier services, our travel \
					agency ensures seamless travel experiences, meticulously curated to meet the highest standards of quality and satisfaction,
					enhancing your journey from start to finish.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="customer-logos">
					<div class="slide text-center"><img src="../assets/images/partners/airlines/air-india.png" alt="">
						<h4 class="sub-text text-white">Air India</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/air-new-zealand.png" alt="">
						<h4 class="sub-text text-white">Air New Zealand</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/american-airlines.png" alt="">
						<h4 class="sub-text text-white">American Airlines</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/british-airways.png" alt="">
						<h4 class="sub-text text-white">British Airways</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/emirates.png" alt="">
						<h4 class="sub-text text-white">Emirates</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/indigo.png" alt="">
						<h4 class="sub-text text-white">Indigo</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/qatar-airways.png" alt="">
						<h4 class="sub-text text-white">Qatar Airways</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/singapore-airlines.png" alt="">
						<h4 class="sub-text text-white">Singapore Airlines</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/airlines/srilankan-airlines.png" alt="">
						<h4 class="sub-text text-white">Srilankan Airlines</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="customer-logos">
					<div class="slide text-center"><img src="../assets/images/partners/couriers/domex.png" alt="">
						<h4 class="sub-text text-white">Domex</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/couriers/prompt-xp.png" alt="">
						<h4 class="sub-text text-white">Prompt XP</h4>
					</div>
					<div class="slide text-center"><img src="../assets/images/partners/couriers/pronto.png" alt="">
						<h4 class="sub-text text-white">Pronto</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Partner Close -->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection