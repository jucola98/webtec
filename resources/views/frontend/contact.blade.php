@extends('frontend/layout')

@section('content')
<!-- CONTENT AREA -->



           
            
                
                <section class="breadcrumb-bg-2">                
                    
                        <div class="site-breadcumb">                        
                            <h1 class="title-1">shopping cart</h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="#"> Home </a> Shopping Cart </li>                             
                            </ol>
                        </div>  
                    
                
                <div class="newsletter">
                    <!-- About Us Starts -->
                    <div class="container">
                        <!-- Contact Starts -->
                        <div class="row">
                            <div class="col-sm-4 contact-box text-center">
                                <div class="ptb-50">
                                    <i class="icon_mobile"></i>
                                    <h3 class="title-1">Phone</h3>
                                    <p>Phone 01: (0091) 8547 632521</p>
                                    <p>Phone 02: (084) 965 4788</p>
                                </div>
                            </div>
                            <div class="col-sm-4 contact-box text-center">
                                <div class="ptb-50">
                                    <i class="icon_pin_alt"></i>
                                    <h3 class="title-1">address</h3>
                                    <p>5th Floor, AH Building, 756 New Design St Melbourne, Australia.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 contact-box text-center">
                                <div class="ptb-50">
                                    <i class="icon_mail_alt"></i>
                                    <h3 class="title-1">email</h3>
                                    <p>support@yourdomain.com</p>
                                    <p>hello@yourdomain.com</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        

        <!-- Contact Form Starts -->
        <div class="contact-form-wrap text-center ptb-70 row">                       
            <form class="contact-form col-md-8 col-md-offset-2">
                <h2 class="section-title pb-20">  <span> If you got any questions </span> <span> please do not hesitate to send us a message. </span> </h2>
                <div class="form-group col-sm-12 form-alert"></div>
                <div class="">
                    <div class="form-group col-sm-12">
                        <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_name" name="cf_name" placeholder="Your Name" class="form-control name input-your-name" data-original-title="Name is required">
                    </div>
                    <div class="form-group col-sm-12">
                        <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_email" name="cf_email" placeholder="Your Email" class="form-control email input-email" data-original-title="Email is required">
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" id="cf_website" name="cf_website" placeholder="Subject" class="form-control website input-website">
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea title="" data-placement="top" data-toggle="tooltip" id="cf_message" name="cf_message" placeholder="Message" cols="10" rows="3" class="form-control message input-message" data-original-title="Message is required"></textarea>
                    </div>
                    <div class="form-group col-sm-12">
                        <button class="btn-black btn submit-btn" type="submit"> <b> Send Message </b> </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Contact Form Ends -->

        <!-- Map Starts-->
        <div class="">
            <div class="google-map">
                <div id="map-canvas2">
                <div style="width: 1520px;position: relative;"><div style="width: 1520px;position: relative;"><iframe width="1520" height="600" src="https://maps.google.com/maps?width=1520&amp;height=500&amp;hl=en&amp;q=Via%20Roma%204%20%2C%20L%5C'Aquila+(logancee)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/da/">Googlemapsgenerator.com/da/</a> & <a href="https://www.buyinstagramfollowersreviews.net/">boosting instagram account</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
                </div>
            </div>
        </div>
        <!-- / Map Ends -->
    </div>
    <!-- / About Us Ends -->
</section>




@endsection
@section("js")
<script src="assets/js/main-js.js"></script>
<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false'></script>
@endsection