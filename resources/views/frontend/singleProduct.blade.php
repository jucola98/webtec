@extends('frontend/layout')

@section('content')

<!-- CONTENT AREA -->
<article class="page-body">

<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg mask-overlay">                
    <div class="container">
        <div class="site-breadcumb">                        
            <h1 class="title-1">Simple product</h1> 
            <ol class="breadcrumb breadcrumb-menubar">
                <li> <a href="#"> Home </a> <a href="#"> Shop  </a> Simple Product </li>                             
            </ol>
        </div>  
    </div>
</section>
<!--Breadcrumb Section End-->

<section class="wrapper sec-space single-product layout-simple">
    <!-- Single Product Starts -->
    <div class="container">
        <div class="row">
            <!-- Single Products Slider Starts --> 
            <div class="col-lg-4 col-md-5 col-sm-6 prod-slider-wrap">                                    
                <div class="owl-carousel prod-slider sync1">
                    <div class="item popup-gallery"> 
                        <img src="{{asset('img/common/prod-layout/layout-1.jpeg')}}" alt="">
                        <a href="{{asset('img/common/prod-layout/layout-1.jpeg')}}" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                    </div>
                  <!--<div class="item popup-gallery"> 
                        <img src="{{asset('img/common/prod-layout/layout-2.jpeg')}}" alt=""> 
                        <a href="{{asset('img/common/prod-layout/layout-2.jpeg')}}" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                    </div>
                    <div class="item popup-gallery"> 
                        <img src="assets/img/common/prod-layout/layout-3.jpeg" alt=""> 
                        <a href="assets/img/common/prod-layout/layout-3.jpeg" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                    </div>
                    <div class="item popup-gallery"> 
                        <img src="assets/img/common/prod-layout/layout-4.jpeg" alt=""> 
                        <a href="assets/img/common/prod-layout/layout-4.jpeg" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                    </div>
                    <div class="item popup-gallery"> 
                        <img src="assets/img/common/prod-layout/layout-2.jpeg" alt=""> 
                        <a href="assets/img/common/prod-layout/layout-2.jpeg" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                    </div>
                    <div class="item popup-gallery"> 
                        <img src="assets/img/common/prod-layout/layout-4.jpeg" alt=""> 
                        <a href="assets/img/common/prod-layout/layout-4.jpeg" title="Product" class="caption-link popup"><i class="arrow_expand"></i></a>
                    </div>-->
                </div>

                <div  class="owl-carousel sync2">
                    
                    <div class="item"> <img src="{{asset('img/common/prod-layout/thumb-1.jpeg')}}" alt=""> </div>
                    <!--<div class="item"> <img src="{{asset('img/common/prod-layout/thumb-2.jpeg')}}" alt=""> </div>
                    <div class="item"> <img src="assets/img/common/prod-layout/thumb-3.jpeg" alt=""> </div>
                    <div class="item"> <img src="assets/img/common/prod-layout/thumb-4.jpeg" alt=""> </div>  
                    <div class="item"> <img src="assets/img/common/prod-layout/thumb-2.jpeg" alt=""> </div>
                    <div class="item"> <img src="assets/img/common/prod-layout/thumb-4.jpeg" alt=""> </div>--> 
                </div>
            </div>
            <!-- Single Products Slider Ends --> 

            <!-- Products Description Starts --> 
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="product-detail">
                    <div class="prod-lr-btn">                                   
                        <a href="#"> <i class=" arrow_left"></i> <img src="{{asset('img/common/prod-layout/next-1.jpg')}}" alt="" /> </a>
                        <a href="#"> <i class=" arrow_right "></i> <img src="{{asset('img/common/prod-layout/next-2.jpg')}}" alt="" /> </a>
                    </div>
                    <div class="product-heading">
                        <h2 class="section-title">{{$singart->name}}</h2>                                              
                    </div>
                    <div class="rating">                                                              
                        @for ($i=(int)$singart->rating;$i>0;$i--)
                        <span class="star active"></span>
                        <!--<span class="no star"></span>-->
                    @endfor
                    @if($singart->rating-(int)$singart->rating==0.5)
                        <span class="star half"></span>
                    @endif
                    @for ($i=(int)(5-$singart->rating);$i>0;$i--)
                        <span class="no star"></span>
                        <!--<span class="no star"></span>-->
                    @endfor
                        <span>{{$singart->rating}}/5</span>
                    @if($singart->stock==0)
                        <br> <span style="color:red;">Product not in stock</span>
                    @endif
                        <!--<div class="product-review">
                            <ul class="list-items black-color">
                                <li>Be the first to review this product</li>
                            </ul>
                        </div>-->
                    </div>  
                    <div class="price">
                        @if(($singart->sale)>0)
                            <b>${{($singart->price)-($singart->price)*($singart->sale/100)}}</b> <del>${{$singart->price}}</del><span class="green-color"> {{$singart->sale}}%</span>
                        @else
                            <b>${{($singart->price)}}</b><!--forse va aggiunto un campo per gestire i saldi-->
                        @endif
                    </div>

                    <div class="product-availability">
                        <ul class="stock-detail list-items black-color">  
                            @if($singart->stock>0)                                     
                                <li class=""> <i class="icon-layers icons"></i> <span> Only <b>{{$singart->stock}}</b> Left </span> <i class="arrow_carrot-down"></i> </li>
                                <li>
                                
                                <b>Available:</b> <span class="green-color"> In Stock </span>  
                            @else
                                <b>Available:</b> <span class="red-color"> Not In Stock </span>  
                            @endif
                            </li>
                        </ul>                                                                             
                    </div>

                    <hr class="divider-2">   

                    <div class="product-description">
                        <p>{{$singart->description}}</p>
                    </div>

                    <hr class="divider-2">   

                    <div class="prod-btns">
                        @if($singart->stock>0)
                        <div class="quantity">
                            <button class="btn minus"><i class="icon_minus-06"></i></button>
                            <input type="number" title="Qty" value="03" name="quantity" min="1" step="1" class="form-control qty">
                            <button class="btn plus"><i class="icon_plus"></i></button>
                        </div>
                        <div class="add-to-cart">
                            <button class="theme-btn-1 btn cart-btn"> <i class="icon ion-ios-plus-empty white-color"></i> Add to Cart </button>                                       
                        </div>
                        @else

                        @endif                                    
                    </div>

                    <div class="prod-code upper-case">
                        <p> <b>SKU : </b> <b class="black-color">11F25A3678</b> </p>
                        <div class="prod-social"> 
                            <b>Share : </b>
                            <ul class="list-items">
                                <li><a class="facebook" href="#"><i class="social_facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="social_twitter"></i></a></li>
                                <li><a class="instagram" href="#"><i class="social_googleplus"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="social_pinterest"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="social_instagram"></i></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products Description Starts --> 
        </div>

        <!-- Products Description Tabination Starts -->  
        <div class="tabs-wrap ptb-70">
            <div class="tabs  text-center">
                <ul id="tabs" class="nav font-2 prod-tabs">                                         
                    <li class="active"><a href="#prod-tab-1" data-toggle="tab"> Product Description </a></li>
                    <li class=""><a href="#prod-tab-2" data-toggle="tab"> Reviews </a></li>
                    <li class=""><a href="#prod-tab-3" data-toggle="tab"> Tags </a></li>
                    <li class=""><a href="#prod-tab-4" data-toggle="tab"> additional information </a></li>
                    <li class=""><a href="#prod-tab-5" data-toggle="tab"> custom tab info </a></li>
                    <li class=""><a href="#prod-tab-6" data-toggle="tab"> custom tab video </a></li>                                
                </ul>
            </div>
            <div class="tab-content prod-tab-content">
                <div id="prod-tab-1" class="tab-pane fade in active">
                    <p>Coupling a blended linen construction with tailored style, the River Island HR Jasper Blazer will imprint a touch of 
                        dapper charm into your after-dark wardrobe. Our model wearing a size medium blazer, and usually takes a size medium/38L 
                        fshirt. He is 6’2 1/2” (189cm) tall with a 38” (96 cm) chest and a 31” (78 cm) waist. </p>
                    <ul>
                        <li> <span class="des"> Length: 74cm </span> </li>
                        <li> <span class="des"> Regular fit </span> </li>
                        <li> <span class="des"> Notched lapels </span> </li>
                        <li> <span class="des"> Twin button front fastening </span> </li>
                        <li> <span class="des"> Front patch pockets; chest pocket </span> </li>
                        <li> <span class="des"> Internal pockets </span> </li>
                        <li> <span class="des"> Centre-back vent </span> </li>
                        <li> <span class="des"> Please refer to the garment for care instructions. </span> </li>
                        <li> <span class="des"> Length: 74cm </span> </li>
                        <li> <span class="des"> Material: Outer: 50% Linen & 50% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate </span> </li>
                    </ul>
                </div>
                <div id="prod-tab-2" class="tab-pane fade">
                    <p> <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit !</b> </p>
                    <p> Suspendisse ultricies scelerisque turpis, elementum ornare arcu posuere mollis. Donec vitae tempor ante, ut tempus augue. Maecenas aliquam, ante quis egestas molestie, ipsum sapien faucibus lorem, ac placerat magna purus id quam. Proin id felis sapien.</p>
                    <p> Mauris metus eros, finibus et eros eget, vehicula tincidunt ex. Integer dictum turpis felis, at gravida lectus vestibulum et. Mauris vitae massa pellentesque, rutrum lacus sit amet, dictum massa. </p>
                </div>
                <div id="prod-tab-3" class="tab-pane fade">
                    <p> <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit !</b> </p>
                    <p> Suspendisse ultricies scelerisque turpis, elementum ornare arcu posuere mollis. Donec vitae tempor ante, ut tempus augue. Maecenas aliquam, ante quis egestas molestie, ipsum sapien faucibus lorem, ac placerat magna purus id quam. Proin id felis sapien.</p>
                    <p> Mauris metus eros, finibus et eros eget, vehicula tincidunt ex. Integer dictum turpis felis, at gravida lectus vestibulum et. Mauris vitae massa pellentesque, rutrum lacus sit amet, dictum massa. </p>
                </div>
                <div id="prod-tab-4" class="tab-pane fade">
                    <p> <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit !</b> </p>
                    <p> Suspendisse ultricies scelerisque turpis, elementum ornare arcu posuere mollis. Donec vitae tempor ante, ut tempus augue. Maecenas aliquam, ante quis egestas molestie, ipsum sapien faucibus lorem, ac placerat magna purus id quam. Proin id felis sapien.</p>
                    <p> Mauris metus eros, finibus et eros eget, vehicula tincidunt ex. Integer dictum turpis felis, at gravida lectus vestibulum et. Mauris vitae massa pellentesque, rutrum lacus sit amet, dictum massa. </p>
                </div>
                <div id="prod-tab-5" class="tab-pane fade">
                    <p> <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit !</b> </p>
                    <p> Suspendisse ultricies scelerisque turpis, elementum ornare arcu posuere mollis. Donec vitae tempor ante, ut tempus augue. Maecenas aliquam, ante quis egestas molestie, ipsum sapien faucibus lorem, ac placerat magna purus id quam. Proin id felis sapien.</p>
                    <p> Mauris metus eros, finibus et eros eget, vehicula tincidunt ex. Integer dictum turpis felis, at gravida lectus vestibulum et. Mauris vitae massa pellentesque, rutrum lacus sit amet, dictum massa. </p><i class="icon_stop"></i> <span class="des"> Material: Outer: 50% Linen & 50% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate </span> </li>
                    </ul>
                </div>
                <div id="prod-tab-6" class="tab-pane fade">
                    <p> <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit !</b> </p>
                    <p> Suspendisse ultricies scelerisque turpis, elementum ornare arcu posuere mollis. Donec vitae tempor ante, ut tempus augue. Maecenas aliquam, ante quis egestas molestie, ipsum sapien faucibus lorem, ac placerat magna purus id quam. Proin id felis sapien.</p>
                    <p> Mauris metus eros, finibus et eros eget, vehicula tincidunt ex. Integer dictum turpis felis, at gravida lectus vestibulum et. Mauris vitae massa pellentesque, rutrum lacus sit amet, dictum massa. </p>
                </div>
            </div>

        </div>
        @endsection