
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
                            
                            <div class="select-option">
                                <form action="{{route("productsPost",[$items->first()->macrocategory,$items->first()->idcat])}}" method="post">
                                    @csrf
                                    <div class="form-sorter">
                                    <label> Sort by </label>
                                    <div class="search-selectpicker selectpicker-wrapper">
                                        <select class="selectpicker"  data-width="100%"  name="orderby">
                                            <option value="latest" @isset($orderby)@if($orderby=="latest")selected="selected"@endif @endisset >Latest</option>
                                            <option value="asc"    @isset($orderby)@if($orderby=="asc")selected="selected"@endif @endisset>Price ASC</option>
                                            <option value="desc"   @isset($orderby)@if($orderby=="desc")selected="selected"@endif @endisset>Price DESC</option>
                                        </select>
                                    </div>
                                </div>
                            
                                
                                <div class="form-sorter">
                                    
                                    <div class="search-selectpicker selectpicker-wrapper">
                                        
                                        <select class="selectpicker"  data-width="100%" data-toggle="tooltip" name="pagingform">
                                            <option value="9" @isset($pagingnumber)@if($pagingnumber=="9")selected="selected"@endif @endisset>9</option>
                                            <option value="6" @isset($pagingnumber)@if($pagingnumber=="6")selected="selected"@endif @endisset>6</option>
                                            <option value="3" @isset($pagingnumber)@if($pagingnumber=="2")selected="selected"@endif @endisset>3</option>
                                        </select>
                                        
                                        <label> Show </label>
                                    </div>
                                </div>
                            </div>
                            <input type="submit">
                        </form>
                        
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
                                            <div class="product-image">
                                                <a href="{{route('singleprod',[$item->macrocategory,$item->id])}}" class="img"> 
                                                    
                                                    @if($item->imgURI == null )
                                                        <img src="{{asset('img/home-fourteen/imgnotfound.png')}}" alt="" /> </a> 
                                                    @else
                                                        <img src="{{Voyager::image($item->imgURI)}}" alt="" /> </a> 
                                                        <span class="product-hover">
                                                                <img alt="" src="{{asset($item->imgURI)}}">  
                                                        </span>
                                                    @endif

                                                </a>
                                                
                                                
                                            </div>
                                            <div class="product-content">   
                                                <h2 class="product-title"> <a href="{{route('singleprod',[$item->macrocategory,$item->id])}}">{{$item->name}}</a> </h2>
                                                @if(($item->sale)>0)
                                                    <span class="price"> <b>{{($item->price)-($item->price)*($item->sale/100)}}€</b> <del>{{$item->price}}€</del> </span><span class="green-color"> {{$item->sale}}% OFF</span>
                                                @else
                                                    <span class="price"> <b>{{$item->price}}€</b> <del></del> </span>
                                                @endif
                                                <!--stellette-->
                                                <div class="rating"> 
                                                @for ($i=(int)$item->rating;$i>0;$i--)
                                                    <span class="star active"></span>
                                                    <!--<span class="no star"></span>-->
                                                @endfor
                                                @if($item->rating-(int)$item->rating==0.5)
                                                    <span class="star half"></span>
                                                @endif
                                                @for ($i=(int)(5-$item->rating);$i>0;$i--)
                                                    <span class="no star"></span>
                                                    <!--<span class="no star"></span>-->
                                                @endfor
                                                @if($item->stock==0)
                                                    <span style="color:red;">Product not in stock</span>
                                                @endif                                        
                                                </div>
                                                <div class="product-links"> 
                                                    @if($item->stock>0)
                                                        <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>  
                                                    @else
                                                        <del><span> Add To Cart </span></del> 
                                                    @endif
                                                    <br>
                                                    <form action="{{route('wishlistadd')}}" method="post" class="formset">
                                                        @csrf
                                                        <button type="submit" value="{{$item->id}}" name="prodid" class="icon_heart buttonsizer"></button>
                                                       
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if((($loop->index)%3)==2||$loop->last)
                                    </div><!--termina row-->
                                    @endif
                                    @endforeach
                                    {{ $items->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                                    
@endsection   