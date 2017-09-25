<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    @extends('layouts.styles')

  </head>
  <body>

    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    @include('layouts/header')
    <!--/ HEADER-->
    <!---->
	@yield('content')
    
    <!---->
    <!---->
   @include('layouts/footer')
    <!---->
  </div>
 
 
  
   @include('layouts/scripts')
   
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    
    
  </body>
</html>