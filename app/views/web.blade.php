<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>MCABS HR SOLUTIONS :: {{ isset($pageTitle) ? $pageTitle : 'MCABS HR SOLUTIONS' }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="copyright" content="www.scriptsandpixels.com">


    {{HTML::style('resources/js/uni.scripts.js');}}
    {{HTML::style('resources/components/foundation-5.2.3.custom/css/foundation.css');}}
    {{HTML::style('resources/components/foundation-5.2.3.custom/css/normalize.css');}}
    {{HTML::style('resources/components/ResponsiveSlides/responsiveslides.css');}}
    <link rel="stylesheet" type="text/css" href="/resources/css/main.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    

</head>

<body>

    <div class="head-logo">
      @yield('head-logo')
    </div>    

    <div class="navibar">
      @yield('navibar')
    </div>

    <div class="content">
      @yield('content')
    </div>

    <div class="footerholder">
      @yield('footerholder')
    </div>
    

    {{HTML::script('resources/components/foundation-5.2.3.custom/js/vendor/jquery.js');}}
    {{HTML::script('resources/components/foundation-5.2.3.custom/js/foundation.min.js');}}
    {{HTML::script('resources/components/foundation-5.2.3.custom/js/foundation/foundation.topbar.js');}}
    {{HTML::script('resources/components/ResponsiveSlides/responsiveslides.min.js');}}
    

    <script type="text/javascript">
        $(document).foundation();
        $(".homeslider").responsiveSlides();

        /*Google Map*/
        function initialize() {
          var myLatlng = new google.maps.LatLng(14.577397, 121.107572);
          var mapOptions = {
            zoom: 13,
            center: myLatlng
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map
          });
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</body>
</html>
