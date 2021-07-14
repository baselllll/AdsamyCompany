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
                    <div class="info wow bounce">
                        <h3>our works</h3>
                        <p>Don't be shy and visit our sites .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------End page-header------------------------------->

    <!--======================= Start Works =========================-->
    <section class="works_section">
        <div class="container">
            <ul class="tabs">
                <li class="active" data-filter="all">all</li>
                <li data-filter=".catogery-1">identity design</li>
                <li data-filter=".catogery-2">web design</li>
                <li data-filter=".catogery-3">web development</li>
                <li data-filter=".catogery-4">mobile apps</li>
                <li data-filter=".catogery-5">markting</li>
            </ul>
            <div class="row mt-50 works_content">
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-3">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/01.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-4">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/02.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-2">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/03.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-1">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/04.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-5">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/01.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-2">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/02.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-5">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/03.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-3">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/04.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-1">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/01.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-2">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/02.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-4">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/03.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mix catogery-1">
                    <div class="category-card">
                        <div class="content-inner fl-wrap">
                            <div class="content-front">
                                <div class="cf-inner">
                                    <div class="bg " style="background-image:url('/front/assets/img/works/04.jpg')"></div>
                                    <div class="overlay"></div>
                                    <div class="inner">
                                        <div class="icon-sty">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <h4>Project name</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="content-back">
                                <div class="cf-inner">
                                    <div class="inner">
                                        <div class="dec-icon">
                                            <h4>Project name</h4>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                        <a href="#" class="btn card-btn">visit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="text-center mt-5">
                <a href="#" class="main-btn solid">More Projects</a>
            </div> -->
        </div>
    </section>
    <!--======================= End Works =========================-->

    <!--================================= start clients ==============================-->
    <section class="clients_section">
        <div class="container">
            <div class="heading wow fadeIn">
                <div class="main-heading">
                    <h2>Our Clients</h2>
                </div>
            </div>
            <div class="content wow fadeInUp">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="box">
                            <img src="{{ asset('front/assets/img/clients/01.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <img src="{{ asset('front/assets/img/clients/02.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <img src="{{ asset('front/assets/img/clients/03.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <img src="{{ asset('front/assets/img/clients/04.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <img src="{{ asset('front/assets/img/clients/05.png') }}" alt="client">
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <img src="{{ asset('front/assets/img/clients/04.png') }}" alt="client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================= End clients ==============================-->


@endsection
