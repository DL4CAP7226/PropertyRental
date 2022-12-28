<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Property - @yield('title') </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Style CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/style.css">
      <!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
      <!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
      <!--<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">-->
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="public/frontend/images/logo.jpg">
<link rel="icon" type="image/png" sizes="32x32" href="public/frontend/images/logo.jpg">
<link rel="icon" type="image/png" sizes="16x16" href="public/frontend/images/logo.jpg">
<link rel="manifest" href="public/frontend/images/logo.jpg">

   </head>
   <body class="cms-index-index index-opt-1">
      <div class="wrapper">
         
      <!--top navigation start here-->
      @include('website/layout/top_navigation') 
      <!--top navigation end here-->  
     
          @yield('body')
     
      <!-- FOOTER -->
      @include('website/layout/footer')
      <!-- end FOOTER -->        
      <!--back-to-top  -->
      <a href="#" class="back-to-top">
      <i aria-hidden="true" class="fa fa-angle-up"></i>
      </a>
      </div>
      <!-- jQuery -->    
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.min.js"></script>
      <!-- sticky -->
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.sticky.js"></script>
      <!-- OWL CAROUSEL Slider -->    
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/owl.carousel.min.js"></script>
      <!-- Boostrap --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>
      <!-- Countdown --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.countdown.min.js"></script>
      <!--jquery Bxslider  -->
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.bxslider.min.js"></script>
      <!-- actual --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.actual.min.js"></script>
      <!-- Chosen jquery-->    
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/chosen.jquery.min.js"></script>
      <!-- parallax jquery--> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.parallax-1.1.3.js"></script>
      <!-- elevatezoom --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.elevateZoom.min.js"></script>
      <!-- fancybox -->
      <script src="{{asset('public/frontend')}}/js/jquery.fancybox.pack.js"></script>
      <script src="{{asset('public/frontend')}}/js/jquery.fancybox-media.js"></script>
      <script src="{{asset('public/frontend')}}/js/jquery.fancybox-thumbs.js"></script>
      <!-- arcticmodal -->
      <script src="{{asset('public/frontend')}}/js/jquery.arcticmodal.js"></script>
      <!-- Main -->  
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/main.js"></script>
       
      <!-- Notify.min.js for notification -->
      <script src="https://www.gazingtechnosoft.com/erp/public/template/dist/js/notify.min.js"></script>
      <!-- sweetalert.min.js for notification -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script>
          $.notify.defaults({globalPosition: 'top center'})
      </script>
       
       <script>
          $(document).on('click','.postProperty',function(){
              swal("", "Register as a vendor to post your property or Login" , "success");
              setTimeout(function(){
                  location.href="{{route('customer_signup')}}";
              },5000);
          });
       </script>
       
        @stack('scripts')
       
   </body>
</html>