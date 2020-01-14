
@extends('frontend/layout')

@section('content')
<!-- CONTENT AREA -->
<article class="page-body">

<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg mask-overlay">                
    <div class="container">
        <div class="site-breadcumb">                        
            <h1 class="title-1"> Shop No Sidebar 3 Column </h1> 
            <ol class="breadcrumb breadcrumb-menubar">
                <li> <a href="#"> Home </a> <a href="#"> Shop  </a> Shop No Sidebar 4 Column </li>                             
            </ol>
        </div>  
    </div>
</section>
<!--Breadcrumb Section End-->

<section class="wrapper sec-space">
    <!-- Single Product Starts -->
    <div class="container">
        <div class="row">
            <!-- Products Categories Starts --> 
            <div class="col-md-12 col-sm-12 categories">
                <ul class="theme-tabs font-2">
                    <li class="active"> <a href="#prod-tab-1"  data-toggle="tab"> men </a> </li>
                    <li class=""> <a href="#prod-tab-2"  data-toggle="tab"> women </a> </li>
                    <li class=""> <a href="#prod-tab-3"  data-toggle="tab"> accessories </a> </li>
                    <li class=""> <a href="#prod-tab-4"  data-toggle="tab"> shoes </a> </li>
                    <li class=""> <a href="#prod-tab-5"  data-toggle="tab"> bags </a> </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="prod-tab-1">
                        <div class="sorter-bar block-inline">
                            <div class="show-result font-2">
                                Showing 1 to 16 of 17 total
                            </div>
                            <div class="select-option">
                                <form action="#" class="form-sorter">
                                    <label> Sort by </label>
                                    <div class="search-selectpicker selectpicker-wrapper">
                                        <select class="selectpicker"  data-width="100%" data-toggle="tooltip">
                                            <option>name</option>
                                            <option>position</option>
                                            <option>price</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="select-option">
                                <form action="#" class="form-wrap">
                                    <label> Show </label>
                                    <div class="search-selectpicker selectpicker-wrapper">
                                        <select class="selectpicker"  data-width="100%" data-toggle="tooltip">
                                            <option>9</option>
                                            <option>6</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="tabs-btns"> 
                                <ul class="tabination view-tabs">
                                    <li> View </li>
                                    <li class="active">
                                        <a href="#grid-view" data-toggle="tab">                                                    
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#list-view" data-toggle="tab">
                                            <i class="fa fa-th-list"></i>
                                        </a>
                                    </li>
                                </ul>                                       
                            </div>
                        </div>     

                        <div class="tab-content">
                            <!-- Product Grid View Starts -->
                            <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="#" class="img"> 
                                                    <img src="assets/img/common/product/540x720-1.jpg" alt="" /> 
                                                    <span class="product-hover">
                                                        <img alt="" src="assets/img/common/product/540x720-flip-1.jpg">          
                                                    </span>
                                                </a>
                                                <ul class="color-swatch-item">
                                                    <li> <a href="#"> <img src="assets/img/common/product/gray.png" alt="" /> </a> </li>
                                                    <li> <a href="#"> <img src="assets/img/common/product/black.png" alt="" /> </a> </li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-title"> <a href="#">samurai t-shirt</a> </h2>
                                                <span class="price"> <b>$45.05</b> <del></del> </span>
                                                <div class="rating">                                                              
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>                                           
                                                    <span class="star active"></span>
                                                    <span class="star half"></span>                                                
                                                </div>
                                                <div class="product-links"> 
                                                    <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>
                                                    <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="#" class="img"> 
                                                    <img src="assets/img/common/product/540x720-2.jpg" alt="" /> 
                                                    <span class="product-hover">
                                                        <img alt="" src="assets/img/common/product/540x720-flip-2.jpg">          
                                                    </span>
                                                </a>
                                                <div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div>
                                                <div class="new-tag"> new </div>
                                                <div class="sale-tag"> sale </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-title"> <a href="#">typo print t-shirt</a> </h2>
                                                <span class="price"> <b>$67.05</b> <del>$102.50</del> </span>
                                                <div class="rating">                                                              
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>                                           
                                                    <span class="star half"></span>
                                                    <span class="star "></span>                                                
                                                </div>
                                                <div class="product-links"> 
                                                    <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>
                                                    <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="#" class="img"> 
                                                    <img src="assets/img/common/product/540x720-3.jpg" alt="" /> 
                                                    <span class="product-hover">
                                                        <img alt="" src="assets/img/common/product/540x720-flip-3.jpg">          
                                                    </span>
                                                </a>
                                                <ul class="color-swatch-item">
                                                    <li> <a href="#"> <img src="assets/img/common/product/blue.png" alt="" /> </a> </li>
                                                    <li> <a href="#"> <img src="assets/img/common/product/pink.png" alt="" /> </a> </li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div>
                                                <div class="new-tag"> new </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-title"> <a href="#">Denim black shirt</a> </h2>
                                                <span class="price"> <b>$72.30</b> <del></del> </span>
                                                <div class="rating">                                                              
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>                                           
                                                    <span class="star"></span>
                                                    <span class="star"></span>                                                
                                                </div>
                                                <div class="product-links"> 
                                                    <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>
                                                    <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="#" class="img">
                                                    <img src="assets/img/common/product/540x720-4.jpg" alt="" /> 
                                                    <span class="product-hover">
                                                        <img alt="" src="assets/img/common/product/540x720-flip-4.jpg">          
                                                    </span>
                                                </a>   
                                                <div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div>
                                                <div class="sale-tag"> sale </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-title"> <a href="#">creative adidas t-shirt</a> </h2>
                                                <span class="price"> <b>$45.05</b> <del>$85.60</del> </span>
                                                <div class="rating">                                                              
                                                    <span class="star"></span>
                                                    <span class="star"></span>
                                                    <span class="star"></span>                                           
                                                    <span class="star"></span>
                                                    <span class="star"></span>                                                
                                                </div>
                                                <div class="product-links"> 
                                                    <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>
                                                    <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="#" class="img"> 
                                                    <img src="assets/img/common/product/540x720-5.jpg" alt="" /> 
                                                    <span class="product-hover">
                                                        <img alt="" src="assets/img/common/product/540x720-flip-5.jpg">          
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
                                                <div class="rating">                                                              
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>                                           
                                                    <span class="star active"></span>
                                                    <span class="star half"></span>                                                
                                                </div>
                                                <div class="product-links"> 
                                                    <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>
                                                    <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="#" class="img"> 
                                                    <img src="assets/img/common/product/540x720-6.jpg" alt="" /> 
                                                    <span class="product-hover">
                                                        <img alt="" src="assets/img/common/product/540x720-flip-6.jpg">          
                                                    </span>
                                                </a>
                                                <ul class="color-swatch-item">
                                                    <li> <a href="#"> <img src="assets/img/common/product/blue.png" alt="" /> </a> </li>
                                                    <li> <a href="#"> <img src="assets/img/common/product/pink.png" alt="" /> </a> </li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-title"> <a href="#">amior jacket two color</a> </h2>
                                                <span class="price"> <b>$72.30</b> <del></del> </span>
                                                <div class="rating">                                                              
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>
                                                    <span class="star active"></span>                                           
                                                    <span class="star active"></span>
                                                    <span class="star half"></span>                                                
                                                </div>
                                                <div class="product-links"> 
                                                    <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>
                                                    <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
@endsection   