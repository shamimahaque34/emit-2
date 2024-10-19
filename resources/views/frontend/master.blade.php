<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.ambeinter.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2024 04:46:36 GMT -->
<head>
<!-- Google tag (gtag.js) -->






@include('frontend.includes.assets.meta')
    <link rel="apple-touch-icon" href="fav.html">
    <!-- Place favicon.ico in the root directory -->
    <!-- favicon-->
    <!-- <link rel="shortcut icon" type="{{ asset('/') }}frontend/image/x-icon" href="{{ asset('/') }}frontend/images/fav.png"> -->
	<link rel="shortcut icon" href="favicon.ico" />
    @include('frontend.includes.assets.css')




    <style>
        .left {
            /* float: left; */
            /* text-align: right; */
            width: 50%;
            margin: 0 auto;
        }

        .right {
            float: left;
            text-align: left;
            width: 50%;
        }

        .mb15 {
            margin-bottom: 15px;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->


</head>

<body>
    <!-- Header Area Start Here -->
    @include('frontend.includes.header')
    <!-- Header Area End Here -->
    @yield('body')
    



        <!-- Subscribe Area End Here -->
        <!-- Footer top area start -->
        @include('frontend.includes.footer')
        <!-- Footer End Here -->
        <!-- all js here -->
        <!-- jquery latest version -->
        @include('frontend.includes.assets.scripts')
		<!-- <script>
  window.chatbaseConfig = {
    chatbotId: "6Fq255NmQvJtEVDljLka1",
  }
</script>
<script
  src="https://www.chatbase.co/embed.min.js"
  id="6Fq255NmQvJtEVDljLka1"
  defer>
</script> -->

</body>


<!-- Mirrored from www.ambeinter.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2024 04:47:17 GMT -->
</html>
