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
                                                
                                                <div class="qty"style="margin:auto;" id="qtyhide{{$item->variant_id}}">
                                                    {{$item->amount}}
                                                </div>
                                                
                                                    <form action="{{route("editCartArticle")}}" method="post"  id="formshow{{$item->variant_id}}" style="display:none;">
                                                        @csrf
                                                        
                                                        <input type="hidden" value="{{$item->variant_id}}"  name="variantid"/>
                                                        <input type="hidden" value="{{$item->id}}"  name="cartid"/>
                                                        <input type="number" title="Qty" value="{{$item->amount}}" min="1" max="{{$item->maxvariant}}"step="1" class="form-control qty" text="1" id="quant" style="width:50%; margin:auto;" name="editnumber"/>
                                                        <div  style="margin:auto;">
                                                        <input type="submit">
                                                        <a class="icon_close fsz-24 " onclick="closeEditForm({{$item->variant_id}});"></a>
                                                        </div>
                                                    </form>
                                                
                                                    </div>
                                                
                                                    
                                                
                                                    
                                                    
                                                    
                                <!-- Products Description Starts --> 
                                        </div>
                                        
                                            </td>
                                            <td class="price"> {{number_format((($item->price)-($item->price)*($item->sale/100)) * $item->amount,2)}}€ </td>
                                            <td class="remove-edit">
                                                <form action="cartdelete" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$item->variant_id}}" name="variant">
                                                    <button class="icon_close fsz-24 crossbutton" name="prodid" value="{{$item->products_id}}" type="submit"></button> 
                                                </form>
                                                <a class="icon_pencil fsz-14 " onclick="openEditForm({{$item->variant_id}});"></a> 
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

                                                
                                                
                                            
                                                <li class="section-title pt-20 slidetext"> <b> sub total  <span class="red-color">
                                                @if ($total>0)
                                                €{{number_format($total,2)}}
                                                @else
                                                    €0.00    
                                                @endif
                                                </span> </b> </li>
                                                <li class="ptb-10"> <hr class="divider"> </li>
                                                
                                                <li class="slidetext"> <a href="{{route('checkout')}}"> <button class="theme-btn-1 btn submit-btn" > <b> proceed to checkout </b> </button> </a></li>
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
            @section('js')
            <script src={{asset("js/CartUtils.js")}}></script>   
        @endsection