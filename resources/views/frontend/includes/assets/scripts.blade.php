<script async src="https://www.googletagmanager.com/gtag/js?id=G-EGG313NBQV"></script>



<script src="//cdn.pagesense.io/js/ambeinternational/67d2f802590d4904a36cccf3071fcea7.js"></script>


<script src="{{ asset('/') }}frontend/js/vendor/modernizr-2.8.3.min.js"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99670297-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-99670297-1');
</script>


<script src="{{ asset('/') }}frontend/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="{{ asset('/') }}frontend/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="{{ asset('/') }}frontend/js/owl.carousel.min.js"></script>
<!-- meanmenu js -->
<script src="{{ asset('/') }}frontend/js/jquery.meanmenu.js"></script>
<!-- jquery-ui js -->
<script src="{{ asset('/') }}frontend/js/jquery-ui.min.js"></script>
<!-- wow js -->
<script src="{{ asset('/') }}frontend/js/wow.min.js"></script>
<!-- plugins js -->
<script src="{{ asset('/') }}frontend/js/plugins.js"></script>
<!-- Nivo slider js-->
<script src="{{ asset('/') }}frontend/inc/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="{{ asset('/') }}frontend/inc/custom-slider/home.js" type="text/javascript"></script>
<!-- jquery.fancybox.pack js -->
<script src="{{ asset('/') }}frontend/inc/fancybox/jquery.fancybox.pack.js"></script>
<!-- bxslider JS -->
<script src="{{ asset('/') }}frontend/js/jquery.bxslider.min.js"></script>
<!--  Nice Select js -->
<script src="{{ asset('/') }}frontend/js/jquery.nice-select.min.js" type="text/javascript"></script>
<!-- slick JS -->
<script src="{{ asset('/') }}frontend/js/slick.min.js"></script>
<!--  jquery isotope -->
<script src="{{ asset('/') }}frontend/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}frontend/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<!-- jquery.counterup js -->
<script src="{{ asset('/') }}frontend/js/jquery.counterup.min.js"></script>
<script src="{{ asset('/') }}frontend/js/waypoints.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcvAXp35fi4q7HXm7vcG9JMtzQbMzjRe8"></script>
<script src="{{ asset('/') }}frontend/js/gmaps.js"></script>
<!-- main js -->
<script src="{{ asset('/') }}frontend/js/main.js"></script>
<!-- ion icon -->
<script nomodule="" src="http://unpkg.com/ionicons%405.0.0/dist/ionicons/ionicons.js"></script>

<script>
    jQuery("#carousel").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 20,
        /*
animateOut: 'fadeOut',
animateIn: 'fadeIn',
*/
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 2
            },

            1024: {
                items: 3
            },

            1366: {
                items: 3
            }
        }
    });
</script>
