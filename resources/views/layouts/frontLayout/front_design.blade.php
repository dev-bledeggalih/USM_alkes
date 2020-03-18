<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@if(!empty($meta_title)){{ $meta_title }} @else Home | Schon @endif</title>
    @if(!empty($meta_description))<meta name="description" content="{{ $meta_description }}">@endif

    @if(!empty($meta_keywords))<meta name="keywords" content="{{ $meta_keywords }}">@endif

    <style type="text/css">
        @keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#Bk4wF0U-1584330221493{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:0px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;pointer-events:auto!important}#IedgTMc-1584330221496.open{animation : tawkMaxOpen .25s ease!important;}
    </style>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]--> 

    <!-- start link css -->

    <!-- Meta Registration -->
    <meta charset="utf-8">
    <meta name="keyword" content="Universal Star Multilink, usm, alkes mata">
    <meta name="author" content="protecsoft.com">
    <meta name="description" content="Universal Star Multilink">
    <meta name="image" content="{{ asset('alkes/images/other/universal-star-multilink.jpg') }}">

    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Universal Star Multilink - Usm-alkesmata.com">
    <meta itemprop="description" content="Universal Star Multilink">
    <meta itemprop="image" content="{{ asset('alkes/images/other/universal-star-multilink.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Universal Star Multilink - Usm-alkesmata.com">
    <meta name="twitter:description" content="Universal Star Multilink">
    <meta name="twitter:image:src" content="{{ asset('alkes/images/other/universal-star-multilink.jpg') }}">

    <!-- Twitter - Product (e-commerce) -->
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Universal Star Multilink - Usm-alkesmata.com">
    <meta name="og:description" content="Universal Star Multilink">
    <meta name="og:image" content="{{ asset('alkes/images/other/universal-star-multilink.jpg') }}">
    <meta name="og:url" content="https://www.usm-alkesmata.com/">
    <meta name="og:site_name" content="Universal Star Multilink">
    <meta name="og:locale" content="in_ID">
    <meta name="og:type" content="website">

    
    <meta name="theme-color" content="#1d9c9e">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://www.usm-alkesmata.com/">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="icon" sizes="192x192" href="{{ asset('images/fav/logo-1.png') }}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('images/fav/logo-1.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="{{ asset('images/fav/logo-1.png') }}">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Bootstrap -->
    <link href="{{ asset('alkes/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
            
    <!-- Fonts Awesome -->
    <link href="{{ asset('alkes/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- bxSlider Javascript file -->
    <link href="{{ asset('alkes/js/bxslider/jquery.bxslider.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('alkes/js/owl-carousel/assets/owl.carousel.css') }}">

    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('alkes/js/fancybox/jquery.fancybox.min.css') }}">

    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" href="{{ asset('alkes/js/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">

    <!-- Select2 -->
    <link href="{{ asset('alkes/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css') }}" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alkes/js/DataTables/datatables.min.css') }}">
            
    <!-- LWD Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('alkes/css/lwd.style.css') }}">

    <link rel="shortcut icon" type="image/ico" href="{{ asset('alkes/images/fav/logo-5.png') }}">

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('alkes/css/icon-fonts.css') }}">

    <!-- end link css -->

    <!-- start css protecsoft -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}"> -->
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css.map') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css.map') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.css.map') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.min.css.map') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icon-fonts.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic%7cMontserrat:400,700%7cOxygen:400,300,700' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"> -->


    <!-- end css protecsoft -->
    <style type="text/css">
    .contentbg{
        background-color: #ffffff;
    }
    .footerbg {
        background-color: #bae8e8;
    }


    .footerIcon {
    }

    .footerCont {
    }

    .footerLink {
        color: black;
    }

    .footerLink:hover {
        color: silver;
    }


    .imgCircle {
        position: relative;
        width: 50%;
        margin-left: 20%;
        padding-bottom: 50%;
        overflow: hidden;
        border-radius: 50%;
    }

    .imgAvatar {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .footerContent {
        padding: 1.5rem;
        text-align: center;
    }

    .centercont {
        margin-left: 25%;
        margin-right: 25%;
    }

    .footerIcon {
        width: 50px;
        margin-left: 15px;
        margin-top: 15px;
    }

    .circleFooter {
        margin-left: 25%;
        margin-right: 25%;
        height: 80px;
        width: 80px;
        background-color: #85DCBA;
        border-radius: 50%;
        margin-top: 15%;
    }

    .circle1 {
        height: 120px;
        width: 120px;
        background-color: #E83556;
        border-radius: 50%;
    }

    .circle2 {
        height: 120px;
        width: 120px;
        background-color: #61D0D4;
        border-radius: 50%;
    }

    .circle3 {
        height: 120px;
        width: 120px;
        background-color: #D1C926;
        border-radius: 50%;
    }

    a:hover {
        text-decoration: none;
    }

    .Circle {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlayCircle {
        position: absolute;
        bottom: 0;
        left: 100%;
        right: 0;
        background-color: #008CBA;
        overflow: hidden;
        width: 0;
        height: 100%;
        transition: .5s ease;
    }

    .textCircle {
        white-space: nowrap;
        color: white;
        font-size: 20px;
        position: absolute;
        overflow: hidden;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }

    }

</style>
<style>
    html {
      height: 100%;
    }
    body {
      display: flex;
      flex-direction: column;
      height: 100vh; /* Avoid the IE 10-11 `min-height` bug. */
    }
    .contentMain {
      flex: 1 0 auto; /* Prevent Chrome, Opera, and Safari from letting these items shrink to smaller than their content's default minimum size. */
    }
    .footerMain {
      flex-shrink: 0; /* Prevent Chrome, Opera, and Safari from letting these items shrink to smaller than their content's default minimum size. */
    }
    </style>


</head><!--/head-->
    
<body>
    <div class="contentMain">
        <div>
            @include('layouts.frontLayout.front_header')
            <div>
                @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
                </div>
                @endif
                @if(Session::has('flash_message_error'))
                <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
                </div>
                @endif 
            </div>
        </div>
        <div class="contentbg">
        @yield('content')    
        </div>
    </div>
    
    {{--@include('layouts.frontLayout.front_rightbar')--}}
    {{--@include('layouts.frontLayout.front_searchbar')--}}
       
        	
    @include('layouts.frontLayout.front_footer')
    <div id="backtop" style="display: block;">
        <i class="fa fa-angle-up"></i>
    </div>


    
    <!-- end script select2 -->

    <!-- start div si encrypt -->
    <div id="uStlBAt-1584334942032" class="" style="display: block !important;"><iframe id="HQ3OvGE-1584334942033" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 350px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; display: none !important; height: 120px !important;"></iframe><iframe id="Ka5t9DD-1584334942036" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; pointer-events: auto !important; height: 40px !important; min-height: 40px !important; max-height: 40px !important; width: 260px !important; min-width: 260px !important; max-width: 260px !important; border-radius: 0px !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center !important; margin: 0px !important; top: auto !important; bottom: 0px !important; right: 10px !important; left: auto !important; display: block !important;"></iframe><iframe id="SnVWxsw-1584334942036" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; display: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; top: auto !important; bottom: 25px !important; right: 1px !important; left: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important;"></iframe><iframe id="Isgz0bZ-1584334942037" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center !important; bottom: 44px !important; top: auto !important; right: 69px !important; left: auto !important; width: 142px !important; max-width: 142px !important; min-width: 142px !important; height: 86px !important; max-height: 86px !important; min-height: 86px !important; z-index: 1000002 !important; margin: 0px !important; display: none !important;"></iframe><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="TyMoeGd-1584334942032" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="DdLEF44-1584334942032" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: e-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="J9Y8kvA-1584334942032" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="Jc3yIfz-1584334942032" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: s-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="T233Sdk-1584334942032" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="Kkl0Q69-1584334942033" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: ne-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="wA8yLCN-1584334942033" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: 0px !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: sw-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><div id="Y8vJm6c-1584334942033" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999999 !important; cursor: se-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div><iframe id="fzsn1uY-1584334942191" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; height: 910px !important; display: none !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; bottom: 50px !important; top: auto !important; right: 10px !important; left: auto !important;"></iframe></div>
    <!-- end div encrypt -->
    
</body>

    <!-- start script frontend_js -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/contact.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/easyzoom.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/gmaps.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/html5shiv.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/jquery.prettyPhoto.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/jquery.scrollUp.min.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/jquery.validate.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/main.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/passtrength.js') }}" defer></script>
    <script src="{{ asset('js/frontend_js/price-range.js') }}" defer></script>
    <!-- ---------------------------------------------------------------------- -->
    <script src="{{ asset('assets/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery.main.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery2.js') }}" defer></script>
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
    <script src="{{ asset('assets/js/npm.js') }}" defer></script>
    <script src="{{ asset('assets/js/particles.js') }}" defer></script>
    <script src="{{ asset('assets.js/plugins.js') }}" defer></script>
    <!-- end script frontend_js -->
    
    <!-- start script alkes -->
    <script src="{{ asset('alkes/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('alkes/js/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('alkes/js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('alkes/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('alkes/js/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('alkes/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('alkes/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js') }}"></script>
    <script src="{{ asset('alkes/js/jquery.number.min.js') }}"></script>
    <script src="{{ asset('alkes/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('alkes/js/lwd.js') }}"></script>
    <!-- end script alkes -->
    <!-- start script embeded tawk.io -->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src="{{ asset('alkes/embeded/5b713b3fafc2c34e96e78410/default.js') }}";
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!-- end script embeded tawk.to -->

    <!-- start script select2 -->
    <script type="text/javascript">
        $(function() {
            $('.item-parallax').css({
                'background-image' : 'url(' + $('.item-parallax').data('image-src') + ')',
                'background-attachment' : 'scroll',
                'background-position' : 'top center'
            });

            // Select2
            $('.select2').select2();

            // Bootstrap datepicker
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true
            });

            // DataTables
            $('#tableData').DataTable({
                responsive: true,
                bLengthChange: false,
                ordering: false,
                bStateSave: true
            });

            // Back to top
            $(window).scroll(function() {
                if($(this).scrollTop()>100) {
                    $('#backtop').fadeIn();
                } else {
                    $('#backtop').fadeOut();
                }
            });
            
            $('#backtop').click(function(){
                $('html,body').animate({scrollTop:0},700);
                return false;
            });
        });
    </script>

</html>