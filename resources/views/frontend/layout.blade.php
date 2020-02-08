<!DOCTYPE html>

<html >
    <head>
        
        <meta name="description" content="agency, ecommerce">
        <meta name="author" content="JthemeStudio">

        <title>Home-14/Logancee</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed icon" sizes="144x144" href="{{asset('ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="shortcut icon" href="ico/favicon.ico">

        <!-- CSS Global -->
        <link href="{{asset('plugins/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">  
        <link href="{{asset('plugins/animate.css')}}" rel="stylesheet" type="text/css">  
        <link href="{{asset('plugins/subscribe-better.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('plugins/jquery.mCustomScrollbar.min.css')}}" rel="stylesheet" type="text/css"> 
        <link href="{{asset('plugins/magnify.css')}}" rel="stylesheet" type="text/css">  
        
        <!-- Icon Font -->
        <link href="{{asset('icons-font/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">   
        <link href="{{asset('icons-font/font-elegant/elegant.css')}}"  rel="stylesheet" type="text/css">   
        <link href="{{asset('icons-font/simple-line-icons-master/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">   


        <!-- Custom CSS -->
        <link href="{{asset('css/home-fourteen.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/main-style.css')}}" rel="stylesheet" type="text/css">
        

        

        
    </head>
    <body class="wide">        


        <!-- WRAPPER -->
                  

            <!-- HEADER -->
            <header class=" container header-wrap header-two "> 
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12 logo-wrap">
                        <a class="logo" href="{{ route('master') }}"> <img src="{{asset('img/home-fourteen/CozyStore.png')}}" alt="logo" title="Logo"> </a>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">       
                        <div class="top-elements">
                            <span class="nav-trigger open icon_menu"></span>
                            <div class="search-form-wrap">
                                <span class="icon-magnifier search-icon"></span>
                                <form class="search-form" action="{{route('searchProduct')}}" method="post">
                                    @csrf
                                    <input class="search" type="text" placeholder="Type & Hit Enter" name="searchbar" />
                                    <span class="icon_close search-close"></span>
                                </form>
                            </div>
                            <div class="header-cart-wrap">
                                <div class="header-cart">
                                    <a href="#"> 
                                        <i class="cart-icon icon-handbag icons"></i> 
                                    </a>
                                </div>
                                <div class="cart-popup"> 
                                    <div class="cart-empty" style="display: none;">
                                        <p>You have no items in your shopping cart.</p>
                                    </div>
                                    <div class="cart-box">
                                        <ol class="cart-list">  
                                            <li>
                                                <div class="alert">
                                                    
                                                    @if(App\Http\Controllers\FrontendController::getUserCart()[0]!=null)
                                                        @foreach (App\Http\Controllers\FrontendController::getUserCart()[0] as $recordsCart)
                                                        
                                                            <a class="img" href="{{route('singleprod',[$recordsCart->mcat,$recordsCart->products_id])}}"> <img src="{{asset($recordsCart->URI)}}" alt=""/> </a>
                                                            <div class="cart-title">
                                                                <a class="font-2" href="{{route('singleprod',[$recordsCart->mcat,$recordsCart->products_id])}}">{{$recordsCart->name}}</a>
                                                                <p class="price"> 
                                                                    <b> {{$recordsCart->price}}€ x {{$recordsCart->amount}}  </b>
                                                                </p>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                    Empty
                                                    @endif
                                                    
                                                
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="buttons">
                                        <div class="rigth"> 
                                            <a href="{{ route('cart') }}" class="theme-btn btn small-btn buttoncheckout" >View full cart</a>
                                        </div>
                                    </div>
                                        <div class="total">
                                            <span class="font-2">sub total</span> <span class="total-price">{{App\Http\Controllers\FrontendController::getUserCart()[1]}}€</span>
                                        </div>

                                        <div class="buttons">
                                            
                                            <div class="right"> 
                                                <a href="{{ route('checkout') }}" class="theme-btn btn small-btn"> Checkout </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-settings"> 
                                <a href="#" class="icon-settings icons">  </a> 
                                <ul class="settings-popup">
                                 <li class="additional-page font-2">   
                                 @if(Auth::check())                                       
                                        <a href="{{ route('logout') }}" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="icon-lock icons"></span>
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>
                                       
                                        <a href="{{ route('cart') }}"> <span class="icon-handbag icons"></span> My Cart </a>
                                        <a href="{{ route('checkout') }}"> <span class="icon-note icons"></span> My Checkout </a>
                                        <a href="{{ route('wishlist') }}"> <span class="icon-heart icons"></span>  Wishlist </a>
                                        @else
                                        <a href="{{ route('login') }}"> <span class="icon-lock icons"></span> Log in/Sing up </a>
                                        <a href="{{ route('cart') }}"> <span class="icon-handbag icons"></span>  Cart </a>
                                        <a href="{{ route('checkout') }}"> <span class="icon-note icons"></span>  Checkout </a>
                                        
                                    </li>
                                    @endif
                                </ul>
                            </div>                            
                        </div>

                        <div class="menu-bar"> 
                            <span class="nav-trigger close-icon icon_close"></span>
                            <div id="primary-navigation">                                        
                                <ul class="primary-navbar font-2">
                                    <li class="dropdown mega-dropdown active">
                                    <li><a href="{{ route('master') }}">Home</a></li>
                                        <div class="dropdown-menu mega-dropdown-menu">
                                           
                                            <div class="col-sm-12 col-lg-4 menu-block">
                                                <div class="flex-item overlay">
                                                    <img alt="" src="{{asset('img/home-fourteen/mega_images_1.jpg')}}" />
                                                    <div class="flex-wrap">
                                                        <div class="flex-caption middle">                                                
                                                            <div class="menu-offer">                                                    
                                                                <h2 class="title no-margin"> men’s shoes </h2> 
                                                                <h3 class="title-1"> Sale up to 30% off </h3>
                                                                <a href="#" class="theme-btn-2 small-btn btn"> Explore Now </a>
                                                            </div>                                                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </li>  
                                    
                                    <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Uomo <div class="bubble"> </div> </a>
                                        
                                        <ul class="dropdown-menu">  
                                        @foreach (App\Http\Controllers\FrontendController::fetchCategoriesMan() as $records)
                                            <li><a href="{{ route('products',[$records->macrocategory,$records->id]) }}"> {{$records->name}}</a></li><!--productsmacrocat-->
                                        @endforeach    
                                            
                                        </ul>
                                    </li>                                   
                                                                                                                             
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Donna</a>
                                        <ul class="dropdown-menu">  
                                            @foreach (App\Http\Controllers\FrontendController::fetchCategoriesWoman() as $records)
                                                <li><a href="{{ route('products',[$records->macrocategory,$records->id]) }}"> {{$records->name}}</a></li><!--productsmacrocat-->
                                            @endforeach 
                                        </ul>
                                    </li>
                                    <li><a href="{{ route ('contact') }}">Contact</a></li>
                                    <div class="flex-center position-ref full-height">
                                    
                        
                    
                
            
                                    
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </header>
			<!-- /HEADER -->
			
			
                @yield("content");
			<!-- Newsletter Starts-->
			<section class="section-five newsletter">
                    <div class="container">
                        <div class="title-wrap">
                            <h2 class="section-title text-center pt-10">get the latest from logancee</h2>
                            <p class="sub-title">Sign up for our Newsletter !</p>
                        </div>
                        <form id="subscribe-form" method="post" action="#" class="newsletter-form">
                            <div class="form-group col-sm-12 form-alert"></div>
                            <div class="form-group">
                                <div class="mail-info">
                                    <input placeholder="youremail@domain.com" class="form-control text" type="text">
                                    <button class="btn small-btn btn-black">Subscribe</button>
                                </div>
                            </div>                                       
                        </form>                        
                    </div>
                </section>
                <!-- / Newsletter Ends -->  

            </article>
            <!-- / CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="footer-six">
                <div class="footer-wrap">
                    <div class="container">
                        
                        <div class="footer-share font-2">
                            <ul>
                                <li><a href="#">facebook</a></li>   
                                <li><a href="#">twitter</a></li>           
                                <li><a href="#">instagram</a></li>           
                            </ul>
                        </div>
                    </div>
                </div>
              

            </footer>
            <!-- /FOOTER -->
            <script src={{asset("plugins/jquery-2.1.3.js")}}></script>        
            <script src={{asset("plugins/bootstrap.min.js")}}></script>
            <script src={{asset("plugins/bootstrap-select.min.js")}}></script>
            <script src={{asset("plugins/owl.carousel.min.js")}}></script>
            <script src={{asset("plugins/countdown/jquery.plugin.min.js")}}></script>
            <script src={{asset("plugins/countdown/jquery.countdown.js")}}></script>
            <script src={{asset("plugins/jquery.subscribe-better.min.js")}}></script>
            <script src={{asset("plugins/jquery.mCustomScrollbar.concat.min.js")}}></script>
    
    
            <!-- Custom Js  --> 
            <script src={{asset("js/home-fourteen.js")}}></script>
            
            <script src={{asset("plugins/owl-animated-text.js")}}></script>
            @yield("js")
        </body>
    </html>