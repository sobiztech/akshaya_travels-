@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- Header Main-->
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
					<h1 class="text-shadow text-white"><span class="text-warning">Join hands with Akshaya Travels</span></h1>
					<h6 class="mt-3 text-white">Akshaya Travels (Pvt) Ltd and experience seamless journeys like never before! We offer a wide
						range of exceptional travel services, including airline ticket booking with the best deals, effortless visa assistance and
						renewals, secure package delivery both domestically and internationally, and personalized travel itineraries tailored just
						for you. All this comes at unbeatable rates, ensuring top-notch services at the most competitive prices. Turn your travel
						dreams into reality with Akshaya Travels and discover a world of hassle-free, enjoyable, and unforgettable journeys!.</h6>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header Main Close-->

<!-- Testimonials section-->
<!-- <div class="section" > -->
<div class="container px-5 px-md-0" id="About">
	<div class="row justify-content-center text-center">
		<div class="col-lg-8 ps-4 mb-lg-0- mb-4">
			<h3 class="header-family text-warning">About Us</h3>
			<p class="text-default text-justify text-white sub-text mb-0">We, Akshaya Travels (Pvt) Ltd, are a government-approved company registered under
				the Companies Act No. 7 of 2007 in Sri Lanka. We offer services such as booking airline tickets, obtaining visas, renewing visas,
				and sending packages domestically and internationally. Our services are available throughout Sri Lanka at very competitive rates.
				Partner with us to fulfill your international travel dreams and aspirations.</p>
		</div>
	</div>
</div>
<!-- </div> -->
<!-- Testimonials Close-->

<!-- Features -->
<!-- <div class="section" > -->
<div class="container px-5 px-md-0" id="Features">
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
				<img src="../assets/images/pngs/airlinetickets.png" alt="Feature Icon" style="width: 100px;height: 100px;">
				<h2 class="mx-1">Airline Ticket</h2>
			</div>

			<p class="text-default text-justify text-white sub-text mb-0">We offer efficient and cost-effective airline ticket booking services,
				ensuring you get the best deals and convenient flight options for both domestic and international travel.</p>
			<a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
		</div>

		<div class="col-12 col-md-4 p-4 fanimate">
			<div class="features-icon text-white" style="display: flex; align-items: center;">
				<img src="../assets/images/pngs/visa.png" alt="Feature Icon" style="width: 100px;height: 100px;">
				<h2 class="mx-1">VISA</h2>
			</div>
			<p class="text-default text-justify text-white sub-text mb-0">Our experienced team assists you in obtaining visas for various
				countries, guiding you through the application process to ensure a smooth and hassle-free experience.</p>
			<a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
		</div>

		<div class="col-12 col-md-4 p-4 fanimate">
			<div class="features-icon text-white" style="display: flex; align-items: center;">
				<img src="../assets/images/pngs/packagedelivery.png" alt="Feature Icon" style="width: 100px;height: 100px;">
				<h2 class="mx-1">Package Delivery</h2>
			</div>
			<p class="text-default text-justify text-white sub-text mb-0">We provide secure and timely package delivery services within Sri Lanka
				and to international destinations. Whether it’s personal belongings or business goods, we ensure your packages reach their destination safely.</p>
			<a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
		</div>
	</div>
</div>
<!-- </div> -->
<!-- Features Close-->

<!-- Events section-->
<!-- <div class="section" > -->
<div class="container px-5 px-md-0" id="Events">
	<div class="row justify-content-center text-center">
		<div class="col-lg-8 text-center">
			<h3 class="header-family text-warning">Partners</h3>
			<p class="sub-text text-white pb-3">பாலர் பள்ளியில் சிறந்த தருணங்கள் எங்களிடம் உள்ளன,
				அவர்கள் சிறப்பாகச் செயல்பட எங்களைத் தூண்டுகிறார்கள்.
			</p>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="customer-logos">
				<div class="slide text-center"><img src="../assets/images/partners/airlines/air-india.png" alt="">
					<h4 class="header-family text-white">Air India</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/air-new-zealand.png" alt="">
					<h4 class="header-family text-white">Air New Zealand</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/american-airlines.png" alt="">
					<h4 class="header-family text-white">American Airlines</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/british-airways.png" alt="">
					<h4 class="header-family text-white">British Airways</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/emirates.png" alt="">
					<h4 class="header-family text-white">Emirates</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/indigo.png" alt="">
					<h4 class="header-family text-white">Indigo</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/qatar-airways.png" alt="">
					<h4 class="header-family text-white">Qatar Airways</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/singapore-airlines.png" alt="">
					<h4 class="header-family text-white">Singapore Airlines</h4>
				</div>
				<div class="slide text-center"><img src="../assets/images/partners/airlines/srilankan-airlines.png" alt="">
					<h4 class="header-family text-white">Srilankan Airlines</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->
<!-- Events section Close-->

<!-- Contact-->
<!-- <div class="section" > -->
<div class="container px-5 px-md-0" id="Contact">
	<div class="row text-center justify-content-center">
		<div class="col-lg-8">
			<h3 class="header-family">தொடர்பு</h3>
			<p class="text-default sub-text">நீங்கள் எந்த நேரத்திலும் தொடர்பு கொள்ளலாம்.</p>
		</div>
	</div>
	<div class="row">
		<div class="card mt-3 mb-0">
			<div class="card-body text-dark px-0 pb-0">
				<div class="statistics-info">
					<div class="col-xl-12 col-12">
						<div class="row">
							<div class="col-xl-6 col-md-12 col-sm-12">
								<div class="services-statistics">
									<div class="row">
										<div class="col-6">
											<div class="card p-0">
												<div class="card-body p-0">
													<div class="row">
														<div class="col-xl-3 col-md-3 col-sm-3">
															<div class="counter-icon border border-primary text-primary">
																<i class="fe fe-map-pin"></i>
															</div>
														</div>
														<div class="col-xl-9 col-md-9 px-0 mb-1 col-sm-9">
															<h5 class="mb-1 fw-semibold">பிரதான கிளை</h5>
															<p class="fs-13 text-muted">வட்டுக்கோட்டை-மூளாய் வீதி, மூளாய், இலங்கை
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="card p-0">
												<div class="card-body p-0">
													<div class="row">
														<div class="col-xl-3 col-md-3 col-sm-3">
															<div class="counter-icon border border-primary text-primary">
																<i class="fe fe-headphones"></i>
															</div>
														</div>
														<div class="col-xl-6 col-md-9 px-0 mb-1 col-sm-9">
															<h5 class="mb-1 fw-semibold">தொலைபேசி</h5>
															<p class="mb-0 fs-13 text-muted">021-2224528
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="card p-0">
												<div class="card-body p-0">
													<div class="row">
														<div class="col-xl-3 col-md-3 col-sm-3">
															<div class="counter-icon border border-primary text-primary">
																<i class="fe fe-mail"></i>
															</div>
														</div>
														<div class="col-xl-6 col-md-9 px-0 mb-1 col-sm-9">
															<h5 class="mb-1 fw-semibold">மின்னஞ்சல்</h5>
															<p class="mb-0 fs-13 text-muted">vaddupreschool@gmail.com
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="card p-0">
												<div class="card-body p-0">
													<div class="row">
														<div class="col-xl-3 col-md-3 col-sm-3">
															<div class="counter-icon border border-primary text-primary">
																<i class="fe fe-airplay"></i>
															</div>
														</div>
														<div class="col-xl-6 col-md-9 px-0 mb-1 col-sm-9">
															<h5 class="mb-1 fw-semibold">வேலை நேரம்</h5>
															<p class="mb-0 fs-13 text-muted">திங்கள் - வெள்ளி: 9am
																- 6pm</p>
															<p class="fs-13 text-muted">சனி - ஞாயிறு: விடுமுறை
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12 col-sm-12">
								<div class="">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15729.238065742084!2d79.9356223698399!3d9.7398277807206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe52e98d542dcb%3A0x8bad045e1da0295f!2sJaffna%20College!5e0!3m2!1sen!2slk!4v1717053484301!5m2!1sen!2slk" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->
<!--Contact close-->

<!--Support-->
<div class="demo-screen-skin bg-primary">
	<div class="container text-center text-white px-5 px-md-0">
		<div id="demo" class="row">
			<div class="col-lg-6">
				<div class="feature-1">
					<a href="#"></a>
					<div class="mb-3">
						<i class="si si-earphones-alt"></i>
					</div>
					<h4 class="fs-25">உதவி</h4>
					<p class="mb-1 text-white">உதவி தேவையா? கவலைப்படவேண்டாம்.
						எங்கள் அர்ப்பணிப்பு உள்ள குழு உங்களுக்கு உதவும்.</p>
					<h6 class="mb-0">உதவி : <a class="text-dark" href="mailto:support@spruko.com">support@vaddupreschool.com</a></h6>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-xl-0 mt-lg-0">
				<div class="feature-1">
					<a href="#"></a>
					<div class="mb-3">
						<i class="si si-bubbles"></i>
					</div>
					<h4 class="fs-25">விசாரணை</h4>
					<p class="mb-1 text-white">உங்கள் குழந்தையை எமது முன்பள்ளியில் சேர்க்க முன் ஏதேனும்
						கேள்விகள் இருப்பின் கேட்க தயங்க வேண்டாம்.</p>
					<h6 class="mb-0">அழைப்பு : <a class="text-dark" href="mailto:support@spruko.com">support@spruko.com</a></h6>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Support close-->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection