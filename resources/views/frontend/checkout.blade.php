@extends('frontend/layout')

@section('content')
<article class="page-body">

                <!--Breadcrumb Section Start-->
                <section class="breadcrumb-bg-2">                
                    <div class="container">
                        <div class="site-breadcumb">                        
                            <h1 class="title-1">checkout</h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="{{ route('master') }}"> Home </a> checkout </li>                             
                            </ol>
                        </div>  
                    </div>
                </section>
                <!--Breadcrumb Section End-->

                <section class="wrapper sec-space cart-checkout">                  
                    <div class="container">
                        <!-- Checkout Starts -->
                        <div class="panel-group chk-panel" id="accordion">
                            <div class="panel">
                                
                                <div id="collapseOne" class="panel-collapse collapse in">
                                                             
                                </div>
                            </div>
                            
                           <h3> SHIPPING DETAILS </h3>
                                <hr class="divider">
                                <div class="calculate-wrap ptb-20">
                                    <form class="calculate-form" action="{{route("checkingOut")}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="Select Country">
                                                    
                                                    @foreach ($shippingdata as $country)
                                                    <option>{{$country->name}} </option>
                                                
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name *" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="State / Country *" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Address * " class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Postcode / Zip *" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Phone number *" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="E-mail address *" class="form-control">
                                        </div>
                                        
                                        
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-12-2 contact-box text-center">
                                
                                    <p> <h3> SHIPPING METHOD </h3> DHL Express delivery: £4.50
                                         DHL Express delivery: £4.50
                                        Next day delivery is offered for express delivery orders placed before 2 pm (Mon-Fri, excluding public holidays)
                                        The delivery date is included at checkout and in the shipping confirmation email
                                        Select 'Express delivery' on the final order confirmation page after you've selected the home delivery option
                                        Please note: express orders are not delivered on weekends 
                                        Once your order is shipped, we'll send a confirmation email with the expected delivery date. This date is also displayed at the checkout.
                                        All orders from Zalando.co.uk can be delivered to an address located in the UK only. We do not offer international shipping.
                                    </p>
                            <h3>PAYMENT</h3>                              
                            
                            
                            
                              <p> <input type="radio" name="payment" class="paymentradio"></input>  Pay with PayPal | <a href="https://google.com"><img alt="" src="{{Voyager::image('home images/pp.png')}}" /> </a> </p>
                              <p> <input type="radio" name="payment" class="paymentradio"></input>  Pay with MasterCard | <a href="https://google.com"><img alt="" src="{{Voyager::image('home images/mastercard.png')}}" /> </a> </p>
                              <p> <input type="radio" name="payment" class="paymentradio"></input>  Pay with Visa | <a href="https://google.com"><img alt="" src="{{Voyager::image('home images/visa.png')}}" /> </a> </p> 
                              <br> 
                              <input class="btn small-btn btn-black" type="submit" value="submit"></input>
                            </form>
                            
                        </div>
                    </body>
  
                </div>
            </section>
        </article>
            @endsection