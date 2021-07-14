@extends('frontmodule::layouts.app')
@section('content')
    <!--======================== start search popup =============================-->
    <div class="search-popup search-popup__default">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <div class="aws-container" data-url="/themes/agrikon/?wc-ajax=aws_action"
                data-siteurl="https://ninetheme.com/themes/agrikon" data-lang="" data-show-loader="true"
                data-show-more="true" data-show-page="true" data-show-clear="true" data-mobile-screen="false"
                data-use-analytics="false" data-min-chars="1" data-buttons-order="1" data-is-mobile="false"
                data-page-id="4016" data-tax="">
                <form class="aws-search-form aws-show-clear" action="#" method="get" role="search">
                    <div class="aws-wrapper">
                        <label
                            style="position:absolute !important;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden;"
                            class="aws-search-label" for="6054afa526acc">Search</label>
                        <input type="search" name="s" id="6054afa526acc" value="" class="aws-search-field"
                            placeholder="Search" autocomplete="off">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--======================== End search popup =============================-->

    <!------------------------------Start page-header------------------------------->
    <section class="page-tittle page-tittle-contact" style="background-image: url('/front/assets/img/page_header_2.jpg');">
        <div class="overlay"></div>
        <div class="display-table">
            <div class="table-cell">
                <div class="container">
                    <div class="info wow bounce">
                        <h3>our Blogs</h3>
                        <p>Curate and discover visual that tells a story.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------End page-header------------------------------->
    <!--======================== Start Blogs Page =============================-->
    <section class="blogs_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="posts blog row mb-md50">
                        <div class="col-md-6">
                            <div class="item">
                                <div class="post-img">
                                    <a class="img" href="post.html">
                                        <img src="{{ asset('front/assets/img/blogs/01.jpg') }}" alt="">
                                    </a>
                                    <div class="tag">
                                        <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Blog</a>
                                    </div>
                                </div>
                                <div class="cont">
                                    <h6><a href="post.html">Business Strategy Consule</a></h6>
                                    <p>What separates Westy from all other web design agencies is the ability to offer the
                                        most Friendly Experience you can imagine.</p>
                                    <div class="info">
                                        <a href="#0"><span class="author"><img src="{{ asset('front/assets/img/man.png') }}" alt=""></span>
                                            Admin</a>
                                        <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span> 06
                                            Aug 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item">
                                <div class="post-img">
                                    <a href="post.html" class="img">
                                        <img src="{{ asset('front/assets/img/blogs/02.jpg') }}" alt="">
                                    </a>
                                    <div class="tag">
                                        <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Blog</a>
                                    </div>
                                </div>
                                <div class="cont">
                                    <h6><a href="post.html">48 Best WordPress Themes</a></h6>
                                    <p>What separates Westy from all other web design agencies is the ability to offer the
                                        most Friendly Experience you can imagine.</p>
                                    <div class="info">
                                        <a href="#0"><span class="author"><img src="{{ asset('front/assets/img/man.png') }}" alt=""></span>
                                            Admin</a>
                                        <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span> 06
                                            Aug 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item">
                                <div class="post-img">
                                    <a href="post.html" class="img">
                                        <img src="{{ asset('front/assets/img/blogs/03.jpg') }}" alt="">
                                    </a>
                                    <div class="tag">
                                        <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Blog</a>
                                    </div>
                                </div>
                                <div class="cont">
                                    <h6><a href="post.html">Obsession with all things</a></h6>
                                    <p>What separates Westy from all other web design agencies is the ability to offer the
                                        most Friendly Experience you can imagine.</p>
                                    <div class="info">
                                        <a href="#0"><span class="author"><img src="{{ asset('front/assets/img/man.png') }}" alt=""></span>
                                            Admin</a>
                                        <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span> 06
                                            Aug 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item">
                                <div class="post-img">
                                    <a href="post.html" class="img">
                                        <img src="{{ asset('front/assets/img/blogs/01.jpg') }}" alt="">
                                    </a>
                                    <div class="tag">
                                        <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Blog</a>
                                    </div>
                                </div>
                                <div class="cont">
                                    <h6><a href="post.html">Business Strategy Consule</a></h6>
                                    <p>What separates Westy from all other web design agencies is the ability to offer the
                                        most Friendly Experience you can imagine.</p>
                                    <div class="info">
                                        <a href="#0"><span class="author"><img src="{{ asset('front/assets/img/man.png') }}" alt=""></span>
                                            Admin</a>
                                        <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span> 06
                                            Aug 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item">
                                <div class="post-img">
                                    <a href="post.html" class="img">
                                        <img src="{{ asset('front/assets/img/blogs/02.jpg') }}" alt="">
                                    </a>
                                    <div class="tag">
                                        <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Blog</a>
                                    </div>
                                </div>
                                <div class="cont">
                                    <h6><a href="post.html">Obsession with all things</a></h6>
                                    <p>What separates Westy from all other web design agencies is the ability to offer the
                                        most Friendly Experience you can imagine.</p>
                                    <div class="info">
                                        <a href="#0"><span class="author"><img src="{{ asset('front/assets/img/man.png') }}" alt=""></span>
                                            Admin</a>
                                        <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span> 06
                                            Aug 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="post-img">
                                    <a href="post.html" class="img">
                                        <img src="{{ asset('front/assets/img/blogs/03.jpg') }}" alt="">
                                    </a>
                                    <div class="tag">
                                        <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Blog</a>
                                    </div>
                                </div>
                                <div class="cont">
                                    <h6><a href="post.html">Obsession with all things</a></h6>
                                    <p>What separates Westy from all other web design agencies is the ability to offer the
                                        most Friendly Experience you can imagine.</p>
                                    <div class="info">
                                        <a href="#0"><span class="author"><img src="{{ asset('front/assets/img/man.png') }}" alt=""></span>
                                            Admin</a>
                                        <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span> 06
                                            Aug 2017</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pagination col-lg-12 mt-20">
                            <ul>
                                <li>
                                    <a href="#0"><i class="fas fa-angle-double-left"></i></a>
                                </li>
                                <li class="active">
                                    <a href="#0">1</a>
                                </li>
                                <li>
                                    <a href="#0">2</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="sticky_item" class="side-bar" style="">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Recent Posts</h6>
                            </div>
                            <ul class="recent">
                                <li>
                                    <div class="thum">
                                        <img src="{{ asset('front/assets/img/blogs/01.jpg') }}" alt="">
                                    </div>
                                    <a href="#0">Top WordPress Themes and Plugins for Hotels.</a>
                                </li>
                                <li>
                                    <div class="thum">
                                        <img src="{{ asset('front/assets/img/blogs/02.jpg') }}" alt="">
                                    </div>
                                    <a href="#0">Master These Awesome New Skills in March.</a>
                                </li>
                                <li>
                                    <div class="thum">
                                        <img src="{{ asset('front/assets/img/blogs/03.jpg') }}" alt="">
                                    </div>
                                    <a href="#0">Best Design Items to Appeal to the Millennial.</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>Archives</h6>
                            </div>
                            <ul>
                                <li><a href="#0">January 2018</a></li>
                                <li><a href="#0">February 2018</a></li>
                                <li><a href="#0">March 2018</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>useful links</h6>
                            </div>
                            <ul>
                                <li><a href="#0"><i class="fas fa-angle-right"></i>Home</a></li>
                                <li><a href="#0"><i class="fas fa-angle-right"></i>About</a></li>
                                <li><a href="#0"><i class="fas fa-angle-right"></i>services</a></li>
                                <li><a href="#0"><i class="fas fa-angle-right"></i>works</a></li>
                                <li><a href="#0"><i class="fas fa-angle-right"></i>team</a></li>
                                <li><a href="#0"><i class="fas fa-angle-right"></i>contact</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            <ul class="gallery" style="position: relative; height: 0px;">
                                <li>
                                    <a class="venobox vbox-item" data-gall="venue-gallery" href="{{ asset('front/assets/img/blogs/01.jpg') }}">
                                        <img src="{{ asset('front/assets/img/blogs/01.jpg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="venobox vbox-item" data-gall="venue-gallery" href="{{ asset('front/assets/img/blogs/02.jpg') }}">
                                        <img src="{{ asset('front/assets/img/blogs/02.jpg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="venobox vbox-item" data-gall="venue-gallery" href="{{ asset('front/assets/img/blogs/03.jpg') }}">
                                        <img src="{{ asset('front/assets/img/blogs/03.jpg') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================== End Blogs Page =============================-->


@endsection
