@extends('frontend/layout')

@section('content')
<article class="page-body">

                <!--Breadcrumb Section Start-->
                <section class="breadcrumb-bg-2">                
                    <div class="container">
                        <div class="site-breadcumb">                        
                            <h1 class="title-1">checkout</h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="#"> Home </a> checkout </li>                             
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
                                <div class="chk-heading">                              
                                    <a class="section-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> checkout method</a>                              
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="chk-body block-inline">
                                        <div class="col-md-6">
                                            <form class="chk-form" >
                                                <h2 class="title-2">check as a guest or login</h2>
                                                <p>Register with us for future convenience:</p>
                                                <div class="form-group block-inline">
                                                    <label class="radio-inline title-2"> <input type="radio" name="chk" value=""> <span> checkout as guest </span>  </label>
                                                                                               
                                                </div>
                                                <h2 class="title-2"> register and save time ! </h2>
                                                <p>Register with us for future convenience:</p>
                                                <ul>
                                                    <li> <span class="arrow_carrot-right"></span> Fast and easy check out </li>
                                                    <li> <span class="arrow_carrot-right"></span> Easy access to your order history and status </li>
                                                </ul>
                                                
                                                    <button class="theme-btn btn submit-btn" type="submit"> <b> Continue </b> </button>
                                                
                                            </form>
                                        </div>

                                        <div class="col-md-6">
                                            <form class="registed-form">
                                                <h2 class="title-2"> already registed ? </h2>
                                                <div class="row justify-content-center">
                                        <div class="col-md-9">
                                            <div class="card">
                                                <div class="card-header">{{ __('Login') }}</div>

                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf

                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} </label>

                                                            <div class="col-md-9">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                            <div class="col-md-9">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"name="password" required autocomplete="current-password">

                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-md-6 offset-md-4">
                                                            
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-8 offset-md-4">
                                                                <button type="submit" class="theme-btn-1 larg-btn btn submit-btn">
                                                                    {{ __('Login') }}
                                                                </button>

                                                                @if (Route::has('password.request'))
                                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                        {{ __('Forgot Your Password?') }}
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                     </div>                                    
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
                                            <input type="text" placeholder="Adddress " class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Postcode / Zip" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Phone number" class="form-control">
                                        </div>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="heading chk">
                                    <h2 class="section-title"> shipping method <span class="icon_minus-06"></span> </h2>                              
                                </div>
                                <div class="heading chk">
                                    <h2 class="section-title"> payment  <span class="icon_minus-06"></span> </h2>                              
                                </div>
                            </div>
                            
                            

                </section>

            </article>
            @endsection