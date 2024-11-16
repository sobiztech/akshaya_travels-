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
						<h2>Event</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Event-->
<div class="demo-gallery card">
	<div class="d-flex justify-content-center align-items-center">
		<div class="col-lg-8 col-md-8">
			<div class="card">
				<div class="card-body">
					<h3 class="header-family text-warning">feast hall for devotees</h3>
					<p class="text-default text-white text-justify sub-text mb-2">In 2023, our company collaborated with Rotaract Club of Nallur Heritage to organize a grand celebration at the Nallur Murugan Temple festival.
						We sponsored a feast hall for devotees and provided refreshments to the temple visitors. This collaboration resulted in a
						remarkable service for the worshipers.</p>
					<ul id="lightgallery" class="list-unstyled row">
						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/events/feasthall/nallur1.jpeg" 
						data-src="../assets/images/events/feasthall/nallur1.jpeg" data-sub-html="<h4>Gallery Image 1</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/feasthall/nallur1.jpeg" alt="Thumb-1">
							</a>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/events/feasthall/nallur2.jpg" 
						data-src="../assets/images/events/feasthall/nallur2.jpg" data-sub-html=" <h4>Gallery Image 2</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/feasthall/nallur2.jpg" alt="Thumb-2">
							</a>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/events/feasthall/3.jpg" 
						data-src="../assets/images/events/feasthall/nallur3.jpg" data-sub-html="<h4>Gallery Image 3</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/feasthall/nallur3.jpg" alt="Thumb-1">
							</a>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/events/feasthall/nallur4.jfif" 
						data-src="../assets/images/events/feasthall/nallur4.jfif" data-sub-html="<h4>Gallery Image 4</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/feasthall/nallur4.jfif" alt="Thumb-2">
							</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<h3 class="header-family text-warning">Free flight tickets to one lucky Ayyappa devotee</h3>
					<p class="text-default text-white text-justify sub-text mb-2">Annually, we offer complimentary flight tickets to one lucky devotee
						among the Ayyappa devotees registering with us for the pilgrimage to the Sabarimala Temple in Kerala. This gesture adds an extra
						element of excitement and anticipation to the pilgrimage journey, making it even more special for our valued patrons.</p>
					<ul id="lightgallery" class=" lightgallery list-unstyled row">
						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/events/freetickets/kerala1.jpg" 
						data-src="../assets/images/events/freetickets/kerala1.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/freetickets/kerala1.jpg" alt="Thumb-1">
							</a>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/media/kerala2.jpg" 
						data-src="../assets/images/events/freetickets/kerala2.jpg" data-sub-html=" <h4>Gallery Image 2</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/freetickets/kerala2.jpg" alt="Thumb-2">
							</a>
						</li>

						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/events/freetickets/kerala3.jpg" 
						data-src="../assets/images/events/freetickets/kerala3.jpg" data-sub-html="<h4>Gallery Image 3</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/freetickets/kerala3.jpg" alt="Thumb-1">
							</a>
						</li>
						<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" 
						data-responsive="../assets/images/events/freetickets/kerala4.webp" 
						data-src="../assets/images/events/freetickets/kerala4.webp" data-sub-html="<h4>Gallery Image 4</h4><p> Nursery Pictures</p>">
							<a href="javascript:void(0)">
								<img class="img-responsive br-5 wp-100 gallery-image" src="../assets/images/events/freetickets/kerala4.webp" alt="Thumb-2">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Event close-->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->

@endsection