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

    <!--======================== start about header =============================-->
    <section class="about_header"></section>
    <!--======================== End about header =============================-->

    <!--======================== start about info =============================-->
    <section class="about_info">
        <div class="container">
            <div class="main-heading">
                <h2>About Us</h2>
                <p>A welcome word that delights <br> the customer when he reads about us</p>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="image">
                        <img src="assets/img/about/01.png" alt="img" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="info">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="shape"><img src="assets/img/about/shape.png" alt=""></div>
        </div>
    </section>
    <!--======================== End about info =============================-->

    <!--======================== start about background =============================-->
    <section class="about_background">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 box">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="info">
                                <p>Leadership in creating and developing creative software ideas at the level of the Arab
                                    region and the world at large, We strive to provide high-quality professional technical
                                    software services at competitive prices, exceeding
                                    customer expectations, and since its </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 box">
                        <div class="item">
                            <div class="icon">
                                <i class="fal fa-bullseye-arrow"></i>
                            </div>
                            <div class="info">
                                <p>The formation of an entity that pushes the development of the software industry in the
                                    region according to the latest scientific methods, and the consolidation of innovation
                                    thinking in this industry based on cadres with
                                    many years of experience in the software market, in addition to </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================== End about background =============================-->

    <!--======================== start about gallary =============================-->
    <section class="about_gallary">
        <div class="container">
            <div class="heading">
                <h4>We are glad to see you again</h4>
            </div>
            <!--=========================== start thumb ============================-->
            <div class="thumb">
                <div id="big_image" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('front/assets/img/thumb/01.jpg') }}" alt=".." />
                    </div>
                    <div class="item">
                        <img src="{{ asset('front/assets/img/thumb/02.jpg') }}" alt=".." />
                    </div>
                    <div class="item">
                        <img src="{{ asset('front/assets/img/thumb/03.jpg') }}" alt=".." />
                    </div>
                </div>
                <div id="thumbs_gallary" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('front/assets/img/thumb/01.jpg') }}" alt=".." />
                    </div>
                    <div class="item">
                        <img src="{{ asset('front/assets/img/thumb/02.jpg') }}" alt=".." />
                    </div>
                    <div class="item">
                        <img src="{{ asset('front/assets/img/thumb/03.jpg') }}" alt=".." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================== End about gallary =============================-->

    <!--======================= Start ceo_bg =========================-->
    <section class="ceo_bg">
        <div class="row no-gutters ">
            <div class="col-lg-6 ">
                <div class="info ">
                    <div class="content">
                        <h5 class="sp_title">CEO Speech</h5>
                        <p>We are a company that always seeks the convenience of the customer, implement the required and
                            meet his desire with accuracy and professionalism, as we have a very strong and perfect team in
                            work and discipline We are a company
                            that always seeks the convenience of the customer, implement the required and meet his desire
                            with accuracy and professionalism, as we have a very strong and perfect team in work and
                            discipline.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="play">
                    <a class="venobox play-btn" data-autoplay="true" data-vbtype="video"
                        href="https://www.youtube.com/watch?v=sx63yKbuUcw&list=PL6NWULUUaNz7L22uxAYv1Lu5J8r0mdTTw"></a>
                </div>
            </div>
        </div>
    </section>
    <!--======================= End ceo_bg =========================-->

    <!--======================= Start map site =========================-->
    <section class="map_site_section">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="map">
                        <iframe width="100%" height="100%" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9%20%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sochial">
                        <a href="#" class="icon">
                            <i class="fab fa-linkedin-in"></i>
                            <img src="assets/img/shape_d.svg" alt="" class="dark">
                            <img src="assets/img/shape_l.svg" alt="">
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-facebook-f"></i>
                            <img src="assets/img/shape_d.svg" alt="" class="dark">
                            <img src="assets/img/shape_l.svg" alt="">
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                            <img src="assets/img/shape_d.svg" alt="" class="dark">
                            <img src="assets/img/shape_l.svg" alt="">
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                            <img src="assets/img/shape_d.svg" alt="" class="dark">
                            <img src="assets/img/shape_l.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
