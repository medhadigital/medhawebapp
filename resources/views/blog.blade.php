@extends('master')
@yield('webcontents')
<div class="page-content bg-white">
        <!-- Banner  -->
        <div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(images/banner/bnr2.png), var(--gradient-sec);  background-size: cover, 200%; ">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1>Blog</h1>
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Blog Large -->
        <div class="content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 m-b30">
                        <aside class="side-bar sticky-top">
                            <div class="widget style-1">
                                <div class="search-bx style-1">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="la la-search"></i></span>
                                            </div>
                                            <input name="text" class="form-control" placeholder="Search" type="text">
                                            <span class="input-group-btn">
												<button type="submit" class="btn btn-primary gradient"><i class="la la-long-arrow-right"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget_archive style-1">
                                <h2 class="widget-title">Category</h2>
                                <ul>
                                    <li><a href="javascript:void(0);">Design<span>05</span></a></li>
                                    <li><a href="javascript:void(0);">Development<span>25</span></a></li>
                                    <li><a href="javascript:void(0);">SEO<span>20</span></a></li>
                                    <li><a href="javascript:void(0);">App Design<span>08</span></a></li>
                                    <li><a href="javascript:void(0);">Branding<span>22</span></a></li>
                                </ul>
                            </div>
                            <div class="widget recent-posts-entry style-1">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-media">
                                            <a href="blog-details-3.html"><img src="images/blog/recent-blog/pic1.jpg" alt=""></a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                            <div class="dlab-meta">
                                                <ul>
                                                    <li class="post-date"> 7 March, 2020 </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-media">
                                            <a href="blog-details-3.html"><img src="images/blog/recent-blog/pic2.jpg" alt=""></a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                            <div class="dlab-meta">
                                                <ul>
                                                    <li class="post-date"> 7 March, 2020 </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-media">
                                            <a href="blog-details-3.html"><img src="images/blog/recent-blog/pic3.jpg" alt=""></a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                            <div class="dlab-meta">
                                                <ul>
                                                    <li class="post-date"> 7 March, 2020 </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-media">
                                            <a href="blog-details-3.html"><img src="images/blog/recent-blog/pic3.jpg" alt=""></a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="title"><a href="blog-details-3.html">Fusce mollis felis quis tristique</a></h4>
                                            <div class="dlab-meta">
                                                <ul>
                                                    <li class="post-date"> 7 March, 2020 </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_archive style-1">
                                <h2 class="widget-title">Archives</h2>
                                <ul>
                                    <li><a href="javascript:void(0);">January<span>05</span></a></li>
                                    <li><a href="javascript:void(0);">Fabruary<span>25</span></a></li>
                                    <li><a href="javascript:void(0);">March<span>20</span></a></li>
                                    <li><a href="javascript:void(0);">April<span>08</span></a></li>
                                    <li><a href="javascript:void(0);">May<span>22</span></a></li>
                                    <li><a href="javascript:void(0);">Jun<span>11</span></a></li>
                                    <li><a href="javascript:void(0);">July<span>19</span></a></li>
                                </ul>
                            </div>
                            <div class="widget widget_tag_cloud style-1">
                                <h2 class="widget-title">Tags</h2>
                                <div class="tagcloud">
                                    <a href="javascript:void(0);">Business</a>
                                    <a href="javascript:void(0);">News</a>
                                    <a href="javascript:void(0);">Brand</a>
                                    <a href="javascript:void(0);">Website</a>
                                    <a href="javascript:void(0);">Internal</a>
                                    <a href="javascript:void(0);">Strategy</a>
                                    <a href="javascript:void(0);">Brand</a>
                                    <a href="javascript:void(0);">Mission</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-8 col-lg-8 m-b30">
                        <div class="dlab-blog m-b30">
                            <div class="dlab-media rounded-md shadow dlab-img-effect zoom">
                                <a href="blog-details-3.html"><img src="images/blog/default/thum1.jpg" alt=""></a>
                            </div>
                            <div class="dlab-info p-t30">
                                <div class="dlab-meta">
                                    <ul>
                                        <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                        <li class="post-author"><i class="flaticon-user m-r10"></i>By <a href="javascript:void(0);">Johne Doe</a></li>
                                        <li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i></a></li>
                                        <li class="post-share"><i class="flaticon-share"></i>
                                            <ul>
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="dlab-title">
                                    <a href="blog-details-3.html">Quisque sem tortor, convallis in arcu eu, accumsan finibus massa donec et sapien risus.</a>
                                </h4>
                                <p class="m-b20">Phasellus vestibulum velit in lacinia ultrices. Aenean vel euismod risus, ac congue lectus. In hac habitasse platea dictumst. Vivamus et felis imperdiet, commodo augue in, condimentum tellus. Quisque a velit a eros malesuada ullamcorper. </p>
                                <a href="blog-details-3.html" class="btn btn-corner gradient btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="dlab-blog m-b30">
                            <div class="dlab-media rounded-md shadow dlab-img-effect zoom">
                                <a href="blog-details-3.html"><img src="images/blog/default/thum2.jpg" alt=""></a>
                            </div>
                            <div class="dlab-info p-t30">
                                <div class="dlab-meta">
                                    <ul>
                                        <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                        <li class="post-author"><i class="flaticon-user m-r10"></i>By <a href="javascript:void(0);">Johne Doe</a></li>
                                        <li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i></a></li>
                                        <li class="post-share"><i class="flaticon-share"></i>
                                            <ul>
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="dlab-title">
                                    <a href="blog-details-3.html">Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere dolor.</a>
                                </h4>
                                <p class="m-b20">Phasellus vestibulum velit in lacinia ultrices. Aenean vel euismod risus, ac congue lectus. In hac habitasse platea dictumst. Vivamus et felis imperdiet, commodo augue in, condimentum tellus. Quisque a velit a eros malesuada ullamcorper. </p>
                                <a href="blog-details-3.html" class="btn btn-corner gradient btn-primary">Read More</a>
                            </div>
                        </div>
                        <div class="dlab-blog m-b30">
                            <div class="dlab-media rounded-md shadow dlab-img-effect zoom">
                                <a href="blog-details-3.html"><img src="images/blog/default/thum3.jpg" alt=""></a>
                            </div>
                            <div class="dlab-info p-t30">
                                <div class="dlab-meta">
                                    <ul>
                                        <li class="post-date"><i class="flaticon-clock m-r10"></i>7 March, 2020</li>
                                        <li class="post-author"><i class="flaticon-user m-r10"></i>By <a href="javascript:void(0);">Johne Doe</a></li>
                                        <li class="post-comment"><a href="javascript:void(0);"><i class="flaticon-speech-bubble"></i></a></li>
                                        <li class="post-share"><i class="flaticon-share"></i>
                                            <ul>
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="dlab-title">
                                    <a href="blog-details-3.html">Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis lectus vel euismod.</a>
                                </h4>
                                <p class="m-b20">Phasellus vestibulum velit in lacinia ultrices. Aenean vel euismod risus, ac congue lectus. In hac habitasse platea dictumst. Vivamus et felis imperdiet, commodo augue in, condimentum tellus. Quisque a velit a eros malesuada ullamcorper. </p>
                                <a href="blog-details-3.html" class="btn btn-corner gradient btn-primary">Read More</a>
                            </div>
                        </div>
                        <nav aria-label="Blog Pagination">
                            <ul class="pagination text-center p-t20">
                                <li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
                                <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
