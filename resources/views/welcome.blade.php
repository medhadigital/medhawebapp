@extends('master')
@yield('webcontents')


<div class="page-content bg-white">
    <!-- Slider -->
    <div class="banner-three bg-primary" style="background-image: url(images/background/bg5.png), url(images/background/bg6.png), var(--gradient-sec);">
        <div class="container">
            <div class="banner-inner">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="banner-content text-white">
                            <h6 data-wow-delay="0.5s" data-wow-duration="3s" class="wow fadeInUp sub-title text-primary">Welcome to </h6>
                            <h1 data-wow-delay="1s" data-wow-duration="3s" class="wow fadeInUp m-b20">Medha Digital</h1>
                            <p  data-wow-delay="1.5s" data-wow-duration="3s" class="wow fadeInUp m-b30">The First Distributed Team of Developers for your projects.</p>
                            <a  data-wow-delay="2s" data-wow-duration="3s" href="/about" class="wow fadeInUp  btn btn-corner gradient btn-primary">Know More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="dz-media wow fadeIn" data-wow-delay="1s" data-wow-duration="3s">
                            <img src="images/main-slider/slider3/pic1.png" class="move-1" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section class="content-inner">
        <div class="container">
            <div class="section-head style-3 text-center mb-4">
                <h2 class="title m-t10">Our Specialization</h2>
                <div class="dlab-separator style-2 bg-primary"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="icon-bx-wraper style-5 text-center m-b30">
                        <div class="icon-bx">
                            <span class="icon-cell"><i class="flaticon-office"></i></span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b15">Strategy & Research</h4>
                            <p class="m-b20">The right strategy and planning for any bussiness is essential. Strategy is the formula by which the major marketing variables are integrated, energized and optimized. Through number of research and analyses, our experts build optimal strategies that fit for your needs.</p>
                            <a href="/services" class="btn btn-outline-primary"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="icon-bx-wraper style-5 text-center m-b30">
                        <div class="icon-bx">
                            <span class="icon-cell"><i class="flaticon-coding"></i></span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b15">Web Development</h4>
                            <p class="m-b20">Web development is an art, we understand the new era of the internet, importance of user experience & <q><strong>early bird catches the worm</strong></q>. Our experts are faster than you think, they carve high quality, fast loading and well performing websites with a seamless user experience.</p>
                            <a href="/services" class="btn btn-outline-primary"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="icon-bx-wraper style-5 text-center m-b30">
                        <div class="icon-bx">
                            <span class="icon-cell"><i class="flaticon-laptop"></i></span>
                        </div>
                        <div class="icon-content">
                            <h4 class="dlab-title m-b15">Web Solution</h4>
                            <p class="m-b20">Looking for a centralised solution for your business?. Web and mobile friendly applications for agriculture, farming, retail, finance, medical, etc?. We have a wide variety of domain skills that you are looking for</p>
                            <a href="/services" class="btn btn-outline-primary"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="content-inner bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-b30">
                    <div class="dz-media">
                        <img src="images/about/img6.png" class="move-2" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-head style-3 mb-4">
                        <h2 class="title m-t10">Why Medha</h2>
                        <div class="dlab-separator style-2 bg-primary"></div>
                    </div>
                    <p>Do you want to be part of community development? Like to support social reforming? or appreciate the local talents?</p>
                    <p>On top of everything, are you looking for a high performing world class solution with round the clock support?</p>
                    <p> It's your chance to... <q><strong class="text-capitalize">Conceive, Compete, Collaborate & Contribute!.</strong></q></p>
                    <!-- <div class="row">
                        <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="dlab-content-bx style-2 text-center">
                                <div class="icon-content">
                                    <h2 class="counter m-b0">9875</h2>
                                    <span class="title">Satisfied Clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="dlab-content-bx style-2 text-center">
                                <div class="icon-content">
                                    <h2 class="counter m-b0">7894</h2>
                                    <span class="title">Project Lunched</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="dlab-content-bx style-2 text-center">
                                <div class="icon-content">
                                    <h2 class="counter m-b0">65</h2>
                                    <span class="title">Years Completed</span>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>

    <!-- Our Fetures -->
    <section class="content-inner bg-white">
        <div class="container">
            <div class="section-head style-3 text-center">
                <h2 class="title m-t10">Our Features</h2>
                <div class="dlab-separator style-2 bg-primary"></div>
            </div>
            <div class="row align-items-center about-wraper-2">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper left m-b50 icon-up">
                                <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20">
                                    <a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-idea"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-capitalize">Idea & Analysis</h4>
                                    <p>Ideation is an integral part, it should be experiential and logical. Our expertise and focus are primarily with agriculture, social empowerment, marketing, entertainment, banking and finance, health sector, etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper left m-b50 icon-up">
                                <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20">
                                    <a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-vector"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-capitalize">Designing</h4>
                                    <p>We understand the language of an end user and design for your expectation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dz-media text-center m-b30">
                        <img src="images/about/img7.png" class="move-1" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper left m-b50 icon-up">
                                <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20">
                                    <a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-coding"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-capitalize">Development</h4>
                                    <p>We are agile with pressure free environment to deliver high quality output. TDD, DDD, BDD or FDD... we use the right tactics for the right result.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper left m-b50 icon-up">
                                <div class="icon-bx-sm radius gradient-sec shadow-primary m-b20">
                                    <a href="javascript:void(0);" class="icon-cell text-white"><i class="flaticon-rocket"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-capitalize">Testing & Launching</h4>
                                    <p>We use feature enriched test suits to ensure the quality. Solution is seamlessly available over On-Prem, Shared spaces or on Cloud according to your need and wallet.
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="content-inner bg-gray">
        <div class="container">
            <div class="section-head style-3 text-center">
                <h2 class="title m-t10">Our Portfolio</h2>
                <div class="dlab-separator style-2 bg-primary"></div>
            </div>
            <div class="site-filters style-3 clearfix center m-b40">
                <ul class="filters" data-toggle="buttons">
                <li data-filter="" class="btn active">
                        <input type="radio">
                        <a href="javascript:void(0);">All</a>
                    </li>
                    <li data-filter="web_design" class="btn">
                        <input type="radio">
                        <a href="javascript:void(0);">Web Development</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix">
                <ul id="masonry" class="row lightgallery">
                    <li class="card-container col-lg-6 web_design">
                        <div class="dlab-box dlab-overlay-box style-3 m-b30">
                        <a href="http://www.sreeraghavapuram.in" target="new"><div class="dlab-media dlab-img-overlay1">
                            A cultural body of the Brahmin community of the Perinchellur Gramam in North Kerala
                                <img src="images/projects/project-1/pic1.png" alt="">
                            </div></a>                            
                        </div>
                    </li>
                    <li class="card-container col-lg-5 web_design">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dlab-box dlab-overlay-box style-3 m-b30">
                                <a href="http://www.oushadhamitra.com" target="new">
                                    <div class="dlab-media dlab-img-overlay1">
                                    A cooperative farmers union cultivating organic and natural produce which is used in Ayurvedic and Natural therapies.
                                    <img src="images/projects/project-1/oushadhamithra.png" alt="">
                                    </div></a>                               
                                </div>
                            </div>                           
                        </div>
                    </li>
                   
                   
                </ul>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="content-inner-1 bg-gray">
        <div class="container">
            <div class="section-head style-3 text-center mb-4">
                <h2 class="title m-t10">Our Expertise</h2>
                <div class="dlab-separator style-2 bg-primary"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-carousel2 owl owl-carousel owl-none owl-theme owl-dots-primary-full">
                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                            <div class="dlab-team style-2 m-b10">
                                <div class="dlab-media">
                                    <a href="javascript:void(0);"><img src="images/team/small/pic1.jpg" alt=""></a>
                                </div>
                                <div class="dlab-content">
                                    <div class="clearfix">
                                        <h5 class="dlab-name"><a href="javascript:void(0);">Domain experts</a></h5>
                                    <!--     <span class="dlab-position">Senior Designer</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="dlab-team style-2 m-b10">
                                <div class="dlab-media">
                                    <a href="javascript:void(0);"><img src="images/team/small/pic2.jpg" alt=""></a>
                                </div>
                                <div class="dlab-content">
                                    <div class="clearfix">
                                        <h5 class="dlab-name"><a href="javascript:void(0);">Analysts</a></h5>
                                    <!--       <span class="dlab-position">Senior Designer</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="dlab-team style-2 m-b10">
                                <div class="dlab-media">
                                    <a href="javascript:void(0);"><img src="images/team/small/pic3.jpg" alt=""></a>
                                </div>
                                <div class="dlab-content">
                                    <div class="clearfix">
                                        <h5 class="dlab-name"><a href="javascript:void(0);">Solution engineers</a></h5>
                                        <!--   <span class="dlab-position">Senior Designer</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="dlab-team style-2 m-b10">
                                <div class="dlab-media">
                                    <a href="javascript:void(0);"><img src="images/team/small/pic4.jpg" alt=""></a>
                                </div>
                                <div class="dlab-content">
                                    <div class="clearfix">
                                        <h5 class="dlab-name"><a href="javascript:void(0);">Designers</a></h5>
                                    <!--     <span class="dlab-position">Senior Designer</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="content-inner"id="gettouch">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="dlab-media">
                        <img src="images/about/img8.png" class="move-1" alt="">
                    </div>
                </div>
                <div class="col-lg-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <form class="dlab-form style-1">
                        <div class="section-head style-3">
                            <h2 class="title m-t10">Get In Touch With Us</h2>
                            <div class="dlab-separator style-2 bg-primary"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Phone No.">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Project Title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <select class="form-control">
                                        <option selected>Choose Service</option>
                                        <option value="1">Web Development</option>
                                        <option value="2">Web Design</option>
                                        <option value="3">Strategy & Research</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <textarea class="form-control">Message</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-corner gradient btn-block btn-primary">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
