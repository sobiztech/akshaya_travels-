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
                        <h2>VISA</h2>
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
                    <div class="col-xl-12 col-12">
                        <div class="row mb-2">
                            <div class="col-lg-6 text-left pos-relative overflow-hidden p-3">
                                <h3 class="header-family text-warning">Explore the World: Get Your Visa at Unbeatable Rates!</h3>
                                <p class="text-default text-white text-justify sub-text mb-2">Unlock the world with our unbeatable visa deals!
                                    Explore global destinations without breaking the bank. Our post-visa services ensure a hassle-free travel
                                    experience. Say goodbye to hidden fees and hello to seamless visa applications. Experience the freedom to
                                    travel with our expert guidance and free registration. Don't miss out on this opportunity to make your
                                    travel dreams a reality!.</p>
                                <h5>Key Fetures :</h5>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Lowest Airfares:</span> Affordable tickets to every destination.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Premium Services:</span> Choose from a variety of seating options and enjoy first-class treatment.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Free In-Flight Meals:</span> Complimentary meal services on your journey.</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <div class="ms-3">
                                        <p><span style="font-weight: bold;">Flexible Dates:</span> Change your travel dates as per your needs.</p>
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
                            <div class="row col-xl-12 col-md-12">
                                <div class="col-xl-4 col-md-12">
                                    <div class="card overflow-hidden box-shadow mb-0 main-blog">
                                        <a href="" class="background-image-blog img4 mb-0">
                                            <img src="./assets/images/events/feasthall/nallur1.jfif" class="background-image-blog img3 mb-0" alt="...">
                                            <span class="badge rounded-pill bg-info-gradient blog-label label2">Normal VISA</span>
                                        </a>
                                        <div class="card-body p-0 border border-top-0 br-br-5 br-bl-5">
                                            <div class="p-5 border-bottom">
                                                <a href="#" class="text-warning blog-title">If you're seeking to extend your visa while abroad, look no further than us!</a>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3">
                                                        <p>Our specialized services are designed to streamline the visa extension process, ensuring a seamless experience for you.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3">
                                                        <p>With our expertise and dedicated support, you can rest assured that your desired visa will be in your hands swiftly and efficiently.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3 text-justify">
                                                        <p>Reach out to us today for a personalized and expedited solution.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card overflow-hidden box-shadow mb-0 main-blog">
                                        <a href="" class="background-image-blog img4 mb-0">
                                            <img src="./assets/images/events/feasthall/nallur1.jfif" class="background-image-blog img3 mb-0" alt="...">
                                            <span class="badge rounded-pill bg-info-gradient blog-label label2">Student Visa</span>
                                        </a>
                                        <div class="card-body p-0 border border-top-0 br-br-5 br-bl-5">
                                            <div class="p-5 border-bottom">
                                                <a class="text-warning blog-title">Embark on a global educational journey effortlessly with our expert assistance!</a>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3">
                                                        <p>Explore a myriad of scholarship opportunities curated to fuel your academic aspirations and unlock your potential.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3">
                                                        <p>Secure admission offers hassle-free, leveraging our extensive network and expertise in international education.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3">
                                                        <p>enjoy the added perk of complimentary airfare, making your dreams of studying abroad a reality.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card overflow-hidden box-shadow mb-0 main-blog">
                                        <a href="" class="background-image-blog img4 mb-0">
                                            <img src="./assets/images/events/feasthall/nallur1.jfif" class="background-image-blog img3 mb-0" alt="...">
                                            <span class="badge rounded-pill bg-info-gradient blog-label label2">Visa Extension</span>
                                        </a>
                                        <div class="card-body p-0 border border-top-0 br-br-5 br-bl-5">
                                            <div class="p-5 border-bottom">
                                                <a href="#" class="text-warning blog-title">If you're seeking to extend your visa while abroad, look no further than us!</a>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3">
                                                        <p>Our specialized services are designed to streamline the visa extension process, ensuring a seamless experience for you.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3">
                                                        <p>With our expertise and dedicated support, you can rest assured that your desired visa will be in your hands swiftly and efficiently.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                            <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                        </svg></span>
                                                    <div class="ms-3 text-justify">
                                                        <p>Reach out to us today for a personalized and expedited solution.</p>
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