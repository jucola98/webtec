@extends('frontend/layout')




@section('content')


            <article class="page-body">
            <!--Breadcrumb Section Start-->
                <section class="breadcrumb-bg-2">                
                    <div class="container">
                        <div class="site-breadcumb">                        
                            <h1 class="title-1">shopping cart</h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="#"> Home </a> Shopping Cart </li>                             
                            </ol>
                        </div>  
                    </div>
                </section>
                <!--Breadcrumb Section End-->

                <section class="wrapper sec-space shopping-cart">                  
                    <div class="container">
                        
                        <h2 class="section-title"> your cart items </h2>
                        
                        <!-- Shopping Cart Starts -->
                        <div class="cart-table">
                            <form class="cart-form">
                                <table class="product-table">
                                    <thead class="font-2">
                                        <tr>
                                            <th></th>                                
                                            <th>product name</th>  
                                            <th>price</th> 
                                            <th>quantity</th>
                                            <th>total</th>
                                            <th></th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="image">
                                                <div class="white-bg">
                                                    <a class="media-link" href="#"><img src="{{asset('img/common/recent-prod-1.png')}}" alt=""></a> 
                                                </div>
                                            </td>
                                            <td class="description">
                                                <a href="#">Samurai T-Shirt</a> 
                                                <ul>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Color :</span> <span class="gray-color">White</span> </li>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Size :</span> <span class="gray-color"> XL </span> </li>
                                                </ul>                                                                                     
                                            </td>    
                                            <td class="price"> $45.05 </td> 
                                            <td class="quantity">
                                                <div class="qty">
                                                    1
                                                </div>
                                            </td>
                                            <td class="price"> $45.05 </td>
                                            <td class="remove-edit">
                                                <a href="#" class="icon_close fsz-24"></a> 
                                                <a href="#" class="icon_pencil fsz-14"></a> 
                                            </td>
                                        </tr>      
                                        <tr>
                                            <td class="image">
                                                <div class="white-bg">
                                                    <a class="media-link" href="#"><img src="{{asset('img/common/recent-prod-2.png')}}" alt=""></a> 
                                                </div>
                                            </td>
                                            <td class="description">
                                                <a href="#"> Typograpy T-Shirt </a> 
                                                <ul>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Color :</span> <span class="gray-color"> Black </span> </li>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Size :</span> <span class="gray-color"> 42 </span> </li>
                                                </ul>                                                                                     
                                            </td>    
                                            <td class="price"> $45.05 </td> 
                                            <td class="quantity">
                                                <div class="qty">
                                                    1
                                                </div>
                                            </td>
                                            <td class="price"> $45.05 </td>
                                            <td class="remove-edit">
                                                <a href="#" class="icon_close fsz-24"></a> 
                                                <a href="#" class="icon_pencil fsz-14"></a> 
                                            </td>
                                        </tr>      
                                    </tbody>                               
                                </table>
                                <div class="row">
                                    <div class="continue-shopping">
                                        <div class="shp-btn col-sm-8">
                                            <button class="theme-btn btn"> clear shopping cart </button>
                                            <button class="theme-btn btn"> update shopping cart </button>
                                        </div>
                                        <div class="continue-shp col-sm-4">
                                            <button class="theme-btn btn"> continue shopping </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-md col-sm-6">
                                <div class="heading chk">
                                    <h2 class="section-title"> calculate shipping  <span class="icon_minus-06"></span> </h2>                              
                                </div>
                                <hr class="divider">
                                <div class="calculate-wrap ptb-20">
                                    <form class="calculate-form">
                                        <div class="form-group">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="United Kingdom (UK)">
                                                    <option>United Kingdom (UK)</option>
                                                    <option>United State (US)</option>
                                                    <option>United Arab Emirates (UAE)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="State / Country" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Adddress " class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Postcode / Zip" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn submit-btn" type="submit"> <b> get a quote </b> </button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6">
                                <div class="chk-total text-right">
                                    <ul class="font-2">
                                        <li class="title-2"> sub total    <span> $120.10 </span> </li>
                                        <li class="section-title pt-20"> <b> grand total  <span class="red-color"> $120.10 </span> </b> </li>
                                        <li class="ptb-10"> <hr class="divider"> </li>
                                        <li> <button class="theme-btn-1 btn submit-btn" type="submit"> <b> proceed to checkout </b> </button> </li>
                                    </ul>
                                    <a href="#"> Checkout with Mutilple Adresses </a>
                                </div>
                            </div>
                        </div>
                        <!-- / Shopping Cart Ends -->
                    </div>
                  
                </section>

            </article>
            @endsection