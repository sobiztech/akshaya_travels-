@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<div class="row bg-info-gradient">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-4 text-white">
                <div class="statistics-info">
                    <div class="card-body p-4 text-center">
                        <h2>Airline Ticket</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Airline Ticket-->
<!-- <div class="section bg-image-landing"> -->
<div class="container px-5 px-md-0">
    <div class="row">
        <div class="card mt-3 mb-0">
            <div class="card-body text-white px-0 pb-0">
                <div class="statistics-info">
                    <div class="row mb-2">
                        <div class="col-lg-6 text-left pos-relative overflow-hidden p-3">
                            <h3 class="header-family text-warning">Get the lowest airfares to all countries with us!</h3>
                            <div class="mb-2">
                                <span>Contact our consultant: </span>
                                <a href="/airlineticketreservationform" target="_blank" class="btn btn-lg btn-primary-gradient text-white ms-2">
                                    Reserve Your Slot
                                </a>
                            </div>
                            <p class="text-default text-white text-justify sub-text mb-2">Enjoy top-notch seating and first-class services tailored to your preferences.
                                We provide complimentary in-flight meals for your comfort. Flexibility with ticket dates is available to
                                match your schedule.</p>
                            <p class="text-default text-white text-justify sub-text mb-2">We offer higher baggage allowances compared to
                                others, making your travel more convenient. Book your air tickets online with ease.</p>
                            <h5>Key Fetures :</h5>
                            <div class="d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                        <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <div class="ms-3">
                                    <p><span style="font-weight: bold;">Reschedule your flight ticket date obtained from us as per your preference.</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                        <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <div class="ms-3">
                                    <p><span style="font-weight: bold;">Cancel the flight ticket obtained from us up to 48 hours in advance.</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                        <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <div class="ms-3">
                                    <p><span style="font-weight: bold;">Choose a window seat on the flight according to your preference.</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                        <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <div class="ms-3">
                                    <p><span style="font-weight: bold;">Receive in-flight meals tailored to your preferences.</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                        <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <div class="ms-3">
                                    <p><span style="font-weight: bold;">Our company provides your boarding pass online</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                        <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <div class="ms-3">
                                    <p><span style="font-weight: bold;">Our company will handle your web check-in process for you.</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                        <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                    </svg></span>
                                <div class="ms-3">
                                    <p><span style="font-weight: bold;">A specified fee may be charged for both ticket cancellations and date changes. We apologize for any inconvenience caused in such instances.</span></p>
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
                    <div class="row mb-2">
                        <div class="row justify-content-center text-center">
                            <div class="col-lg-8 ps-4 mb-lg-0- mb-4">
                                <h3 class="header-family text-warning">Partners</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/air-india.png" alt="Air India" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/air-new-zealand.png" alt="Air New Zealand" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/american-airlines.png" alt="American Airlines" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/british-airways.png" alt="British Airways" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/emirates.png" alt="Emirates" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/indigo.png" alt="Indigo" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/qatar-airways.png" alt="Qatar Airways" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/singapore-airlines.png" alt="Singapore Airlines" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <img src="../assets/images/partners/airlines/srilankan-airlines.png" alt="Srilankan Airlines" class="img-fluid" style="width:150px; height: 100%;">
                                    </div>
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
<!--Airline Ticket close-->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection