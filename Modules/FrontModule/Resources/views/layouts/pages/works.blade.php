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
    <section class="page-tittle page-tittle-contact" style="background-image: url(/front/assets/img/page_header_1.jpg);">
        <div class="overlay"></div>
        <div class="display-table">
            <div class="table-cell">
                <div class="container">
                    @if ($lang=="ar")
                    <div class="info wow bounce">
                        <h3>أعمالنا</h3>
                        <p>لا تخجل وقم بزيارة مواقعنا .</p>
                    </div>
                    @else
                    <div class="info wow bounce">
                        <h3>our works</h3>
                        <p>Don't be shy and visit our sites .</p>
                    </div>
                    @endif
                   
                </div>
            </div>
        </div>
    </section>
    <!------------------------------End page-header------------------------------->

    <!--======================= Start Works =========================-->
    <section class="works_section">
        <div class="container">
            @if ($lang == 'ar')
                <div class="main-heading">
                    <span>نحن نمتلك الافضل</span>
                    <h2>اعمالنا</h2>
                </div>
            @else
                <div class="main-heading">
                    <span>We give you the best</span>
                    <h2>WORKS</h2>
                </div>
            @endif

            <ul class="tabs">
                @if ($lang=="ar")
                <li class="" data-filter="all">الكل</li>
                <li data-filter="">تصميم الهوية</li>
                <li data-filter="">تصميم الويب</li>
                <li data-filter="">تطوير الويب</li>
                <li data-filter="">تطبيقات الموبايل</li>
                <li data-filter="">تسويق</li>
                @else
                <li class="" data-filter="all">all</li>
                <li data-filter="">identity design</li>
                <li data-filter="">web design</li>
                <li data-filter="">web development</li>
                <li data-filter="">mobile apps</li>
                <li data-filter="">markting</li>
                @endif
               
            </ul>
            <div class="row mt-50 works_content">
                @foreach ($works as $row)
                    @if ($lang == 'ar')
                        <div class="col-xl-3 col-lg-4 col-sm-6 mix">
                            <div class="category-card">
                                <div class="content-inner fl-wrap">
                                    <div class="content-front">
                                        <div class="cf-inner">
                                            <div class="bg "
                                                style="background-image:url('/front/images/works/<?php echo $row->img; ?>')">
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="inner">
                                                <div class="icon-sty">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <h4>{{ $row->ar_name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-back">
                                        <div class="cf-inner">
                                            <div class="inner">
                                                <div class="dec-icon">
                                                    <h4>{{ $row->ar_name }}</h4>
                                                </div>
                                                <a href="#" class="btn card-btn">زور</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-xl-3 col-lg-4 col-sm-6 mix">
                            <div class="category-card">
                                <div class="content-inner fl-wrap">
                                    <div class="content-front">
                                        <div class="cf-inner">
                                            <div class="bg "
                                                style="background-image:url('/front/images/works/<?php echo $row->img; ?>')">
                                            </div>
                                            <div class="overlay"></div>
                                            <div class="inner">
                                                <div class="icon-sty">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <h4>{{ $row->en_name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-back">
                                        <div class="cf-inner">
                                            <div class="inner">
                                                <div class="dec-icon">
                                                    <h4>{{ $row->en_name }}</h4>
                                                </div>
                                                <a href="#" class="btn card-btn">زور</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach
            </div>
            @if ($lang == 'ar')
            <div class="text-center mt-5">
                <a href="#" class="main-btn solid">مشاريع اكتر</a>
            </div>
        @else
            <div class="text-center mt-5">
                <a href="#" class="main-btn solid">More Projects</a>
            </div>
        @endif
        </div>
    </section>
    <!--======================= End Works =========================-->

    <!--================================= start clients ==============================-->
    <section class="clients_section">
        <div class="container">
            <div class="heading wow fadeIn">
                @if ($lang=="ar")
                <div class="main-heading">
                    <h2>عملائنا</h2>
                </div>
                @else
                <div class="main-heading">
                    <h2>Our Clients</h2>
                </div>
                @endif
            </div>
            <div class="content wow fadeInUp">
                <div class="owl-carousel owl-theme">
                    @foreach ($clients as $row)
                        <div class="item">
                            <div class="box">
                                <img src="{{ asset('front/images/Client/' . $row->img) }}" alt="client">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--================================= End clients ==============================-->


@endsection
