
@extends('frontend/layout')

@section('content')
<!-- CONTENT AREA -->
<article class="page-body">

<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg-2">  
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
                <!--
                <ul class="theme-tabs font-2">
                    <li class="active"> <a href="#prod-tab-1"  data-toggle="tab"> men </a> </li>
                    <li class=""> <a href="#prod-tab-2"  data-toggle="tab"> women </a> </li>
                    <li class=""> <a href="#prod-tab-3"  data-toggle="tab"> accessories </a> </li>
                    <li class=""> <a href="#prod-tab-4"  data-toggle="tab"> shoes </a> </li>
                    <li class=""> <a href="#prod-tab-5"  data-toggle="tab"> bags </a> </li>
                </ul>-->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="prod-tab-1">
                        <div class="sorter-bar block-inline">
                            <div class="show-result font-2">
                                
                                Showing {{$items->count()}} to {{$items->count()}} of {{$items->count()}} total
                            </div>
                            <div class="select-option">
                                <form action="#" class="form-sorter">
                                    <label> Sort by </label>
                                    <div class="search-selectpicker selectpicker-wrapper">
                                        <select class="selectpicker"  data-width="100%"  onchange="location=this.value;">
                                            <option value="{{route("products",[$items->first()->macrocategory,$items->first()->idcat,"orderby"=>"name"])}}">Latest</option>
                                            <option value="{{route("products",[$items->first()->macrocategory,$items->first()->idcat,"orderby"=>"priceasc"])}}">Price ASC</option>
                                            <option value="{{route("products",[$items->first()->macrocategory,$items->first()->idcat,"orderby"=>"pricedesc"])}}">Price DESC</option>
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
                                
                                @foreach ($items as $items)
                                    @if(!(($loop->index)%3))
                                    <div class="row">
                                    @endif
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="{{route('singleprod',[$items->macrocategory,$items->id])}}" class="img"> 
                                                    
                                                    @if($items->imgURI == null || !file_exists($items->imgURI))
                                                        <img src="{{asset('img/common/imgnotfound.png')}}" alt="" /> </a> 
                                                    @else
                                                        <img src="{{asset($items->imgURI)}}" alt="" /> </a> 
                                                        <span class="product-hover">
                                                                <img alt="" src="{{asset($items->imgURI)}}">  
                                                        </span>
                                                    @endif

                                                </a>
                                                <ul class="color-swatch-item">
                                                    <li> <a href="#"> <img src="{{asset('img/common/product/black.png')}}" alt="" /> </a> </li>
                                                    <li> <a href="#"> <img src="{{asset('img/common/product/blue.png')}}" alt="" /> </a> </li>
                                                </ul>
                                                <div class="quick-view">
                                                    <a href="#product-preview" data-toggle="modal" class="icon_plus"> </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                
                                                    
                                                <h2 class="product-title"> <a href="{{route('singleprod',[$items->macrocategory,$items->id])}}">{{$items->name}}</a> </h2>
                                                @if(($items->sale)>0)
                                                    <span class="price"> <b>{{($items->price)-($items->price)*($items->sale/100)}}€</b> <del>{{$items->price}}€</del> </span><span class="green-color"> {{$items->sale}}% OFF</span>
                                                @else
                                                    <span class="price"> <b>{{$items->price}}€</b> <del></del> </span>
                                                @endif
                                                
                                                <!--stellette-->
                                                <div class="rating"> 
                                                @for ($i=(int)$items->rating;$i>0;$i--)
                                                    <span class="star active"></span>
                                                    <!--<span class="no star"></span>-->
                                                @endfor
                                                @if($items->rating-(int)$items->rating==0.5)
                                                    <span class="star half"></span>
                                                @endif
                                                @for ($i=(int)(5-$items->rating);$i>0;$i--)
                                                    <span class="no star"></span>
                                                    <!--<span class="no star"></span>-->
                                                @endfor
                                                @if($items->stock==0)
                                                    <span style="color:red;">Product not in stock</span>
                                                @endif                                        
                                                </div>
                                                <div class="product-links"> 
                                                    @if($items->stock>0)
                                                        <a href="#" class="add-to-cart"> <span> Add To Cart </span> <i class="icon_cart_alt"></i> </a>  
                                                    @else
                                                        <del><span> Add To Cart </span></del> 
                                                    @endif
                                                    
                                                    <a href="#" class="icon_heart_alt"></a>
                                                    <a href="#" class="icon_piechart"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if((($loop->index)%3)==2||$loop->last)
                                    </div><!--termina row-->
                                    @endif
                                    @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                                    
@endsection   