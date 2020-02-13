
@extends('frontend/layout')

@section('content')
<section class="breadcrumb-bg-3"  style="background-image:url({{Voyager::image('banners/contactbanner.jpg')}})">  
    <div class="site-breadcumb">                        
        <h1 class="title-1">ORDER TABLE</h1> 
            <ol class="breadcrumb breadcrumb-menubar">
                <li> <a href="{{ route('master') }}"> Home </a> ORDERS </li>                             
            </ol>
    </div>  
<h3> ORDER TABLE </h3>
<div class="container">
    <div class="row">
        <div class="col-sm-12-2 contact-box text-center">
<table style="width:100%">
<tr>
    <th>Order</th>

</tr>
@foreach ($orders as $order) 
<tr>
    <td><a href="{{$order->URL}}">Order #{{$loop->index}}</td>
    
    
</tr>
@endforeach

</table>
</div>
</div>
</div>
</section>
@endsection   