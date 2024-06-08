@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<div class="row bg-teal-gradient">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-4 text-white">
                <div class="statistics-info">
                    <div class="card-body p-4 text-center">
                        <h2>Vechile hire</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Transport -->
<!-- <div class="section bg-image-landing"> -->
<div class="container px-5 px-md-0">
    <div class="row">
        <div class="card mt-3 mb-0">
            <div class="card-body text-white px-0 pb-0">
                <div class="statistics-info">
                    <div class="row mb-2">
                        <div class="col-lg-6 text-left pos-relative overflow-hidden p-3">
                            <h3 class="header-family text-warning">Fast and Secure Transport Service Across Sri Lanka!</h3>
                            <p class="text-default text-white text-justify sub-text mb-2">We offer a range of travel solutions tailored
                                to your needs, including round trips, single trips, convenient transfers to and from Jaffna to Katunayake
                                Airport, and exciting local tours. With us, every journey is an adventure, every trip a breeze!.</p>
                            <h5>Experience the Difference with Our Transport Service.</h4>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Reliability:</span> Count on us for punctuality and consistency,
                                            ensuring you always arrive at your destination on time, every time</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Safety:</span> Your safety is our utmost priority. Our fleet
                                            consists of well-maintained vehicles driven by experienced professionals, guaranteeing a secure
                                            travel experience.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Convenience:</span> From round trips to single journeys, or even
                                            transportation for special occasions, our flexible services are tailored to meet your unique needs.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Comfort:</span> Enjoy a luxurious travel experience in our modern
                                            and well-equipped vehicles, ensuring a smooth and delightful journey for all passengers.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Affordability:</span> Experience top-notch service at competitive
                                            rates. We offer excellent value for your money without compromising on quality.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Customer Satisfaction:</span> Our dedicated team is committed to
                                            exceeding your expectations and ensuring your satisfaction throughout your entire journey.</p>
                                    </div>
                                </div>
                        </div>
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
                    </div>
                    <!-- <div class="row">
                            <div class="row justify-content-center text-center">
                                <div class="col-lg-8 ps-4 mb-lg-0- mb-4">
                                    <h3 class="header-family text-warning">Partners</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row justify-content-center">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 text-center">
                                            <img src="../assets/images/partners/couriers/domex.png" alt="Domex" class="img-fluid" style="width:150px; height: 100%;">
                                        </div>
                                        <div class="col-md-4 col-sm-6 text-center">
                                            <img src="../assets/images/partners/couriers/prompt-xp.png" alt="Prompt XP" class="img-fluid" style="width:150px; height: 100%;">
                                        </div>
                                        <div class="col-md-4 col-sm-6 text-center">
                                            <img src="../assets/images/partners/couriers/pronto.png" alt="Pronto" class="img-fluid" style="width:150px; height: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- Transport close -->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection