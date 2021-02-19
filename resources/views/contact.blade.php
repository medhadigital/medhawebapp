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
        <div class="content-inner" id="messages" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="dlab-media">
                            <img src="images/about/img3.png" class="move-3" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <form class="dlab-form style-1" name="contact-form" method="post">
                            @csrf
                            <div class="section-head style-3">
                                <h2 class="title m-t10">Contact Us</h2>
                                <div class="dlab-separator style-2 bg-primary"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Full Name*" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="{{ old('lname') }}">
                                    </div>
                                </div> -->
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email Address*" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Phone Number*" name="phone" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Project Title" name="project" value="{{ old('project') }}">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <select class="form-control" name="service">
                                            <option selected>Choose Service</option>
                                            <option value="Web Development" {{old('service') == 'Web Development' ? 'selected' : '' }}  >Web Development</option>
                                            <option value="Web Design" {{old('service') == 'Web Design' ? 'selected' : '' }}>Web Design</option>
                                            <option value="Strategy & Research" {{old('service') == 'Strategy & Research' ? 'selected' : '' }}>Strategy & Research</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <textarea name="message"  class="form-control" placeholder="Your Message...*">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-12">
                                    <div class="input-group custom-file">
                                        <input type="file" class="form-control custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div> -->
                                <!-- <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Estimated Buget" name="estimate" value="{{ old('estimate') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <select class="form-control" name="priority">
                                            <option selected>Priority</option>
                                            <option value="1" {{old('priority') == '1' ? 'selected' : '' }} >One</option>
                                            <option value="2" {{old('priority') == '2' ? 'selected' : '' }} >Two</option>
                                            <option value="3" {{old('priority') == '3' ? 'selected' : '' }} >Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Country" name="country" value="{{ old('country') }}">
                                    </div>
                                </div> -->
                                <!-- <div class="col-sm-12">
                                    <div class="input-group">
                                        <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                        <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    </div>
                                </div> -->
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

