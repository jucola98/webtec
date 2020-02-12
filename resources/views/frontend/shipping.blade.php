@extends('frontend/layout')

@section('content')
<!-- CONTENT AREA -->



           
            
                <section class="breadcrumb-bg-3"  style="background-image:url({{Voyager::image('banners/contactbanner.jpg')}})">  
                <div class="site-breadcumb">                        
                    <h1 class="title-1">SHIPPING INFO</h1> 
                        <ol class="breadcrumb breadcrumb-menubar">
                            <li> <a href="{{ route('master') }}"> Home </a> Shipping info </li>                             
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
                                    <p>Phone 01: (39) 3489567342</p>
                                    <p>Phone 02: (39) 3331009084</p>
                                </div>
                            </div>
                            <div class="col-sm-4 contact-box text-center">
                                <div class="ptb-50">
                                    <i class="icon_pin_alt"></i>
                                    <h3 class="title-1">address</h3>
                                    <p>Via Roma n 5, L'Aquila, AQ 67100.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 contact-box text-center">
                                <div class="ptb-50">
                                    <i class="icon_mail_alt"></i>
                                    <h3 class="title-1">email</h3>
                                    <p>support@commercemail.com</p>
                                    <p>cozystore@commerceamail.com</p>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>   
                </section>


                <div class="container">
                        <!-- Contact Starts -->
                    <div class="row">
                        <div class="col-sm-12-2 contact-box text-center">
                            <p>  <h3>CONSEGNA ESPRESSA</h3>
                            CozaStore offre un servizio di consegna espressa.
                            

                            La data precisa di consegna e il costo ti verranno mostrati durante la fase di conferma dell'ordine.
                            Se la zona in cui abiti non è servita dalla consegna espressa, questa modalità non ti verrà proposta al momento della conclusione dell'ordine.

                            Gli articoli partner sono esclusi dall'offerta.

                            La consegna espressa avviene dal lunedì al venerdì, esclusi i giorni festivi.

                            Se l'articolo desiderato è disponibile e l'ordine viene effettuato entro le 13:00 la consegna avverrà entro il giorno lavorativo successivo.

                            Se scegli la consegna espressa potrai pagare solo con carta di credito o PayPal.

                            Non è possibile modificare la modalità di consegna da standard a espressa. Potrai selezionare la modalità
                             "consegna espressa" solo al momento della conclusione dell'ordine e non successivamente.

                             <h3>SHIPPING METHOD</h3>
                                Il pacco verrà consegnato tramite corriere DHL entro 1-3 giorni  (dipende dal tuo CAP).
                                Il prezzo della spedizione è € 7,95. express orders are not delivered on weekends Once your order is
                                    shipped, we'll send a confirmation email with the expected delivery date. This date is also displayed
                                     at the checkout. All orders from Zalando.co.uk can be delivered to an address located in the UK only.
                                      We do not offer international shipping.

                                    
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

                        

        <!-- Contact Form Starts -->
      
        <!-- Contact Form Ends -->

        <!-- Map Starts-->
        
        <!-- / Map Ends -->
    </div>
    <!-- / About Us Ends -->
</section>




@endsection
@section("js")
<script src="assets/js/main-js.js"></script>
<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false'></script>
@endsection