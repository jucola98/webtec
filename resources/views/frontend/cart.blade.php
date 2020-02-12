@extends('frontend/layout')




@section('content')
            <article class="page-body">
            <!--Breadcrumb Section Start-->
                <section class="breadcrumb-bg-5" style="background-image:url({{Voyager::image('banners/cartbanner.jpg')}})">                
                    <div class="container">
                        <div class="site-breadcumb">                        
                            <h1 class="title-1"> cart</h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="{{ route('master') }}"> Home </a> Cart </li>                             
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
                                                    @if($item->imgURI == null )
                                                    <img src="{{asset('img/home-fourteen/imgnotfound.png')}}" class="imgcart" alt=""  /> </a> 
                                                @else
                                                 <a class="media-link" href="{{route('singleprod',[$item->mcat,$item->products_id])}}"><img src="{{Voyager::image($item->imgURI)}}"   class="imgcart" alt=""></a> 
                                                @endif
                                               
                                                </div>
                                            </td>
                                            <td class="description">
                                                <a href="{{route('singleprod',[$item->mcat,$item->products_id])}}">{{$item->name}}</a> 
                                                <ul>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Color :</span> <span class="gray-color">White</span> </li>
                                                    <li> <i class="arrow_carrot-right"></i> <span>Size :</span> <span class="gray-color"> {{$item->catsize}} </span> </li>
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
                                                <form action="cartdelete" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$item->variant_id}}" name="variant">
                                                    <button class="icon_close fsz-24 crossbutton" name="prodid" value="{{$item->products_id}}" type="submit"></button> 
                                                </form>
                                                <a href="#" class="icon_pencil fsz-14 "></a> 
                                            </td>
                                        </tr>
                                    @endforeach       
                                    @endisset  
                                    
                                    </tbody>                               
                                </table>
                                <section class="breadcrumb-bg-2-left">                
                                    <div class="container">
                                        <div class="site-breadcumb">                        
                                        <ul class="font-2" >
                                                <li class="title-2 slidetext"> sub total    <span> 
                                                
                                               {{number_format($total,2)}}
                                                
                                                </span> </li>
                                                
                                                <li class="title-2 slidetext"> shipping    <span> €7,00 </span> </li>
                                            
                                                <li class="section-title pt-20 slidetext"> <b> grand total  <span class="red-color">
                                                @if ($total>0)
                                                €{{number_format($total+7,2)}}
                                                @else
                                                    €0.00    
                                                @endif
                                                </span> </b> </li>
                                                <li class="ptb-10"> <hr class="divider"> </li>
                                                
                                                <li class="slidetext"> <button class="theme-btn-1 btn submit-btn " type="submit"> <b> proceed to checkout </b> </button> </li>
                                            </ul>
                                        </div>  
                                    </div>
                                </section>
                                <div class="row">
                                    <div class="continue-shopping">
                                        <div class="shp-btn col-sm-8">
                                        <form action="clearcart" method="post">
                                            @csrf
                                            <button type=submit class="theme-btn btn"> clear shopping cart </button>
                                        </form>
                                            <button class="theme-btn btn"> update shopping cart </button>
                                        </div>
                                        <div class="continue-shp col-sm-4">
                                            <button class="theme-btn btn"> continue shopping </button>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                        
                        
                            
                            
                                
                            
                        </div>
                        <!-- / Shopping Cart Ends -->
                    </div>
                  
                </section>

            </article>
            @endsection