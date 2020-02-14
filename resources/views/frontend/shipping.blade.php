@extends('frontend/layout')

@section('content')
<!-- CONTENT AREA -->



           
            
            <section class="breadcrumb-bg-3"  style="background-image:url({{Voyager::image('banners/contactbanner.jpg')}})">  
                <div class="site-breadcumb">                        
                    <h1 class="title-1">SHIPPING INFO</h1> 
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="{{ route('master') }}"> Home </a> Shipping info </li>                             
                        </ol>
                <div class="newsletter">
                    <!-- About Us Starts -->
                        <div class="container">
                        <!-- Contact Starts -->
                            <div class="row">
                                <div class="col-sm-4 contact-box text-center">
                                    <div class="ptb-50">
                                    <i class="icon_mobile"></i>
                                    <h3 class="title-1">Phone</h3>
                                    @foreach($shops as $shopinfo)
                                    <p>{{$shopinfo->phone_number}}</p>
                                    @endforeach
                                    
                                    </div>
                                </div>
                            <div class="col-sm-4 contact-box text-center">
                                <div class="ptb-50">
                                    <i class="icon_pin_alt"></i> 
                                    <h3 class="title-1">address</h3>
                                    @foreach($shops as $shopinfo)
                                    <p>{{$shopinfo->adress}}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-4 contact-box text-center">
                                <div class="ptb-50">
                                    <i class="icon_mail_alt"></i>
                                    <h3 class="title-1">email</h3>
                                    @foreach($shops as $shopinfo)
                                    <p>{{$shopinfo->email}}</p>
                                    @endforeach   
                                </div>
                            </div>
                        </div>
                    </div>
            </section>


                <div class="container">
                        <!-- Contact Starts -->
                    <div class="row">
                        <div class="col-sm-12-2 contact-box text-center">
                            <p>  <h3>EXPRESS DELIVERY</h3>
                            Which courier do you use?
                            For Italy deliveries, we use a combination of Royal Mail, Hermes and DPD. A signature may be required.
                            For International deliveries we use DPD and Royal Mail for standard and DHL for express. A signature will be required on most deliveries.
                            What happens if I miss my delivery?
                            Our carrier delivers between 9am and 10pm, which may vary depending on the service selected and a signature is required.
                            There are a number of options available if you think you won't be in to sign for your order. We'll pass your e-mail address and
                             mobile number (if provided) to Hermes or DPD and they'll provide you with information about your delivery by e-mail or text 
                             message the evening before.
                            Please note deliveries outside of the UK can take anything up to 10 days. Follow your order using the tracking link in your 
                            despatch email to check if any delivery attempt has been made.
                            Can I track my delivery?
                            Most orders are sent on a tracked service, so we’ll send you a tracking link by email along with other information about your order
                             if available.
                            Do I pay customs or import charges?
                            Footpatrol will pay all customs/duty orders delivered to the USA & Australia.
                            Our products are sold on a DDU (Delivery Duty Unpaid) basis excluding orders to the USA and Australia. Additional taxes, fees 
                            or levies may apply according to local legislation.
                            Recipients of deliveries made outside of the European Union may have to pay import duty or formal customs entry. If this is the case, the delivery may be delayed. Footpatrol cannot 
                            offer any assistance in these processes.
                            To help make sure that customs duties are not payable for deliveries outside the EU, check the custom duty threshold of the 
                            country you're sending your items to, before you order, and keep your total basket value below that threshold.
                            Can I change or add items to my order?
                            Unfortunately not. Once an order has been placed we cannot amend anything. If you realise an error has been made immediately after ordering, we would suggest tweeting us (@FootpatrolHelp) or asking via LiveChat if the order can be cancelled and refunded. You can then place the order again.
                            Can I change my address after ordering?
                            If you notice you have made a mistake in entering your house number or street name, please contact our customer care team via Twitter (@FootpatrolHelp)  or Live Chat as soon as you can after the order has been made as we will always try and accomodate 
                            address updates. Sometimes this is not possible if too much time has elapsed between the order and the notification. Please note we cannot change PayPal addresses so please check these before ordering.
                            Is the site secure?
                            footpatrol.co.uk are committed to safeguarding your security and privacy. Your personal details and credit card details are treated as highly confidential and we endeavour at all times to respect your privacy.
                            When you input your credit card details on to the web site, the information is protected by the use of Secure Socket Layer (SSL) technology. This encrypts your details and ensures that the information you submit can not be read in the unlikely event it is intercepted.
                            Any information that we request from you to process your order, register to the site or enter for the competition will not be passed on to parties outside footpatrol.co.uk.
                             <h3>SHIPPING METHOD</h3>
                             Click and collect and IT Standard Saver Delivery to the UK is usually within 5 working days of your order being placed.
                            Delivery to International destinations is estimated to take up to 10 working days from your parcel being sent. You can check if we deliver to your destination in the shipping country select menu on the 'Review Basket' page.
                            </p>
                            
                            
                        <h3> SHIPPING TABLE </h3>
                        <table style="width:100%">
                        <tr>
                            <th>COUNTRY</th>
                            <th>PRICE</th> 
                            <th>DELIVERY TIME</th>
                        </tr>
                        @foreach ($shippingdata as $country) 
                        <tr>
                            <td>{{$country -> name}}</td>
                            <td>{{number_format ($country -> price ,2 )}}</td>
                            <td>{{$country -> time}}</td>
                        </tr>
                        @endforeach
                        
                        </table>
                        <br><a href="{{ route ('contact') }}">CONTACT US FOR ANY QUESTION</a>
                    </div>
                </div>  
            </div>
        




@endsection
@section("js")
<script src="assets/js/main-js.js"></script>
<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false'></script>
@endsection