@extends('frontend/layout')

@section('content')

 <!-- CONTENT AREA -->
 <article class="page-body">
	
<!-- Main Slider -->
<section class="main-slider">
	<div class="single-slider-1 owl-carousel owl-dots-2 owl-nav-1">
		<div class="item">
			<img alt="slider" src="{{asset('img/home-fourteen/slideshow_1.jpg')}}" />
			<div class="slide-info">
				<div class="caption">
					
					<h2 class="main-title" data-animation-in="fadeInDown"> red wing shoes COLLECTION  </h2>
					
					<div class="buttons" data-animation-in="rotateIn"><a class="btn btn-black small-btn" href="#">Shop Now !</a></div>
				</div>
			</div>
		</div>
		<div class="item">
			<img alt="slider" src="{{asset('img/home-fourteen/slideshow_2.jpg')}}" />
			<div class="slide-info">
				<div class="caption">
					
					<h2 class="main-title" data-animation-in="slideInUp"> Lookbook 2017  </h2>
					
					<div class="buttons" data-animation-in="rotateIn"><a class="btn btn-black small-btn" href="#">Shop Now !</a></div>
				</div>
			</div>
		</div>
		<div class="item">
			<img alt="slider" src="{{asset('img/home-fourteen/slideshow_3.jpg')}}" />
			<div class="slide-info">
				<div class="caption">
					
					<h2 class="main-title" data-animation-in="slideInUp"> Lookbook 2017  </h2>
					
					<div class="buttons" data-animation-in="rotateIn"><a class="btn btn-black small-btn" href="#">Shop Now !</a></div>
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
						<img src="{{asset('img/home-fourteen/sw.jpg')}}" alt="">
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
						<img src="{{asset('img/home-fourteen/sw1.jpg')}}" alt="">
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
						<img src="{{asset('img/home-fourteen/sw2.jpg')}}" alt="">
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
		<img class="img" src="{{asset('img/home-fourteen/item-1.jpg')}}" alt="" />
		<div class="item-content">
			<h2 class="main-title-2">Shop our premium sneakers</h2>
			<div class="read-more"> <a class="btn theme-btn-3 small-btn" href="#">Grab It Now</a></div>
		</div>
	</div>  
	<div class="col-md-6 col-sm-12 item-wrap">
		<div class="item-img">
			<img class="img" src="{{asset('img/home-fourteen/item-3.jpg')}}" alt="" />
			<div class="item-content">
			<h2 class="main-title">Woman's accessories</h2>
			<div class="read-more"> <a class="btn theme-btn small-btn" href="#">Grab It Now</a></div>
		</div>
		</div>
	</div>  
	<div class="col-md-6 col-sm-12 item-wrap">
		<div class="item-img">
			<img class="img" src="{{asset('img/home-fourteen/item-4.jpg')}}" alt="" />
			<div class="item-content">
			<h2 class="main-title">the north face nuptse 1992</h2>
			<div class="read-more"> <a class="btn theme-btn small-btn" href="#">Grab It Now</a></div>
		</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 item-wrap">
	<img class="img" src="{{asset('img/home-fourteen/item-2.jpg')}}" alt="" />
		<div class="item-content">
		<h2 class="main-title-2">f/w 2019 nike collection</h2>
			<div class="read-more"> <a class="btn theme-btn-3 small-btn" href="#">Shop Now</a></div>
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
		<!--
		[{"id":1,"name":"pap","description":"papere","price":29.89999999999999857891452847979962825775146484375,"cat_id":1,"details":"","sale":10,"rating":3.5,"stock":2951,"buycounter":49,"imgURI":null,"URI":null,"created_at":null,"updated_at":"2020-02-07 11:10:52"},
		-->
			
		
			
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="prod-tab-1">					
					<div class="prod-slider-1 owl-carousel owl-nav-2">
						@foreach ($articles as $item)
							
						
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img">
										<div class="sliderimagewrapper"> 
										@if($item->imgURI == null || !file_exists($item->imgURI))
										<img src="{{asset('img/home-fourteen/imgnotfound.png')}}" alt="" /> </a>
										@else  
										<img src="{{asset($item->imgURI)}}" alt="" /> </a> 
										<span class="product-hover">
											
											<img src="{{asset($item->imgURI)}}" alt="" /> </a>
										
										</span>
										@endif         
									</div>
									</a>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="{{route('singleprod',[$item->macrocategory,$item->itemid])}}">{{$item->name}}</a> </h2>
									@if($item->sale>0)
									<span class="price"> <b>{{number_format((($item->price)-($item->price)*($item->sale/100)),2)}}€</b> <del>{{$item->price}}€</del><span style="color:green;">&nbsp;{{$item->sale}}%</span> </span>
									@else
									<span class="price"> <b>{{number_format((($item->price)-($item->price)*($item->sale/100)),2)}}€</b> <del></del> </span>
									@endif
									<div class="product-links"> 
										@if($item->stock==0)
											<span class="red-color">Not in stock</span>
										@endif
										<br>
										<a href="{{route('singleprod',[$item->macrocategory,$item->itemid])}}" class="add-to-cart">Item page </a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<!--
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-2.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-2.jpg')}}">          
										</span>
									</a>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">typo print t-shirt</a> </h2>
									<span class="price"> <b>$67.05</b> <del>$102.50</del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
										
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-3.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-3.jpg')}}">          
										</span>
									</a>	
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">Denim black shirt</a> </h2>
									<span class="price"> <b>$72.30</b> <del></del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
										
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img">
										<img src="{{asset('img/home-fourteen/prod-4.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-4.jpg')}}">          
										</span>
									</a>  
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">creative adidas t-shirt</a> </h2>
									<span class="price"> <b>$45.05</b> <del>$85.60</del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-1.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-5.jpg')}}">          
										</span>
									</a>	
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">creative adidas shirt</a> </h2>
									<span class="price"> <b>$80.35</b> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-4.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-6.jpg')}}">          
										</span>
									</a>
									
									
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">pfo grey t-shirt</a> </h2>
									<span class="price"> <b>$72.30</b> <del></del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>	
									</div>
								</div>
							</div>
						</div>-->
					</div>
				</div><!--
				<div role="tabpanel" class="tab-pane fade" id="prod-tab-2">
					<div class="prod-slider-1 owl-carousel owl-nav-2">
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> <img src="{{asset('img/home-fourteen/prod-1.jpg')}}" alt="" /> </a>
									<ul class="color-swatch-item">
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/gray.png')}}" alt="" /> </a> </li>
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/black.png')}}" alt="" /> </a> </li>
									</ul>	
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">B</a> </h2>
									<span class="price"> <b>$45.05</b> <del></del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> <img src="{{asset('img/home-fourteen/prod-2.jpg')}}" alt="" /> </a>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">typo print t-shirt</a> </h2>
									<span class="price"> <b>$67.05</b> <del>$102.50</del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> <img src="{{asset('img/home-fourteen/prod-3.jpg')}}" alt="" /> </a>
									<ul class="color-swatch-item">
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/blue.png')}}" alt="" /> </a> </li>
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/pink.png')}}" alt="" /> </a> </li>
									</ul>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
									<div class="new-tag"> new </div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">Denim black shirt</a> </h2>
									<span class="price"> <b>$72.30</b> <del></del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> <img src="{{asset('img/home-fourteen/prod-3.jpg')}}" alt="" /> </a>   
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
									<div class="sale-tag"> sale </div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">creative adidas t-shirt</a> </h2>
									<span class="price"> <b>$45.05</b> <del>$85.60</del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="prod-tab-3">
					<div class="row">
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-3.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-5.jpg')}}">          
										</span>
									</a>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
									<div class="sale-tag"> sale </div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">creative adidas shirt</a> </h2>
									<span class="price"> <b>$80.35</b> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-3.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-6.jpg')}}">          
										</span>
									</a>
									<ul class="color-swatch-item">
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/blue.png')}}" alt="" /> </a> </li>
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/pink.png')}}" alt="" /> </a> </li>
									</ul>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">pfo grey t-shirt</a> </h2>
									<span class="price"> <b>72.30€</b> <del></del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-3.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-7.jpg')}}">          
										</span>
									</a>
									<ul class="color-swatch-item">
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/gray.png')}}" alt="" /> </a> </li>
										<li> <a href="#"> <img src="{{asset('img/home-fourteen/black.png')}}" alt="" /> </a> </li>
									</ul>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">amior jacket two color</a> </h2>
									<span class="price"> <b>140.35€</b> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>	
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 col-lg-3">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-4.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-8.jpg')}}">          
										</span>
									</a>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
									<div class="new-tag"> new </div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">london t-shirt</a> </h2>
									<span class="price"> <b>66.20€</b> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
			
		</div>
	</div>
</section>
<!-- / Our Products Ends -->
@endsection