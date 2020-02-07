@extends('frontend/layout')




@section('content')
            <article class="page-body">
            <!--Breadcrumb Section Start-->
                <section class="breadcrumb-bg-5">                
                    <div class="container">
                        <div class="site-breadcumb">                        
                            <h1 class="title-1"> cart</h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="{{ route('master') }}"> Home </a> Wishlist </li>                             
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
                                    @isset($dataquery)
                                    @foreach ($dataquery  as $item)    
                                        <tr>
                                            <td class="image">
                                                <div class="white-bg">
                                                <a class="media-link" href="{{route('singleprod',[$item->mcat,$item->products_id])}}"><img src="{{asset('img/common/recent-prod-1.png')}}" alt=""></a> 
                                                </div>
                                            </td>
                                            <td class="description">
                                                <a href="{{route('singleprod',[$item->mcat,$item->products_id])}}">{{$item->name}}</a> 
                                                <ul>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Color :</span> <span class="gray-color">White</span> </li>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Size :</span> <span class="gray-color"> XL </span> </li>
                                                </ul>                                                                                     
                                            </td>    
                                            <td class="price"> {{number_format(($item->price)-($item->price)*($item->sale/100),2)}}€ </td> 
                                            <td class="quantity">
                                                <div class="qty">
                                                    {{$item->amount}}
                                                </div>
                                            </td>
                                            <td class="price"> {{number_format((($item->price)-($item->price)*($item->sale/100)) * $item->amount,2)}}€ </td>
                                            <td class="remove-edit">
                                                <a href="#" class="icon_close fsz-24"></a> 
                                                <a href="#" class="icon_pencil fsz-14"></a> 
                                            </td>
                                        </tr>
                                    @endforeach       
                                    @endisset  
                                    
                                    </tbody>                               
                                </table>
                                <section class="breadcrumb-bg-2-left">                
                                
                                </section>
                                <div class="row">
                                    <div class="continue-shopping">
                                        <div class="shp-btn col-sm-8">
                                            <button class="theme-btn btn"> clear wishlist </button>
                                            <button class="theme-btn btn"> update wishlist </button>
                                        </div>
                                        <div class="continue-shp col-sm-4">
                                            <button class="theme-btn btn"> continue shopping </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        
                        
                            
                            
                                
                            
                        </div>
                        <!-- / Shopping Cart Ends -->
                    </div>
                  
                </section>

            </article>
            @endsection