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
                    @if ($lang =="ar")
                    <div class="info wow bounce">
                        <h3>مدوناتنا</h3>
                        <p>قم بتنظيم واكتشاف الصورة المرئية التي تحكي قصة.</p>
                    </div>
                    @else
                    <div class="info wow bounce">
                        <h3>our Blogs</h3>
                        <p>Curate and discover visual that tells a story.</p>
                    </div>
                    @endif
                    
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
                        @foreach ($blogs as $row )
                        <div class="col-md-6">
                            <div class="item">
                                <div class="post-img">
                                    <a class="img" href="post.html">
                                        <img src="{{ asset('front/images/blogs/' . $row->img) }}" alt="">
                                    </a>
                                    <div class="tag">
                                        <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Blog</a>
                                    </div>
                                </div>
                               @if ($lang=="ar")
                               <div class="cont">
                                <h6><a href="post.html">{{ $row->ar_title }}</a></h6>
                                <p>{{ $row->ar_content }}</p>
                                <div class="info">
                                    <a href="#0"><span class="author"><img src="{{ asset('front/assets/img/man.png') }}" alt=""></span>
                                        الادمن</a>
                                    <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span>{{ $row->updated_at }}</a>
                                </div>
                            </div>
                               @else
                               <div class="cont">
                                <h6><a href="post.html">{{ $row->en_title }}</a></h6>
                                <p>{{ $row->en_content }}</p>
                                <div class="info">
                                    <a href="#0"><span class="author"><img src="{{ asset('front/images/blogs/' . $row->img) }}"  alt=""></span>
                                        الادمن</a>
                                    <a href="#0" class="right"><span class="icon"><i class="fas fa-clock"></i></span>{{ $row->updated_at }}</a>
                                </div>
                            </div>
                               @endif
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="sticky_item" class="side-bar" style="">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Recent Posts</h6>
                            </div>
                            <ul class="recent">
                                @foreach ($lastnews as $row )
                                @if ($lang=="ar")
                                <li>
                                    <div class="thum">
                                        <img src="{{ asset('front/images/blogs/' . $row->img) }}" alt="">
                                    </div>
                                    <a href="#0">{{ $row->ar_content }}.</a>
                                </li>
                                @else
                                <li>
                                    <div class="thum">
                                        <img src="{{ asset('front/images/blogs/' . $row->img) }}" alt="">
                                    </div>
                                    <a href="#0">{{ $row->en_content }}.</a>
                                </li>
                                @endif
                                    
                                @endforeach
                               
                            </ul>
                        </div>
                        <div class="widget">
                           
                            @if ($lang=="ar")
                            <div class="widget-title">
                                <h6>اللينكات المفيدة</h6>
                            </div>
                            <ul>
                                
                                <li><a href="{{ url('frontmodule/homepage')}}">الصفحة الرئيسية</a></li>
                                <li><a href="{{ url('frontmodule/about')}}">من نحن</a></li>
                                <li><a href="{{ url('frontmodule/services')}}">الخدمات</a></li>
                                <li><a href="{{ url('frontmodule/works')}}">الاعمال</a></li>
                                <li><a href="{{ url('frontmodule/blogs')}}">المقالات</a></li>
                                <li><a href="{{ url('frontmodule/team')}}">الفريق</a></li>
                                <li><a href="{{ url('frontmodule/contact')}}">تواصل معنا</a></li>
                            </ul>
                            @else
                            <div class="widget-title">
                                <h6>useful links</h6>
                            </div>
                            <ul>
                                <li><a href="{{ url('frontmodule/homepage')}}">Home</a></li>
                                <li><a href="{{ url('frontmodule/about')}}">About Us</a></li>
                                <li><a href="{{ url('frontmodule/services')}}">Services</a></li>
                                <li><a href="{{ url('frontmodule/works')}}">Works</a></li>
                                <li><a href="{{ url('frontmodule/blogs')}}">Blogs</a></li>
                                <li><a href="{{ url('frontmodule/team')}}">Team</a></li>
                                <li><a href="{{ url('frontmodule/contact')}}">Contact Us</a></li>
                            </ul>
                            @endif
                        </div>

                        <div class="widget">
                            @if ($lang=="ar")
                            <div class="widget-title">
                                <h6>الالبومات</h6>
                            </div>
                            @else
                            <div class="widget-title">
                                <h6>Gallery</h6>
                            </div>
                            @endif
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
