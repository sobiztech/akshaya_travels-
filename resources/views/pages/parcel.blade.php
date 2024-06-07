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
                        <h2>Parcel Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Parcel -->
<div class="section bg-image-landing">
    <div class="container px-5 px-md-0">
        <div class="row">
            <div class="card mt-3 mb-0">
                <div class="card-body text-white px-0 pb-0">
                    <div class="statistics-info">
                        <div class="col-xl-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="row mb-4">
                                        <h3 class="header-family text-warning">Fast and Secure Parcel Delivery Across Sri Lanka and Internationally!</h3>
                                        <p class="text-default text-white text-justify sub-text mb-2">No matter where you are in Sri Lanka, we ensure
                                            that your parcels, whether personal or business-related, are delivered quickly and safely to any domestic
                                            or international destination within 48 hours. Whether it's for your loved ones or small business needs,
                                            our service guarantees prompt and reliable delivery.</p>
                                        <h5>Why Choose Our Parcel Delivery Service?</h5>
                                        <div class="d-flex">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                    <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                </svg></span>
                                            <div class="ms-3">
                                                <p><span style="font-weight: bold;">Swift Delivery:</span> We pride ourselves on the fastest parcel delivery.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                    <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                </svg></span>
                                            <div class="ms-3">
                                                <p><span style="font-weight: bold;">Safety First:</span> Secure handling of all parcels is our top priority.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="#8fbd56" d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z" opacity=".99" />
                                                    <path fill="#8fbd56" opacity=".2" d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                </svg></span>
                                            <div class="ms-3">
                                                <p><span style="font-weight: bold;">Government Approved:</span> Our services are certified and trusted by the government.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h3 class="header-family text-warning">Partners</h3>
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
                                </div>
                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <h4>For more detail contact us with email</h4>
                                            <div class="">
                                                <form class="form-horizontal  m-t-20 row" action="index.html">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" required="" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" required="" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" required="" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" required="" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5">Your Comment</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <a href="javascript:void(0)" class="btn btn-pill btn-primary btn-w-sm py-2  waves-effect waves-light">Submit</a>

                                                    </div>
                                                </form>
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
<!-- Parcel close -->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection