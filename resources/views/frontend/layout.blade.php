<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html >
    <head>
        <!-- META TAG -->
        
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]
        <meta name="viewport" content="width=device-width, initial-scale=1">-->
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
        

        

        <!--[if lt IE 9]>
          <script src="assets/plugins.html5shiv.min.js"></script>
          <script src="assets/plugins/respond.min.js"></script>
        <![endif]-->
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
                                                    
                                                    @if(App\Http\Controllers\FrontendController::getUserCart()!=null)
                                                        @foreach (App\Http\Controllers\FrontendController::getUserCart()[0] as $recordsCart)
                                                        <a href="#" class="close icon_close" data-dismiss="alert" aria-label="close"></a>
                                                            <a class="img" href="{{route('singleprod',[$recordsCart->mcat,$recordsCart->products_id])}}"> <img src="{{asset($recordsCart->URI)}}" alt=""/> </a>
                                                            <div class="cart-title">
                                                                <a class="font-2" href="#">{{$recordsCart->name}}</a>
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
                                    <!--
                                    <li class="dropdown mega-dropdown">
                                        <a aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Shop</a>
                                        <div class="dropdown-menu mega-dropdown-menu">
                                            <div class="flex-item overlay">
                                                <div class="flex-wrap">
                                                    <div class="flex-caption middle">                                                
                                                        <div class="menu-offer">                                                    
                                                            <h2 class="title no-margin"> men’s shoes </h2> 
                                                            <h3 class="title-1"> sale up to 30% off </h3>
                                                        </div>                                                                                             
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 menu-block">
                                                <div class="sub-list">
                                                    <a href="#"> <img class="img-responsive" src="{{asset('img/home-fourteen/mega-menu-1.jpg')}}" alt=""> </a>
                                                    <h2 class="title-2">Suggestions</h2>
                                                    <ul>
                                                        <li><a href="#">New Products</a></li>
                                                        <li><a href="#">Back To School</a></li>
                                                        <li><a href="#">Must Have</a></li>
                                                        <li><a href="#">Denim Collection</a></li>
                                                        <li><a href="#">Daily Standards</a></li>
                                                        <li><a href="#">Black Label</a></li>                                                        
                                                    </ul>
                                                </div>
                                            </div> 
                                            <div class="col-sm-12 col-lg-4 menu-block">                                                
                                                <div class="sub-list">
                                                    <a href="#"> <img class="img-responsive" src="{{asset('img/home-fourteen/mega-menu-2.jpg')}}" alt=""> </a>
                                                    <h2 class="title-2">Collections</h2>
                                                    <ul>
                                                        <li><a href="#">Basics</a></li>
                                                        <li><a href="#">Coat and Parkas</a></li>
                                                        <li><a href="#">Shorts <span class="hot-tag-left">hot!</span> </a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                        <li><a href="#">Jackets</a></li>
                                                        <li><a href="#">Trousers</a></li>  
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 menu-block">
                                                <div class="sub-list">
                                                    <a href="#"> <img class="img-responsive" src="{{asset('img/home-fourteen/mega-menu-3.jpg')}}" alt=""> </a>
                                                    <h2 class="title-2">Accessories</h2>                                                                
                                                    <ul>
                                                        <li><a href="#">Accessories</a></li>
                                                        <li><a href="#">Bags and Wallets</a></li>
                                                        <li><a href="#">Fragrances <span class="hot-tag-left">hot!</span> </a></li>
                                                        <li><a href="#">Caps & Hats</a></li>
                                                        <li><a href="#">Underwear</a></li>
                                                        <li><a href="#">Men's Footwear</a></li>  
                                                    </ul>
                                                </div>
                                            </div>  
                                        </div>
                                    </li>-->
                                    <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Uomo <div class="bubble"> </div> </a>
                                        
                                        <ul class="dropdown-menu">  
                                        @foreach (App\Http\Controllers\FrontendController::fetchCategoriesMan() as $records)
                                            <li><a href="{{ route('products',[$records->macrocategory,$records->id]) }}"> {{$records->name}}</a></li><!--productsmacrocat-->
                                        @endforeach    
                                            <!--
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Sub Menu</a>
                                                <ul class="dropdown-menu">  
                                                    <li><a href="#">Sub Menu 1</a></li>
                                                    <li><a href="#">Sub Menu 2</a></li>    
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Sub Menu 3</a>
                                                        <ul class="dropdown-menu">  
                                                            <li><a href="#">Sub Menu 4</a></li>
                                                            <li><a href="#">Sub Menu 5</a></li> 
                                                            <li><a href="#">Sub Menu 6</a></li> 
                                                        </ul>
                                                    </li> 
                                                </ul>
                                            </li>-->
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
                                    
                        
                    
                
            
                                    <li class="dropdown mega-dropdown">
                                       
                                        <div class="dropdown-menu mega-dropdown-menu">
                                            <div class="col-sm-12 col-lg-4 menu-block">
                                                <div class="sub-list">                                                        
                                                    <h2 class="title-2">Product Categories</h2>
                                                    <ul>                                                           
                                                        <li><a href="categories-2-column.html"> Category Col 2 </a></li>                                            
                                                        <li><a href="categories-3-column.html"> Category Col 3 </a></li>
                                                        <li><a href="categories-4-column.html"> Category Col 4 </a></li>
                                                        <li><a href="categories-list-view.html"> Category List </a></li>                                            
                                                        <li><a href="categories-sidebar-left.html"> Category Sidebar Left </a></li>
                                                        <li><a href="categories-sidebar-right.html"> Category Sidebar Right </a></li>
                                                    </ul>
                                                </div>
                                            </div> 
                                            <div class="col-sm-12 col-lg-4 menu-block">                                                
                                                <div class="sub-list">                                                       
                                                    <h2 class="title-2"> Single Product </h2>
                                                    <ul>
                                                        <li><a href="product-layout-1.html"> Layout 1 </a></li>
                                                        <li><a href="product-layout-2.html"> Layout 2 </a></li>
                                                        <li><a href="product-layout-3.html"> Layout 3 </a></li>
                                                        <li><a href="product-layout-4.html"> Layout 4 </a></li>
                                                        <li><a href="product-layout-5.html"> Layout 5 </a></li>
                                                        <li><a href="product-layout-affiliate.html"> Layout Affiliate </a></li>
                                                        <li><a href="product-layout-bundle.html"> Layout Bundle </a></li>
                                                        <li><a href="product-layout-configurable.html"> Layout Configurable </a></li>
                                                        <li><a href="product-layout-groupped.html"> Layout Groupped </a></li>
                                                        <li><a href="product-layout-tier-pricing.html"> Layout Tier Pricing </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 menu-block">
                                                <div class="sub-list">                                                      
                                                                                                                  
                                                    <ul>
                                                        <li> <a href="about-us.html">About Us</a> </li>                                                   
                                                        <li> <a href="shopping-cart.html">Shopping Cart</a> </li>
                                                        <li> <a href="checkout.html">Checkout</a> </li> 
                                                        <li> <a href="login.html">Login</a> </li> 
                                                        <li> <a href="shortcodes.html">Shortcodes</a> </li>                                                                 
                                                        <li> <a href="typography.html">Typography</a> </li>
                                                        <li> <a href="coming-soon.html">Coming Soon</a> </li>
                                                        <li> <a href="404-error.html">Error Page</a> </li> 
                                                        <li> <a href="my-account.html">Account Pages</a> </li> 
                                                    </ul>
                                                </div>
                                            </div>  
                                        </div>
                                    </li> 
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
                        <div class="footer-logo">
                            <a href="index.html"> <img src="{{asset('img/home-fourteen/main-logo.png')}}" alt="logo" title="Logo" /> </a>
                        </div>
                        <div class="footer-share font-2">
                            <ul>
                                <li><a href="#">facebook</a></li>   
                                <li><a href="#">twitter</a></li>           
                                <li><a href="#">pinterest</a></li>
                                <li><a href="#">google+</a></li>
                                <li><a href="#">instagram</a></li>           
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copy-rights">
                    <div class="container">
                        © 2017 <a href="#"> <b> LOGANCEE </b> </a>. All Rights Reserved      
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