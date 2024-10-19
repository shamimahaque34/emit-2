<header>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-left">
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@advancemanpower.org">
                                    <font color="white">info@advancemanpower.org</font>
                                </a></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:017 666 666 71">
                                    <font color="white">017 666 666 71</font>
                                </a></li>
                            <li><i class="fab fa-whatsapp" aria-hidden="true"></i><a href="" target="_blank">
                                    <font color="white">017 666 666 71</font>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-header-area" id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
                    <div class="logo-area">
                        <a href="{{ route('home')}}">
                            <img src="{{ asset('/') }}frontend/images/logo.png" alt="logo" class="img-responsive" style="margin-top: 10px; margin-left: 10px; height:55px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pull-right">
                    <div class="main-menu" style="">
                        <nav>


                            <ul class="pull-left">

                                {{-- <li><a href="#">CURRENT JOBS <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="jobs-in-india.html">Jobs in India</a></li>
                                        <li><a href="#">Jobs In Middle East<i class="fa fa-angle-down pull-right" style="margin-top: 10px;"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="jobs-in-saudi-arabia.html">Jobs in Saudi Arabia</a></li>
                                                <li><a href="jobs-in-qatar.html">Jobs in Qatar</a></li>
                                                <li><a href="jobs-in-oman.html">Jobs in Oman</a></li>
                                                <li><a href="jobs-in-kuwait.html">Jobs in Kuwait</a></li>
                                                <li><a href="jobs-in-bahrain.html">Jobs in Bahrain</a></li>
                                                <li><a href="jobs-in-uae.html">Jobs in UAE </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Jobs In Europe<i class="fa fa-angle-down pull-right" style="margin-top: 10px;"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="jobs-in-romania.html">Jobs in Romania</a></li>
                                                <li><a href="jobs-in-germany.html">Jobs in Germany</a></li>
                                                <li><a href="jobs-in-bulgaria.html">Jobs in Bulgaria</a></li>
                                                <li><a href="jobs-in-croatia.html">Jobs in Croatia</a></li>
                                                <li><a href="jobs-in-france.html">Jobs in France</a></li>
                                                <li><a href="jobs-in-hungary.html">Jobs in Hungary</a></li>
                                                <li><a href="jobs-in-italy.html">Jobs in Italy</a></li>
                                                <li><a href="jobs-in-malta.html">Jobs in Malta</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li> --}}
                                @foreach ($menus as $menu)

                                <li><a href="#">{{ $menu->title }}<i class="fa fa-angle-down"></i></a>
                                    @if ($menu->children->isNotEmpty())
                                    <ul class="sub-menu">
                                        @foreach ($menu->children as $submenu)
                                        <li><a href="{{ url('/page/'.$submenu->url?? route('page.show', $submenu->page->slug)) }}">{{ $submenu->title }}</a>
                                            @if ($submenu->children->isNotEmpty())
                                            <ul class="sub-menu">
                                                @foreach ($submenu->children as $subsubmenu)
                                                <li><a href="{{ url('/page/'.$subsubmenu->url ?? route('page.show', $subsubmenu->page->slug)) }}">{{ $subsubmenu->title }}</a></li>
                                                @endforeach

                                            </ul>
                                            @endif

                                        </li>
                                        @endforeach


                                            </ul>
                                            @endif
                                        </li>

                                        @endforeach


                                    </ul>







                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container acurate">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <!--<li class="active"><a href="index.php">Home </a></li>-->
                                <li><a href="about.html">ABOUT US</a></li>
                                <li><a href="#">CURRENT JOB</a>
                                    <ul class="sub-menu">
                                        <li><a href="Services.html">Jobs in UAE </a></li>
                                        <li><a href="Services2.html">Jobs in Romania</a></li>
                                        <li><a href="Services2.html">Jobs in Saudi Arabia</a></li>
                                        <li><a href="Services2.html">Jobs in Qatar</a></li>
                                        <li><a href="Services2.html">Jobs in Kazakhstan</a></li>
                                        <li><a href="Services2.html">Jobs in Oman</a></li>
                                        <li><a href="Services2.html">Jobs in Kuwait</a></li>
                                        <li><a href="Services2.html">Jobs in Bahrain</a></li>
                                        <li><a href="Services2.html">Jobs in India</a></li>
                                    </ul>
                                </li>
                                <li><a href="Executive-Summary.html">OUR SERVICES</a></li>
                                <li><a href="OUR-Uniqueness.html">OUR CLIENTS</a></li>
                                <li><a href="OUR-Uniqueness.html">US EMIGRATION PROGRAM</a></li>
                                <!--<li><a href="Our-Distribution.php">Our Distribution</a></li>-->

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
