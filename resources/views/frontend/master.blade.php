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
					<h5 class="title-2" data-animation-in="fadeInDown">NEW ARRIVAL</h5>
					<h2 class="main-title" data-animation-in="fadeInDown"> red wing shoes COLLECTION  </h2>
					<p data-animation-in="fadeInDown"> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </p>
					<div class="buttons" data-animation-in="rotateIn"><a class="btn btn-black small-btn" href="#">Shop Now !</a></div>
				</div>
			</div>
		</div>
		<div class="item">
			<img alt="slider" src="{{asset('img/home-fourteen/slideshow_2.jpg')}}" />
			<div class="slide-info>
				<div class="caption">
					<h5 class="title-2" data-animation-in="fadeInDown"> NEW ARRIVAL </h5>
					<h2 class="main-title" data-animation-in="slideInUp"> Lookbook 2017  </h2>
					<p data-animation-in="slideInUp"> Hipster style is a fashion trending for Gentleman and Lady with tattoos. You’ll become so cool and attractive with your’s girl. Now let come hare and grab it now ! </p>
					<div class="buttons" data-animation-in="fadeInUp"><a class="btn btn-black small-btn" href="#">Shop Now !</a></div>
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
			<h2 class="main-title"> welcome to logancee <span class="text-bg">W</span> </h2>       
			<p>We’re a team of creative and make amazing site in ecommerce from Unite States. We love colour pastel, highlight and simple, its make our design look so awesome </p>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="block-top-item">
					<div class="images">
						<img src="{{asset('img/home-fourteen/item-3.jpg')}}" alt="">
					</div>
					<div class="block-content">          
						<i class="icon_pin_alt"></i>      
						<h2 class="section-title">Free Shipping</h2>
						<p>We provide service free shipping for all order over $99.00</p>           
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="block-top-item">
					<div class="images">
						<img src="{{asset('img/home-fourteen/item-4.jpg')}}" alt="">
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
						<img src="{{asset('img/home-fourteen/item-5.jpg')}}" alt="">
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
		<div class="item-content">
			<h2 class="main-title">super sale up to <span> 50% </span> off for shoes</h2>
			<p> Logancee Store glad to show that we’ll open <b> super sale up to 50% off </b> for shoes to welcome the Chrismast holiday. </p>
			<div class="read-more"> <a class="btn theme-btn small-btn" href="#">Grab It Now</a></div>
		</div>
	</div>  
	<div class="col-md-6 col-sm-12 item-wrap">
		<div class="item-img">
			<img class="img" src="{{asset('img/home-fourteen/item-1.jpg')}}" alt="" />
		</div>
	</div>  
	<div class="col-md-6 col-sm-12 item-wrap">
		<div class="item-img">
			<img class="img" src="{{asset('img/home-fourteen/item-2.jpg')}}" alt="" />
			<div class="caption">
				<h2 class="main-title">red wing</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis diam sed tellus cursus, quis dictum erat pellentesque.</p>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-12 item-wrap">
		<div class="item-content">
			<h2 class="main-title">buy red wing shoes just <span> $99 </span> </h2>
			<p> Today we glad to notice that you can buy cigarette pipe with price just <b> $99. Grab it now ! </b> </p>
			<h5 class="title-2"> expires in </h5>
			<div class="countdown-wrapper">
				<div id="dealCountdown1" class="defaultCountdown clearfix"></div>
			</div>
			<div class="read-more"> <a class="btn theme-btn small-btn" href="#">Shop Now</a></div>
		</div>
	</div>                                          
</section>  
<!-- / Promotion --> 

<!-- Our Products Starts -->           
<section class="our-products">
	<div class="container">
		<div class="title-wrap">
			<h2 class="main-title"> best our products <span class="text-bg">B</span> </h2>                        
		</div>
		<div class="prod-block">  
			<ul class="theme-tabs font-2">
				<li class="active"> <a href="#prod-tab-1"  data-toggle="tab"> Best Seller  </a> </li>
				<li class=""> <a href="#prod-tab-2"  data-toggle="tab"> New Arrival  </a> </li>
				<li class=""> <a href="#prod-tab-3"  data-toggle="tab"> Most Wanted  </a> </li>
			</ul>
			
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="prod-tab-1">
					<div class="prod-slider-1 owl-carousel owl-nav-2">
						<div class="item">
							<div class="product-item">
								<div class="product-image">
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-1.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-1.jpg')}}">          
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
									<h2 class="product-title"> <a href="#">samurai t-shirt</a> </h2>
									<span class="price"> <b>$45.05</b> <del></del> </span>
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
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-2.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-2.jpg')}}">          
										</span>
									</a>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
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
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-3.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-3.jpg')}}">          
										</span>
									</a>
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
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
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
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">creative adidas t-shirt</a> </h2>
									<span class="price"> <b>$45.05</b> <del>$85.60</del> </span>
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
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-1.jpg')}}" alt="" /> 
										<span class="product-hover">
											<img alt="" src="{{asset('img/home-fourteen/prod-flip-5.jpg')}}">          
										</span>
									</a>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">creative adidas shirt</a> </h2>
									<span class="price"> <b>$80.35</b> </span>
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
									<a href="#" class="img"> 
										<img src="{{asset('img/home-fourteen/prod-4.jpg')}}" alt="" /> 
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
									<span class="price"> <b>$72.30</b> <del></del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
								</div>
								<div class="product-content">
									<h2 class="product-title"> <a href="#">samurai t-shirt</a> </h2>
									<span class="price"> <b>$45.05</b> <del></del> </span>
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
									<a href="#" class="img"> <img src="{{asset('img/home-fourteen/prod-2.jpg')}}" alt="" /> </a>
									<div class="quick-view">
										<a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
									</div>
									<div class="new-tag"> new </div>
									<div class="sale-tag"> sale </div>
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
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
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
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
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
									<span class="price"> <b>$72.30</b> <del></del> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
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
									<span class="price"> <b>$140.35</b> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
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
									<span class="price"> <b>$66.20</b> </span>
									<div class="product-links"> 
										<a href="#" class="add-to-cart">Add To Cart</a>
										<a href="#" class="icon_heart_alt"></a>
										<a href="#" class="icon_piechart"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- / Our Products Ends -->
@endsection