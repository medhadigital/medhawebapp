@extends('master')
@yield('webcontents')
<div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(images/banner/bnr2.png), var(--gradient-sec);  background-size: cover, 200%; ">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1>Contact Us</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Get A Quote -->
        <div class="content-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="dlab-media">
                            <img src="images/about/img3.png" class="move-3" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        <form class="dlab-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-6">
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
                                    <div class="input-group custom-file">
                                        <input type="file" class="form-control custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Estimated Buget">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <select class="form-control">
                                            <option selected>Priority</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                        <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-corner gradient btn-primary">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

