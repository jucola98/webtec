@extends('frontend/layout')

@section('content')

 <!-- CONTENT AREA -->
 <article class="page-body">
	
<!-- Main Slider -->

<section class="main-slider">
	<div class="single-slider-1 owl-carousel owl-dots-2 owl-nav-1">
		<div class="item">
			<img alt="slider" src="{{Voyager::image('home images/slideshow_1.jpg')}}" />
			<div class="slide-info">
				<div class="caption">
					<h2 class="main-title" data-animation-in="fadeInDown"> LOOK AT NEW NIKE COLLECTION! </h2>
						<form class="search-form" action="{{route('searchProduct')}}" method="post">
                        	@csrf
                        	<input class="search" type="hidden" value="nike" name="searchbar" />
                    		<div class="buttons" data-animation-in="rotateIn"><input type="submit" value="Shop now!" class="btn btn-black small-btn" ></input></div>
                		</form>
				</div>
			</div>
		</div>
		<div class="item">
			<img alt="slider" src="{{Voyager::image('home images/slideshow_2.jpg')}}" />
			<div class="slide-info">
				<div class="caption">
					
				<h2 class="main-title" data-animation-in="fadeInDown">  CARHARTT F/W 20 </h2>
					<form class="search-form" action="{{route('searchProduct')}}" method="post">
                         @csrf
                        <input class="search" type="hidden" value="carhartt" name="searchbar" />
                        <div class="buttons" data-animation-in="rotateIn"><input type="submit" value="Shop now!" class="btn btn-black small-btn" ></input></div>
                    </form>
				</div>
			</div>
		</div>
		<div class="item">
			<img alt="slider" src="{{Voyager::image('home images/slideshow_3.jpg')}}" />
			<div class="slide-info">
				<div class="caption">
					
					<h2 class="main-title" data-animation-in="fadeInDown"> NEW SKATES IN!</h2>
					<form class="search-form" action="{{route('searchProduct')}}" method="post">
                         @csrf
                        <input class="search" type="hidden" value="skate" name="searchbar"/>
                        <div class="buttons" data-animation-in="rotateIn"><input type="submit" value="Shop now!" class="btn btn-black small-btn" ></input></div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Main Slider -->

<!-- Our Service -->           
<section class="our-services">
	<div class="container">
		<div class="title-wrap">
			<h2 class="main-title"> welcome to CozyStore <span class="text-bg">W</span> </h2>       
			
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="block-top-item">
					<div class="images">
						<img src="{{Voyager::image('home images/bgwelcome1.jpg')}}" alt="">
					</div>
					<div class="block-content">          
						<i class="icon_pin_alt"></i>      
						<h2 class="section-title">Free Shipping</h2>
						<p>We provide service free shipping for all order over 99.00€</p>           
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="block-top-item">
					<div class="images">
						<img src="{{Voyager::image('home images/bgwelcome2.jpg')}}" alt="">
					</div>
					<div class="block-content">          
						<i class="icon_currency"></i>      
						<h2 class="section-title">money back</h2>
						<p>We alway guarantee return 100% money for product defects</p>           
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="block-top-item">
					<div class="images">
						<img src="{{Voyager::image('home images/bgwelcome3.jpg')}}" alt="">
					</div>
					<div class="block-content">          
						<i class="icon_comment_alt"></i>      
						<h2 class="section-title">24h support</h2>
						<p>We alway try to support fastly for our clients 24/24. </p>           
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Our Service -->

<!-- Promotion -->
<section class="promotion clearfix">
	<div class="col-md-6 col-sm-12 item-wrap">
		<img class="img" src="{{Voyager::image('home images/fast1.jpg')}}" alt="" />
		<div class="item-content">
			
			<h2 class="main-title-2">Shop our premium sneakers</h2>
			
				
				<div class="read-more"> <a class="btn theme-btn-3 small-btn" href="{{route('likeprod',["sneakers"])}}">Grab It Now</a></div>
		</div>
	</div>  
	<div class="col-md-6 col-sm-12 item-wrap">
		<div class="item-img">
			<img class="img" src="{{Voyager::image('home images/fast2.jpg')}}" alt="" />
			
			<div class="item-content">
			<h2 class="main-title">Woman's accessories</h2>
			<div class="read-more"> <a class="btn theme-btn small-btn" href="{{route('likeprod',["accessories"])}}">Grab It Now</a></div>
		</div>
		</div>
	</div>  
	<div class="col-md-6 col-sm-12 item-wrap">
		<div class="item-img">
			<img class="img" src="{{Voyager::image('home images/fast3.jpg')}}" alt="" />
			<div class="item-content">
			<h2 class="main-title">the north face nuptse 1992</h2>
			<div class="read-more"> <a class="btn theme-btn small-btn" href="{{route('saleprod')}}">Grab It Now</a></div>
		</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 item-wrap">
	<img class="img" src="{{Voyager::image('home images/fast4.jpg')}}" alt="" />
		<div class="item-content">
		<h2 class="main-title-2">f/w 2019 nike collection</h2>
		<form class="search-form" action="{{route('searchProduct')}}" method="post">
                        	@csrf
                        	<input class="search" type="hidden" value="nike" name="searchbar" />
                    		<div class="buttons" ><input type="submit" value="Shop now!" class="btn theme-btn-3 small-btn" ></input></div>
                		</form>
			
			</div>
		</div>
	</div>                                          
</section>  
<!-- / Promotion --> 

<!-- Our Products Starts -->           
<section class="our-products">
	<div class="container">
		<div class="title-wrap">
			<h2 class="main-title">  our best products <span class="text-bg">B</span> </h2>                        
		</div>
		<div class="prod-block">  
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="prod-tab-1">					
					<div class="prod-slider-1 owl-carousel owl-nav-2">
						@foreach ($articles as $item)
						<div class="item">
							<div class="product-item">
								<div class="product-image">
										@if($item->imgURI == null )
										<img src="{{asset('img/home-fourteen/imgnotfound.png')}}" alt="" /> 
										@else  
										<img src="{{Voyager::image($item->imgURI)}}" class="imgcart1" alt="" /> 
										
										@endif        
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="{{route('singleprod',[$item->macrocategory,$item->itemid])}}">{{$item->name}}</a> </h2>
									@if($item->sale>0)
									<span class="price"> <b>{{number_format((($item->price)-($item->price)*($item->sale/100)),2)}}€</b> <del>{{$item->price}}€</del><span style="color:green;">&nbsp;{{$item->sale}}%</span> </span>
									@else
									<span class="price"> <b>{{number_format((($item->price)-($item->price)*($item->sale/100)),2)}}€</b> <del></del> </span>
									@endif
								<div class="product-links"> 
								<br>
								<a href="{{route('singleprod',[$item->macrocategory,$item->itemid])}}" class="add-to-cart">Item page </a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
<!-- / Our Products Ends -->
@endsection