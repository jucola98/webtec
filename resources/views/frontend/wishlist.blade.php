@extends('frontend/layout')




@section('content')
            <article class="page-body">
            <!--Breadcrumb Section Start-->
                <section class="breadcrumb-bg-5">                
                    <div class="container">
                        <div class="site-breadcumb">                        
                            <h1 class="title-1"> Wishlist</h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="{{ route('master') }}"> Home </a> Wishlist </li>                             
                            </ol>
                        </div>  
                    </div>
                </section>
                <!--Breadcrumb Section End-->

                <section class="wrapper sec-space shopping-cart">                  
                    <div class="container">
                        
                        <h2 class="section-title"> your wishlist items </h2>
                        
                                
                            
                        
                        <!-- Shopping Cart Starts -->
                        <div class="cart-table">
                            
                                <table class="product-table">
                                    <thead class="font-2">
                                        <tr>
                                            <th></th>                                
                                            <th>product name</th>  
                                            <th>price</th> 
                                            <th></th> 
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                        
                                   @isset($wishlistdata)
                                    @foreach ($wishlistdata as $item) 
                                        <tr>
                                            <td class="image">
                                                <div class="white-bg" >
                                                @if($item->imgURI == null || !file_exists($item->imgURI))
                                                    <img src="{{asset('img/home-fourteen/imgnotfound.png')}}" alt=""  /> </a> 
                                                @else
                                                 <a class="media-link" href="{{route('singleprod',[$item->mcat,$item->product_id])}}"><img src="{{asset($item->imgURI)}}" alt=""></a> 
                                                @endif
                                                </div>
                                            </td>
                                            <td class="description">
                                                <a href="{{route('singleprod',[$item->mcat,$item->product_id])}}">{{$item->name}}</a> 
                                                <ul>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Color :</span> <span class="gray-color">White</span> </li>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Size :</span> <span class="gray-color"> XL </span> </li>
                                                </ul>                                                                                     
                                            </td>    
                                            <td class="price"> {{number_format(($item->price)-($item->price)*($item->sale/100),2)}}€ </td> 
                                            <td class="remove-edit">
                                                
                                                <form action="wishlistdelete" method="post">
                                                    @csrf
                                                    <button class="icon_close fsz-24 crossbutton" name="prodid" value="{{$item->product_id}}"></button> 
                                                </form>
                                                

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
                                        <form action="{{route("clearwishlist")}}" method="post">
                                            @csrf
                                            <button class="theme-btn btn" type="submit"> clear wishlist </button>
                                        <form>
                                            <!--<button class="theme-btn btn"> update wishlist </button>-->
                                        </div>
                                        <div class="continue-shp col-sm-4">
                                            <button class="theme-btn btn"> continue shopping </button>
                                        </div>
                                    </div>
                                </div>
<<<<<<< Updated upstream
                            
                        </div>

                        
                        
                            
                            
                                
                            
=======
>>>>>>> Stashed changes
                        </div>
                        <!-- / Shopping Cart Ends -->
                    </div>
                  
                </section>

            </article>
            @endsection