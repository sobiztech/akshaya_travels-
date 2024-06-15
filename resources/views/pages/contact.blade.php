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
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact-->
<!-- <div class="section bg-image-landing"> -->
<div class="container px-5 px-md-0">
    <div class="row">
        <div class="card mt-3 mb-0">
            <div class="card-body text-white px-0 pb-0">
                <div class="statistics-info">
                    <div class="col-xl-12 col-12">
                        <div class="row mb-2">
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
                                                            <h5 class="mb-1 fw-semibold">Main Branch</h5>
                                                            <p class="fs-13 text-white">Vattukottai, Jaffna, Srilanka
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
                                                            <h5 class="mb-1 fw-semibold">Phone Number</h5>
                                                            <p class="mb-0 fs-13 text-white"> +94 706326729 <br> +94 750326729 <br> +94 021-7901611</p>
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
                                                        <div class="col-xl-9 col-md-9 px-0 mb-1 col-sm-9">
                                                            <h5 class="mb-1 fw-semibold">Email</h5>
                                                            <p class="mb-0 fs-13 text-white">akshayatravelagent@gmail.com
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
                                                        <div class="col-xl-9 col-md-9 px-0 mb-1 col-sm-9">
                                                            <h5 class="mb-1 fw-semibold">Office Work Time</h5>
                                                            <p class="mb-0 fs-13 text-white">Mon - Friday: 9am - 6pm</p>
                                                            <p class="fs-13 text-white">Sat - Sun: Holiday
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
                                                                <a href="https://web.facebook.com/profile.php?id=100094686489674" target="_blank">
                                                                    <i class="fe fe-facebook"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-3 col-sm-3">
                                                            <div class="counter-icon border border-primary text-primary">
                                                                <a href="https://wa.me/94706326729" target="_blank">
                                                                    <i class="fa fa-whatsapp"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-xl-3 col-md-3 col-sm-3">
                                                            <div class="counter-icon border border-primary text-primary">
                                                                <i class="fe fe-instagram"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-md-3 col-sm-3">
                                                            <div class="counter-icon border border-primary text-primary">
                                                                <i class="fe fe-linkedin"></i>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <h4>For more detail contact us with email</h4>
                                            <div class="">
                                                <form class="form-horizontal  m-t-20 row" name="contact-formContact">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Your Comment">Your Comment</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <input class="btn btn-primary" type="submit" value="Submit the application">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12 col-sm-12">
                                <div class="">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15729.238065742084!2d79.9356223698399!3d9.7398277807206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe52e98d542dcb%3A0x8bad045e1da0295f!2sJaffna%20College!5e0!3m2!1sen!2slk!4v1717053484301!5m2!1sen!2slk" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection