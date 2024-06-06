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
                        <h2>Airline Ticket</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact-->
<div class="section bg-image-landing">
    <div class="container px-5 px-md-0">
        <div class="row">
            <div class="card mt-3 mb-0">
                <div class="card-body text-white px-0 pb-0">
                    <div class="statistics-info">
                        <div class="col-xl-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-sm-12">

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
<!--Contact close-->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection