
@extends('frontend/layout')

@section('content')

<!-- CONTENT AREA -->
<article class="page-body">
    
    
<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg-2" style="background-image:url({{Voyager::image('banners/skatebanner.jpg')}})">  
                <div class="site-breadcumb">                        
                    <h1 class="title-1">Products</h1> 
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="{{ route('master') }}"> Home </a> Products </li>                             
                        </ol>
                </div>  
</section>
<!--Breadcrumb Section End-->

<section class="wrapper sec-space">
    <!-- Single Product Starts -->
    <div class="container">
        <div class="row">
            <!-- Products Categories Starts --> 
            <div class="col-md-12 col-sm-12 categories">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="prod-tab-1">
                        <div class="sorter-bar block-inline">
                            <div class="show-result font-2">
                            </div>
                            <!-- form per il filtraggio dei prodotti tramite prezzo,size e saldi -->
                            @isset($sizesdistinct)
                            <form action="{{route("productsPost",[$items->first()->macrocategory,$items->first()->idcat])}}" method="post" class="filtro">
                                    @csrf
                                    <div>
                                        <label class="pad"> Sort by </label>
                                        <select  data-width="100%"  name="orderby">
                                            <option value="latest" @isset($orderby)@if($orderby=="latest")selected="selected"@endif @endisset >Latest</option>
                                            <option value="asc"    @isset($orderby)@if($orderby=="asc")selected="selected"@endif @endisset>Price ASC</option>
                                            <option value="desc"   @isset($orderby)@if($orderby=="desc")selected="selected"@endif @endisset>Price DESC</option>
                                        </select>
                                    </div>
                                    <div class="pad">
                                        <label class="pad2"> Select your size  
                                            <div id="sortbyborder">
                                                <div id="padsort">
                                            @foreach ($sizesdistinct  as $itemvariant)
                                                <span><input type="checkbox" name="variant[]" value="{{$itemvariant}}"/> <span style="padding:4px;">{{$itemvariant}}</span>
                                                @if(($loop->index+1)%3==0)<br>@endif
                                                @endforeach
                                                </div>
                                            </div>
                                        </label>
                                    </div>
<<<<<<< Updated upstream
                                    <div>
                                    <input type="checkbox" name="salesonly"/> Sales only 
                                    </div>
                                            
                                            
                                        
                                        <div style="float:right;">
                                            <div>
=======
                                    <div style="float:right;">
                                        <div>
>>>>>>> Stashed changes
                                            <input type="submit" class="pad">
                                        </div>
                                     </div>
                            </form>
                            <!-- fine form -->
                        @endisset
                        </div>    
                    </div>     
                    <div class="tab-content">
                    <!-- Product Grid View Starts -->
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            @foreach ($items as $item)
                            @if(!(($loop->index)%3))
                                <div class="row">
                                @endif
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image1">
                                                <a href="{{route('singleprod',[$item->macrocategory,$item->id])}}" class="img">
                                                    @if($item->imgURI == null )
                                                        <img src="{{asset('img/home-fourteen/imgnotfound.png')}}" alt="" /> </a> 
                                                    @else
                                                        <img src="{{Voyager::image($item->imgURI)}}" class="imgcart1" alt="" /> </a> 
                                                        <span class="product-hover">
                                                                <img alt="" src="{{asset($item->imgURI)}}">  
                                                        </span>
                                                    @endif
                                                </a>                                               
                                            </div>
                                            <div class="product-content">   
                                                <h2 class="product-title"> <a href="{{route('singleprod',[$item->macrocategory,$item->id])}}">{{$item->name}}</a> </h2>
                                                @if(($item->sale)>0)
                                                    <span class="price"> <b>{{number_format(($item->price)-($item->price)*($item->sale/100),2)}}€</b> <del>{{number_format($item->price,2)}}€</del> </span><span class="green-color"> {{$item->sale}}% OFF</span>
                                                @else
                                                    <span class="price"> <b>{{number_format($item->price ,2 )}}€</b> <del></del> </span>
                                                @endif
                                                <!--stellette-->                                                                                                                                                                                            <br>
                                                    <form action="{{route('wishlistadd')}}" method="post" class="formset">
                                                        @csrf
                                                        <button type="submit" value="{{$item->id}}" name="prodid" class="icon_heart buttonsizer"></button>
                                                       
                                                    </form>    
                                            </div>
                                        </div>
                                    </div>
                                    @if((($loop->index)%3)==2||$loop->last)
                                </div><!--termina row-->
                                @endif
                                @endforeach
                                {{$items->links()}} 
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>
                                    
@endsection   