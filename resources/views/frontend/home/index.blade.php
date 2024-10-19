@extends('frontend.master')

@section('body')

 <div class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="{{ asset('/') }}frontend/images/slideone.jpg" alt="" title="#slider-direction-1" />
                <img src="{{ asset('/') }}frontend/images/slidetwo.jpg" alt="" title="#slider-direction-2" />
                <img src="{{ asset('/') }}frontend/images/slidethree.jpg" alt="" title="#slider-direction-3" />

            </div>
            <!-- direction 2 -->
            <div id="slider-direction-1" class="slider-direction">
                <div class="slider-content t-cn s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <div class="title2"></div>
                        <div class="container">
                           <!-- <div class="col-md-3 col-xs-4 col-md-offset-2">
                                <input type="text" class="form-control" placeholder="Enter Job Title" />
                            </div>
                            <div class="col-md-3 col-xs-4">
                                <input type="text" class="form-control" placeholder="Enter City Name" />
                            </div>
                            <div class="col-md-2 col-xs-2"><a class="button btn btn-danger btn-lg" href="browse-jobs.html"> Jobseeker</a></div> -->

                            <div class="col-md-8 col-md-offset-2 text-center">
                                <div class="banner-strip">
                                    <H2>Advance Manpower Solution</H2>
									<H4>ARE YOU LOOKING FOR OVERSEAS JOBS?</H4>

                                    <H3><a href="" target="blank" class="btn btn-danger" style="width: auto">APPLY NOW</a></H3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End-->
<div class="services-are" style="padding-top:25px;background-color: #fff; clear: both">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="section-title text-center">
                    <div class="left">
                        <a href="jobseeker.html">
                            <img src="{{ asset('/') }}frontend/images/icon1.png" alt="" title="#slider-direction-2" /><br><br>
                            <h3><span>LOOKING FOR <br> JOB?</span></h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="section-title text-center">
                    <div class="left">
                        <a href="clients.html">
                            <img src="{{ asset('/') }}frontend/images/icon2.png" alt="" title="#slider-direction-2" /><br><br>
                            <h3><span>LOOKING FOR <br>EMPLOYEES?</span></h3>
                        </a>
                    </div>

                </div>
            </div>
            <div style="margin-top: 20px; clear: both" class="mb20">
                <div class="col-lg-12 text-center">
                    <h3><a href="browse-jobs.html" type="button" style="background-color:#34495e;color:white;padding:10px;font-size:18px;">For Current Job Openings click here</a><br>
                    <br><br></h3>
                </div>

            </div>


            <div style="margin-top:40px;">
                <div class="container">
                    <!-- <h1 style="color:#bd352f;text-align:center;">IT Systems</h1> -->

                    <div class="row">
                        <div class="col-md-2 col-xs-6 mb20 text-center">
                            <img src="{{ asset('/') }}frontend/images/mea.jpg" alt="" class="img-responsive" />
                            <p>Licensed by Ministry of External Affairs (MEA)</p>
                        </div>

                        <div class="col-md-2 col-xs-6 mb20 text-center">
                            <img src="{{ asset('/') }}frontend/images/ISO-2015-Certified.png" alt="" class="img-responsive" />
                            <p>ISO 9001:2015 Ceritified</p>
                        </div>

                        <div class="clearfix hidden-lg hidden-md"></div>

                       <!-- <div class="col-md-2 col-xs-6 mb20 text-center">
                            <img src="{{ asset('/') }}frontend/images/nsdc1.jpg" alt="" class="img-responsive" />
                            <p>Approved India International Skill Center (IISC) Network Member </p>
                        </div> -->
                        <div class="col-md-2 col-xs-6 mb20 text-center">
                            <img src="{{ asset('/') }}frontend/images/40-years-of-excellence-logo.jpg" alt="" class="img-responsive" />
                            <p>40+ years of Excellence</p>
                        </div>

                        <div class="clearfix hidden-lg hidden-md"></div>

                        <div class="col-md-2 col-xs-6 mb20 text-center">
                            <img src="{{ asset('/') }}frontend/images/Ranked-2nd-Best-Agency-in-India-by-MEA-in-2017.jpg" alt="" class="img-responsive" />
                            <p>Ranked 2nd Best Agency in India by MEA in 2017</p>
                        </div>
                        <div class="col-md-2 col-xs-6 mb20 text-center">
                            <img src="{{ asset('/') }}frontend/images/sambe.jpg" alt="" class="img-responsive" />
                            <p>Part of Sambe Group of Companies</p>
                        </div>



                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container" style="margin:30px auto;">
        <div class="col-lg-9 col-md-9 col-xs-12">
            <div class="section-title">
                <h2>Advance Manpower Solution:<br><span>Manpower Consultancy & Employment Agency </span></h2>
            </div>
            <div style="font-size:18px;">Advance Manpower Solution is a Manpower Consultancy which holds the first recruitment license issued in India in 1983 to any overseas recruitment company in India. Ambe has made over 3,50,000 placements in 25+ countries. Over the years we have been serving as a catalyst in bringing together career seekers and employers from across the world. We have been instrumental in placing unskilled, semi skilled, skilled and highly skilled personnel in the various sectors globally with an aim to achieve more in the future.</div>
        </div>

        <div class="col-lg-3 col-md-3 col-xs-12">
            <div class="countries-box">
                <h2>Jobs in Countries</h2>
                <ul>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-romania.html">Jobs in Romania</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-saudi-arabia.html">Jobs in Saudi Arabia</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-qatar.html">Jobs in Qatar</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-germany.html">Jobs in Germany</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-oman.html">Jobs in Oman</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-kuwait.html">Jobs in Kuwait</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-bahrain.html">Jobs in Bahrain</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-india.html">Jobs in India</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="jobs-in-uae.html">Jobs in UAE </a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Us Area Start Here -->
    <div class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-xs-12">
                    <div class="about-use-area-content">
                        <h2>WHO <span>WE ARE ?</span> </h2>
                        <p style="font-size:18px;">Advance Manpower Solution is a Manpower Consultancy which holds the first recruitment license issued in India in 1983 to any overseas recruitment company in India. Ambe is India's pioneering recruitment organisation with having placed 350,000 candidates in over 25 countries worldwide. Over the years we have been serving as a catalyst in bringing together career seekers and employers from across the world. We have been instrumental in placing unskilled, semi skilled, skilled and highly skilled personnel in the Oil & Gas, Construction, Maintenance, Trading and various other sectors globally.</p>
                        <div class="read-more">
                            <a class="button btn btn-danger btn-lg" href="about-ambe-recruitment-agency.html">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-xs-12">
                    <img src="{{ asset('/') }}frontend/images/pic-from-brochure/PYRAMID.png" class="img-responsive" alt="" />
                </div>


                <div class="clearfix mb20" style="margin-bottom: 30px"></div>

                <!-- <div class="col-lg-12 col-xs-12 text-center">
                    <div class="about-use-area-content">
                        <h2>Ambe<span>Healthcare</span> </h2>
                        <p style="font-size:18px;">Ambe International is a pioneer in providing the best service coupled with life changing opportunities for all. Having expanded our horizon to the vast and evergrowing hospitality and healthcare sector, by being the premiere and oldest licensed overseas recruitment companies actively engaged in providing the best service to all our clients.</p>
                        <p style="font-size:18px;">Our wide array of services and happy customers are enough to allow all our bee clients to trust and enroll in our services often multiple time</p>


                        <div class="read-more">
                            <a class="button btn btn-danger btn-lg" href="healthcare.html">Read More</a>
                        </div>

                        <br><br><br><br>
                    </div>
                </div> -->



                <div class="col-lg-12 col-xs-12 text-center">
                    <div class="about-use-area-content">
                        <h2>Time<span>line</span> </h2>
                        <p style="font-size:18px;">We are one of Bangladesh's leading HR solutions company with over 40 years of experience. Over the years our clients have vouched for our expertise, creativity and integrity. With an industry-acclaimed management and a team of skilled experts we deliver effective solutions in no time. We constantly push ourselves and build authentic and transparent relationships with all our clients and associates.</p> <br>

                        <img src="{{ asset('/') }}frontend/images/timeline.png" class="img-responsive" />

                    </div>
                </div>








               <!-- <div class="">
                    <div class="container">
                        <div class="row"><br>
                            <div class="col-md-12">
                                <h2 class="text-center">Recruitment Network</h2><br>
                                <a href="ambe-international-clients.html"><img src="{{ asset('/') }}frontend/images/client_map1.png" class="img-responsive" /></a>
                            </div>
                        </div>
                    </div>

                </div> -->

            </div>
        </div>
    </div>
    <!-- About Us Area End Here -->

    <!-- Recent News Section Start Here -->
    <div class="home-page-recent-news-area">
        <div class="home-page-team-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2 class="mb20">Our <span>Services</span></h2> <br>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="bulk-recruitment.html">
                                <i class="fas fa-user-friends fa-5x"></i>
                                <h3>Bulk Recruitment</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="executive-search.html">
                                <i class="fa fa-search fa-5x"></i>
                                <h3>Executive Search</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="turnkey-solutions.html">
                                <i class="fa fa-briefcase fa-5x"></i>
                                <h3>Turnkey Solutions</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="student-recruitment.html">
                                <i class="fa fa-book fa-5x"></i>
                                <h3>Student Recruitment</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="permanent-migration.html">
                                <i class="fa fa-plane fa-5x"></i>
                                <h3>Permanent Migration</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="assessment-and-testing-services.html">
                                <i class="fa fa-user-plus fa-5x"></i>
                                <h3>Assessment and Testing Services</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="payroll-and-contract-staffing-solutions.html">
                                <i class="fa fa-money-check-alt fa-5x"></i>
                                <h3>Payroll and Contract Staffing Solutions</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 text-center mb20">
                        <div class="servicesnw">
                            <a href="training.html">
                                <i class="fa fa-chalkboard-teacher fa-5x"></i>
                                <h3>Training</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Recent News Section End Here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2><span>Industries</span> We Serve</h2>
                </div>
            </div>
        </div>


        <div class="client-logo-area">
            <div class="single-logo">
                <a href="oil-and-gas.html">
                    <img src="{{ asset('/') }}frontend/images/oilandgas.jpg" alt="" class="img-respinsive">
                    <h3>Oil & Gas</h3>
                </a>
            </div>
            <div class="single-logo">
                <a href="heavy-engineering-and-construction.html">
                    <img src="{{ asset('/') }}frontend/images/svg/heavy-engeneering.svg" alt="">
                    <h3>Heavy Engineering and Construction</h3>
                </a>
            </div>
            <div class="single-logo">
                <a href="mining-and-resources.html">
                    <img src="{{ asset('/') }}frontend/images/svg/mining-industry.svg" alt="">
                    <h3>Mining & Resources</h3>
                </a>
            </div>
            <div class="single-logo">
                <a href="information-technology.html">
                    <img src="{{ asset('/') }}frontend/images/svg/information-technology.svg">
                    <h3>Information Technology</h3>
                </a>
            </div>
            <div class="single-logo">
                <a href="healthcare.html">
                    <img src="{{ asset('/') }}frontend/images/svg/healthcare.svg" alt="">
                    <h3>Healthcare</h3>
                </a>
            </div>
            <div class="single-logo">
                <a href="hospitality.html">
                    <img src="{{ asset('/') }}frontend/images/svg/hospitality.svg" alt="">
                    <h3>Hospitality</h3>
                </a>
            </div>
            <div class="single-logo">
                <a href="beauty-and-wellness.html">
                    <img src="{{ asset('/') }}frontend/images/svg/beauty.svg" alt="">
                    <h3>Beauty & Wellness</h3>
                </a>
            </div>


        </div>
    </div>




    <div class="services-area" id="servicearea">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb15">
                            <h4 style="margin-bottom: 15px;">How to Make Video Resume</h4>
                            <iframe width="230" height="130" src="https://www.youtube.com/embed/eLmkrv6ulTg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb15">
                            <h4 style="margin-bottom: 15px;">Like Our Facebook Page</h4>
                            <a href="https://www.facebook.com/AmbeRecruitment/" target="_blank" style="margin-bottom:10px;">
                                <img src="{{ asset('/') }}frontend/images/like-our-fb-page.jpg" alt="" class="img-responsive img-thumbnail" style="margin-bottom:10px;" />
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb15">
                            <h4 style="margin-bottom: 15px;">Jobs On YouTube</h4>
                            <iframe width="230" height="130" src="https://www.youtube.com/embed/lMuZVHncr0s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb15">
                            <h4 style="margin-bottom: 15px;">Last Facebook Live Session</h4>
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="5maAz0G4"></script>

                            <!-- Your embedded video player code -->
                            <div class="fb-video" data-href="https://www.facebook.com/AmbeRecruitment/videos/317861883053028/" data-show-text="false" data-width="">
                                <blockquote cite="https://developers.facebook.com/AmbeRecruitment/videos/317861883053028/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/AmbeRecruitment/videos/317861883053028/">Starting IT Recruitment from India and Europe</a>Posted by <a href="https://www.facebook.com/AmbeRecruitment/">Advance Manpower Solution</a> on Tuesday, 23 June 2020</blockquote>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb15">
                            <h4 style="margin-bottom: 15px;">Join Advance Manpower Solution Facebook Group</h4>
                            <a href="" target="_blank" style="margin-bottom:10px;">
                                <img src="{{ asset('/') }}frontend/images/fb-gp-icon.jpg" alt="" class="img-responsive img-thumbnail" style="margin-bottom:10px;" />
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb15">
                            <h4 style="margin-bottom: 15px;">Follow Us on LinkedIn</h4>
                            <a href="" target="_blank" style="margin-bottom:10px;">
                                <img src="{{ asset('/') }}frontend/images/linkedin-icon.jpg" alt="" class="img-responsive img-thumbnail" style="margin-bottom:10px;" />
                            </a>
                        </div>

                    </div>
                </div>

               <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="countries-box">
                        <h2>Blog Updates</h2>
                        <ul>
                            <li>
                                <a href="">
                                    <span><small>03 Jun, 2020</small></span>
                                    Jobs in Romania
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <span><small>03 Jun, 2020</small></span>
                                    Jobs in Romania
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <span><small>03 Jun, 2020</small></span>
                                    Jobs in Romania
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><small>03 Jun, 2020</small></span>
                                    Jobs in Romania
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><small>03 Jun, 2020</small></span>
                                    Jobs in Romania
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span><small>03 Jun, 2020</small></span>
                                    Jobs in Romania
                                </a>
                            </li>

                        </ul>
                    </div>
                </div> -->


            </div>
        </div>
    </div>



    <div class="">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-12">
                    <h2 class="text-center">Salary Survey Report</h2><br>
                    <a href="salary-survey.html"><img src="{{ asset('/') }}frontend/images/Banner-Salary-survey.jpg" class="img-responsive" /></a>
                </div>
            </div>
        </div>

    </div>
    <br>


    <!-- Client Logo Area Section End here -->

@endsection
