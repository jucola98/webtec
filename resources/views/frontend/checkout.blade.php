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
                            <div class="heading chk">
                                    <h2 class="section-title"> shipping details <span class="icon_minus-06"></span> </h2>                              
                                </div>
                                <hr class="divider">
                                <div class="calculate-wrap ptb-20">
                                    <form class="calculate-form">
                                        <div class="form-group">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select
                                                    class="selectpicker input-price" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="United Kingdom (UK)">
                                                    <option>United Kingdom (UK)</option>
                                                    <option>United State (US)</option>
                                                    <option>United Arab Emirates (UAE)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="State / Country" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Address " class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Postcode / Zip" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Phone number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="E-mail address" class="form-control">
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="heading chk">
                                    <h2 class="section-title"> shipping method <span class="icon_minus-06"></span> </h2>                              
                            </div>
                            <hr class="divider">
                            <p> DHL Express delivery: £4.50
                                Next day delivery is offered for express delivery orders placed before 2 pm (Mon-Fri, excluding public holidays)
                                The delivery date is included at checkout and in the shipping confirmation email
                                Select 'Express delivery' on the final order confirmation page after you've selected the home delivery option
                                Please note: express orders are not delivered on weekends 
                                Once your order is shipped, we'll send a confirmation email with the expected delivery date. This date is also displayed at the checkout.
                                 All orders from Zalando.co.uk can be delivered to an address located in the UK only. We do not offer international shipping.
                            </p>
                            <div class="heading chk">
                                    <h2 class="section-title"> payment  <span class="icon_minus-06"></span> </h2>                              
                            </div>
                            <hr class="divider">
                            <div class="container">
                                <div class="row">
                                    <!-- You can make it whatever width you want. I'm making it full width
                                    on <= small devices and 4/12 page width on >= medium devices -->
                                    <div class="col-xs-12 col-md-4">


                                    <!-- CREDIT CARD FORM STARTS HERE -->
                                        <div class="panel panel-default credit-card-box">
                                            <div class="panel-heading display-table" >
                                                <div class="row display-tr" >
                                                <h2 class="title-3">  payment information</h2>
                                                    <div class="display" >                            
                                                        <img class="img-responsive" src="http://i76.imgup.net/accepted_c22e0.png">
                                                    </div>
                                                </div>                    
                                            </div>
                                            <div class="panel-body">
                                            <form role="form" id="payment-form">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <h2 class="title-2">card number</h2>
                                                                <div class="input-group">
                                                                    <input 
                                                                        type="tel"
                                                                        class="form-control"
                                                                        name="cardNumber"
                                                                        placeholder="Valid Card Number"
                                                                        autocomplete="cc-number"
                                                                        required autofocus 
                                                                    />
                                                                    <span class="input-group-addon"></span>
                                                            </div>
                                                        </div>                            
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-7 col-md-7">
                                                            <div class="form-group">
                                                            <h2 class="title-2">expiration date</h2>
                                                                    <input 
                                                                        type="tel" 
                                                                        class="form-control" 
                                                                        name="cardExpiry"
                                                                        placeholder="MM / YY"
                                                                        autocomplete="cc-exp"
                                                                        required 
                                                                    />
                                                            </div>
                                                        </div>
                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                        <div class="form-group">
                                                        <h2 class="title-2">cv code</h2>
                                                                <input 
                                                                    type="tel" 
                                                                    class="form-control"
                                                                    name="cardCVC"
                                                                    placeholder="CVC"
                                                                    autocomplete="cc-csc"
                                                                    required
                                                                />
                                                        </div>
                                                    </div>
                                                </div>
                                    
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button class="theme-btn-1 larg-btn btn submit-btn" type="submit">Start Subscription</button>
                                                    </div>
                                                </div>
                                                <div class="row" style="display:none;">
                                                    <div class="col-xs-12">
                                                        <p class="payment-errors"></p>
                                                </div>
                                            </div>
                                    </form>
                                    </div>
                                    </div>            
                                    <!-- CREDIT CARD FORM ENDS HERE -->


                                </div>            
                            </div>
                        </div>
                    </body>
  
                </div>
            </section>
        </article>
            @endsection