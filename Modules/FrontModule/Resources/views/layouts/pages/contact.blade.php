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
    <section class="page-tittle page-tittle-contact" style="background-image: url(/front/assets/img/page_header.jpg);">
        <div class="overlay"></div>
        <div class="display-table">
            <div class="table-cell">
                <div class="container">
                    @if ($lang=="ar")
                    <div class="info wow bounce">
                        <h3>ابقى على تواصل</h3>
                        <p>لا تخجل وتواصل معنا.</p>
                    </div>
                    @else
                    <div class="info wow bounce">
                        <h3>get in touch</h3>
                        <p>Don't be shy and contact With us .</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!------------------------------End page-header------------------------------->

    <!------------------------------start contact------------------------------->
    <section class="contact">
        <div class="container">
            <div class="row content no-gutters">
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="icon-box">
                            <div class="sc_icons_icon sc_icon_type_svg inited" style="visibility: visible;">
                                <svg version="1.1" id="sc_icons_05432732370528717" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px"
                                    viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                    <path stroke-miterlimit="10" d="M4.052,1.909l2.688-1.25l3.819,7.457L7.984,9.383
                                        c-0.509,1.19,2.04,5.943,3.115,6.022c0.085-0.056,2.524-1.255,2.524-1.255l3.885,7.494c0,0-2.611,1.279-2.695,1.32
                                        C7.381,26.357-3.241,5.71,4.052,1.909z"
                                        style="stroke-dasharray: 65, 67; stroke-dashoffset: 0;"></path>
                                    <path stroke-miterlimit="10" d="M16.034,11.163c0.212-0.706,0.151-1.492-0.228-2.189
                                        c-0.377-0.698-1.004-1.179-1.709-1.388"
                                        style="stroke-dasharray: 5, 7; stroke-dashoffset: 0;"></path>
                                    <path stroke-miterlimit="10" d="M14.982,4.615c1.466,0.437,2.766,1.433,3.55,2.883
                                        c0.784,1.452,0.907,3.084,0.471,4.548"
                                        style="stroke-dasharray: 10, 12; stroke-dashoffset: 0;"></path>
                                    <path stroke-miterlimit="10" d="M15.88,1.604c2.235,0.667,4.218,2.185,5.414,4.4
                                    c1.199,2.214,1.388,4.704,0.72,6.939"
                                        style="stroke-dasharray: 15, 17; stroke-dashoffset: 0;"></path>
                                </svg>
                            </div>
                            @if ($lang=="ar")
                            <span class="contact-box-item title">تحدث إلى قسم المبيعات</span>
                            <span class="contact-box-item blurb">هل أنت مهتم ببرنامج HubSpot؟ فقط ارفع الهاتف ل
                                الدردشة مع أحد أعضاء فريق المبيعات لدينا.</span>
                            <div class="icons_description">
                                <span><a class="custom_tel" href="tel:+18001234567">+1(800)123-4567</a></span>
                                <span><a class="custom_tel" href="tel:+18001234566">+1(800)123-4566</a></span>
                            </div>
                            @else
                            <span class="contact-box-item title">Talk to Sales</span>
                            <span class="contact-box-item blurb">Interested in HubSpot’s software? Just pick up the phone to
                                chat with a member of our sales team.</span>
                            <div class="icons_description">
                                <span><a class="custom_tel" href="tel:+18001234567">+1(800)123-4567</a></span>
                                <span><a class="custom_tel" href="tel:+18001234566">+1(800)123-4566</a></span>
                            </div>
                            @endif

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="icon-box">
                            <div class="sc_icons_icon sc_icon_type_svg inited" style="visibility: visible;">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 52 52"
                                    style="enable-background:new 0 0 52 52;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M26,0C11.663,0,0,11.663,0,26c0,4.891,1.359,9.639,3.937,13.762C2.91,43.36,1.055,50.166,1.035,50.237
                                    c-0.096,0.352,0.007,0.728,0.27,0.981c0.263,0.253,0.643,0.343,0.989,0.237L12.6,48.285C16.637,50.717,21.26,52,26,52
                                    c14.337,0,26-11.663,26-26S40.337,0,26,0z M26,50c-4.519,0-8.921-1.263-12.731-3.651c-0.161-0.101-0.346-0.152-0.531-0.152
                                    c-0.099,0-0.198,0.015-0.294,0.044l-8.999,2.77c0.661-2.413,1.849-6.729,2.538-9.13c0.08-0.278,0.035-0.578-0.122-0.821
                                    C3.335,35.173,2,30.657,2,26C2,12.767,12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" />
                                            <path d="M42.985,32.126c-1.846-1.025-3.418-2.053-4.565-2.803c-0.876-0.572-1.509-0.985-1.973-1.218
                                    c-1.297-0.647-2.28-0.19-2.654,0.188c-0.047,0.047-0.089,0.098-0.125,0.152c-1.347,2.021-3.106,3.954-3.621,4.058
                                    c-0.595-0.093-3.38-1.676-6.148-3.981c-2.826-2.355-4.604-4.61-4.865-6.146C20.847,20.51,21.5,19.336,21.5,18
                                    c0-1.377-3.212-7.126-3.793-7.707c-0.583-0.582-1.896-0.673-3.903-0.273c-0.193,0.039-0.371,0.134-0.511,0.273
                                    c-0.243,0.243-5.929,6.04-3.227,13.066c2.966,7.711,10.579,16.674,20.285,18.13c1.103,0.165,2.137,0.247,3.105,0.247
                                    c5.71,0,9.08-2.873,10.029-8.572C43.556,32.747,43.355,32.331,42.985,32.126z M30.648,39.511
                                    c-10.264-1.539-16.729-11.708-18.715-16.87c-1.97-5.12,1.663-9.685,2.575-10.717c0.742-0.126,1.523-0.179,1.849-0.128
                                    c0.681,0.947,3.039,5.402,3.143,6.204c0,0.525-0.171,1.256-2.207,3.293C17.105,21.48,17,21.734,17,22c0,5.236,11.044,12.5,13,12.5
                                    c1.701,0,3.919-2.859,5.182-4.722c0.073,0.003,0.196,0.028,0.371,0.116c0.36,0.181,0.984,0.588,1.773,1.104
                                    c1.042,0.681,2.426,1.585,4.06,2.522C40.644,37.09,38.57,40.701,30.648,39.511z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </div>
                          @if ($lang=="ar")
                          <span class="contact-box-item title">مع الواتس اب</span>
                          <span class="contact-box-item blurb">هل أنت مهتم ببرنامج HubSpot؟ فقط ارفع الهاتف ل
                            الدردشة مع أحد أعضاء فريق المبيعات لدينا.</span>
                          <div class="icons_description">
                              <a href="whatsapp://send?abid=phonenumber&text=Hello%2C%20World!"
                                  class="main-btn solid">واتس اب</a>
                          </div>
                          @else
                          <span class="contact-box-item title">with whatsapp</span>
                          <span class="contact-box-item blurb">Interested in HubSpot’s software? Just pick up the phone to
                              chat with a member of our sales team.</span>
                          <div class="icons_description">
                              <a href="whatsapp://send?abid=phonenumber&text=Hello%2C%20World!"
                                  class="main-btn solid">whatsapp</a>
                          </div>
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------End contact------------------------------->


    <!-- ==================== Start contact Modal =================== -->
    <section class="contact-modal">
        <div class="container">
            @if ($lang=="ar")
            <div class="main-heading wow fadeInUp">
                <h2>الاتصال</h2>
            </div>
            @else
            <div class="main-heading wow fadeInUp">
                <h2>contact modal</h2>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-10 gsap-reveal">
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control user" type="text" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control email" type="email" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control file" type="text" placeholder="subject" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control telephone " type="text" placeholder="phone" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="message"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <a href="#" class="animated-btn">
                                    @if ($lang=="ar")
                                    <span>ارسال</span>
                                    @else
                                    <span>send</span>
                                    @endif
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fas fa-envelope"></i></div>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End contact Modal =================== -->

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
                            <img src="{{ asset('front/assets/img/shape_d.svg') }}" alt="" class="dark">
                            <img src="{{ asset('front/assets/img/shape_l.svg') }}" alt="">
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-facebook-f"></i>
                            <img src="{{ asset('front/assets/img/shape_d.svg') }}" alt="" class="dark">
                            <img src="{{ asset('front/assets/img/shape_l.svg') }}" alt="">
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-twitter"></i>
                            <img src="{{ asset('front/assets/img/shape_d.svg') }}" alt="" class="dark">
                            <img src="{{ asset('front/assets/img/shape_l.svg') }}" alt="">
                        </a>
                        <a href="#" class="icon">
                            <i class="fab fa-instagram"></i>
                            <img src="{{ asset('front/assets/img/shape_d.svg') }}" alt="" class="dark">
                            <img src="{{ asset('front/assets/img/shape_l.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
