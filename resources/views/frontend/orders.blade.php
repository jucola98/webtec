
@extends('frontend/layout')

@section('content')
<section class="breadcrumb-bg-3"  id="bg00" >  
    <div class="site-breadcumb">
        @isset($orders)                        
        <h1 class="title-1">ORDER TABLE</h1> 
            <ol class="breadcrumb breadcrumb-menubar">
                <li> <a href="{{ route('master') }}"> Home </a> Orders </li>                             
            </ol>
    </div>
    

<div class="container" id="cont">
    <div class="row">
        <div class="col-sm-12-2 contact-box text-center">
<table style="width:100%">
<tr>
    <th>through this link you can access all the shipping information</th>

</tr>
@foreach ($orders as $order) 
<tr>
    <td><a href="{{$order->URL}}">Order #{{$loop->index+1}}</td>
    
    
</tr>
@endforeach

</table>
</div>
</div>
</div>
@endisset
@empty($orders)
<th>You have no orders</th>
@endempty
</section>
@endsection   