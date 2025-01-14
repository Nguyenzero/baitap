@extends('layout')

@section('content')
<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Features Items</h2>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="{{ asset('frontend/images/home/product1.jpg') }}" alt="" />
					<h2>$56</h2>
					<p>Easy Polo Black Edition</p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
		</div>
	</div>
</div><!--features_items-->



<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">recommended items</h2>
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ asset('frontend/images/home/recommend1.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4">
				</div>
			</div>
			<div class="item">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ asset('images/home/recommend1.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ asset('images/home/recommend2.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ asset('images/home/recommend3.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		</a>
		<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		</a>			
	</div>
</div><!--/recommended_items-->
@endsection
