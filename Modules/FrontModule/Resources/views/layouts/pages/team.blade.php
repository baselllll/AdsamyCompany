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

    <!--======================== Start hero__video =============================-->

    <section class=" hero__video" style="background-image:url(assets/img/team_bg.jpg);">
        <div class="fullscreen-video-wrap">
            <video autoplay="" muted="" loop="" src="{{ asset('front/assets/videos/video.mp4') }}"></video>
            <div class="wrapper main-content">
                <h1 class="white">Transforming the Way Companies Market, Sell, &amp; Service Their Customers</h1>
            </div>
            <div class="hero__video-overlay" style="background-color:rgba(7, 55, 99,0.64)"></div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 116.91" class="hero-curve" preserveAspectRatio="none">
            <path fill="#fff" fill-rule="evenodd"
                d="M0 115.91c158.5 0 117.37-78.52 473.1-26.18C765.4 122.55 943 8.08 1067.2.69c156-9.28 188.5 75.15 372.8 75.22v41H0a6.68 6.68 0 0 1 0-1z">
            </path>
        </svg>
    </section>
    <!--======================== End hero__video =============================-->

    <!--======================= Start our team =========================-->
    <section class="our_team_section">
        <div class="container">
            <div class="main-heading mb-5">
                <span>We give you the best</span>
                <h2>our team</h2>
            </div>
            <div class="works_section">
                <ul class="tabs">
                    <li class="active" data-filter="all">all</li>
                    <li data-filter=".catogery-1">identity design</li>
                    <li data-filter=".catogery-2">web design</li>
                    <li data-filter=".catogery-3">web development</li>
                    <li data-filter=".catogery-4">mobile apps</li>
                    <li data-filter=".catogery-5">markting</li>
                </ul>
            </div>
            <div class="row team_content">
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-2">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/01.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">منير محمد</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-3">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/02.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">مبرمج</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-1">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/01.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">مصمم</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-2">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/02.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">منير محمد</a>
                                </h2>
                                <div class="team-department">المدير</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-3">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/01.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">منير محمد</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-4">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/02.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">مبرمج</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-5">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/01.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">مصمم</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-4">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/02.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">منير محمد</a>
                                </h2>
                                <div class="team-department">المدير</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-1">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/01.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">منير محمد</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-4">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/02.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">مبرمج</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-3">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/01.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">مصمم</a>
                                </h2>
                                <div class="team-department">مدير مبيعات</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix catogery-5">
                    <div class="item">
                        <div class="team-item_content">
                            <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                <img src="{{ asset('front/assets/img/team/02.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="team-item_info">
                                <div class="team-info_icons">
                                    <span class="team-icon fa fa-share-alt"></span>
                                    <a href="#" class="team-icon instagram" tabindex="0"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="#" class="team-icon twitter" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="team-icon facebook" tabindex="0"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="team-icon linkedin" tabindex="0"><i class="fab fa-linkedin"></i></a>
                                </div>
                                <h2 class="team-title">
                                    <a href="#">منير محمد</a>
                                </h2>
                                <div class="team-department">المدير</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================= End our team =========================-->
    <section class="history_company">
        <div class="container">
            <div class="main-heading mb-5">
                <h2>The History of Ad Samy</h2>
                <p>Let’s walk down memory lane to see how Bluleadz grew out of its roots from PPC and <br> SEO to becoming
                    the world’s first inbound agency.</p>
            </div>
            <div class="two-col-timeline">
                <div class="two-col-timeline__row">
                    <div class="two-col-timeline__col-text ">
                        <div class="two-col-timeline__col-text-inner slide-in">
                            <div class="two-col-timeline__text-wrapper">
                                <h4 class="two-col-timeline__col-title">
                                    2009
                                </h4>
                                <p class="two-col-timeline__col-supporting-text">
                                    The small but mighty team of four BZ employees learns and adopts inbound marketing while
                                    watching HubSpot TV. 🎓 Awesomeness ensues.
                                </p>
                            </div>
                            <div style="color:#F18A21; opacity:.10;" class="two-col-timeline__row-number"> 2009</div>
                        </div>
                        <div class="two-col-timeline__dash"></div>
                    </div>

                    <div class="two-col-timeline__line"></div>
                    <div></div>
                </div>

                <div class="two-col-timeline__row">
                    <div class="two-col-timeline__col-text ">
                        <div class="two-col-timeline__col-text-inner slide-in">
                            <div class="two-col-timeline__text-wrapper">
                                <h4 class="two-col-timeline__col-title">
                                    2010
                                </h4>
                                <p class="two-col-timeline__col-supporting-text">
                                    Bluleadz officially joins as a HubSpot Solutions Partner, registering their first client
                                    with HubSpot – the first of many delighted clients.😀
                                </p>
                            </div>
                            <div style="color:#fdc06a; opacity:.10;" class="two-col-timeline__row-number"> 2010</div>
                        </div>
                        <div class="two-col-timeline__dash"></div>
                    </div>

                    <div class="two-col-timeline__line"></div>
                    <div></div>
                </div>

                <div class="two-col-timeline__row">
                    <div class="two-col-timeline__col-text ">
                        <div class="two-col-timeline__col-text-inner slide-in">
                            <div class="two-col-timeline__text-wrapper">
                                <h4 class="two-col-timeline__col-title">
                                    2014
                                </h4>
                                <p class="two-col-timeline__col-supporting-text">
                                    The hyper-growth phase kicks into full swing, doubling the size of the BZ team to 12,
                                    leading to bigger office spaces. 🚀 The highlight of the five year mark – welcoming
                                    Brian Halligan, CEO of HubSpot, as the guest speaker at the Tampa HUG workshop.
                                </p>
                            </div>
                            <div style="color:#60afe1; opacity:.10;" class="two-col-timeline__row-number"> 2014</div>
                        </div>
                        <div class="two-col-timeline__dash"></div>
                    </div>

                    <div class="two-col-timeline__line"></div>
                    <div></div>
                </div>

                <div class="two-col-timeline__row">
                    <div class="two-col-timeline__col-text ">
                        <div class="two-col-timeline__col-text-inner slide-in">
                            <div class="two-col-timeline__text-wrapper">
                                <h4 class="two-col-timeline__col-title">
                                    2015
                                </h4>
                                <p class="two-col-timeline__col-supporting-text">
                                    More hyper-growth: The team size, number of clients, and revenue doubles, and Bluleadz
                                    becomes more recognizable in the world of marketing. The team wins two American
                                    Marketing Association awards in the Tampa Bay chapter.🏆
                                </p>
                            </div>
                            <div style="color:#74c385; opacity:.10;" class="two-col-timeline__row-number"> 2015</div>
                        </div>
                        <div class="two-col-timeline__dash"></div>
                    </div>

                    <div class="two-col-timeline__line"></div>
                    <div></div>
                </div>

                <div class="two-col-timeline__row">
                    <div class="two-col-timeline__col-text ">
                        <div class="two-col-timeline__col-text-inner slide-in">
                            <div class="two-col-timeline__text-wrapper">
                                <h4 class="two-col-timeline__col-title">
                                    2016
                                </h4>
                                <p class="two-col-timeline__col-supporting-text">
                                    A big year in the HubSpot world: Bluleadz earns the highest milestone for certified
                                    agencies, reaching Diamond Partner Agency status. 💎 They also win a HubSpot Impact
                                    Award for best client blog series.
                                </p>
                            </div>
                            <div style="color:#e45b87; opacity:.10;" class="two-col-timeline__row-number"> 2016</div>
                        </div>
                        <div class="two-col-timeline__dash"></div>
                    </div>

                    <div class="two-col-timeline__line"></div>
                    <div></div>
                </div>

                <div class="two-col-timeline__row">
                    <div class="two-col-timeline__col-text ">
                        <div class="two-col-timeline__col-text-inner slide-in">
                            <div class="two-col-timeline__text-wrapper">
                                <h4 class="two-col-timeline__col-title">
                                    2018
                                </h4>
                                <p class="two-col-timeline__col-supporting-text">
                                    Continued rapid growth moves the headquarters to a brand new office overlooking the
                                    water in Tampa Bay. The new digs inspired a new look, leading to a successful rebranding
                                    and launching of a new website. 🍾
                                </p>
                            </div>
                            <div style="color:#21518a; opacity:.10;" class="two-col-timeline__row-number"> 2018</div>
                        </div>
                        <div class="two-col-timeline__dash"></div>
                    </div>

                    <div class="two-col-timeline__line"></div>
                    <div></div>
                </div>

                <div class="two-col-timeline__row">
                    <div class="two-col-timeline__col-text pb-6">
                        <div class="two-col-timeline__col-text-inner slide-in">
                            <div class="two-col-timeline__text-wrapper">
                                <h4 class="two-col-timeline__col-title">
                                    2020 (&amp; Beyond)
                                </h4>
                                <p class="two-col-timeline__col-supporting-text">
                                    A growing team opens the doors for an expansion of services, including the launch of
                                    their HubSpot onboarding and implementation program. 📈 Both the Bluleadz marketing team
                                    and client services team win five big awards, including a Telly Award and Communicator
                                    Awards.
                                </p>
                            </div>
                            <div style="color:#34c0cb; opacity:.10;" class="two-col-timeline__row-number"> 2020</div>
                        </div>
                        <div class="two-col-timeline__dash"></div>
                    </div>

                    <div class="two-col-timeline__line"></div>
                    <div></div>
                </div>

            </div>
        </div>
    </section>
    <!--======================= Start our team =========================-->


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

    <!--======================= Start about team =========================-->

    <section class=" about_team_section" id="">
        <img class="generic-section-bg loaded" src="{{ asset('front/assets/img/orange-wave--stacked-thick.svg') }}" alt="img">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        <img class="generic-content__large-image wow fadeIn loading" src="{{ asset('front/assets/img/team_about.png') }}"
                            alt="bz-team-photo-2019" loading="lazy" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="generic-content-grid__item generic-content">
                        <div class="generic-content__body ">
                            <h2>Where It All Started</h2>
                            <p>In 2009, Bluleadz CEO Eric Baum noticed a shift in the ways companies could market to their
                                customers. After digging deeper into what this evolution consisted of, he discovered the
                                power of inbound marketing thanks to HubSpot
                                TV.&nbsp;
                            </p>
                            <p>Cut to over 10 years later: Bluleadz stands tall in the HubSpot Solutions Partner space as an
                                early adopter of the inbound methodology. As a Diamond Certified Agency, Bluleadz continues
                                to educate and guide companies on how
                                to implement inbound in everything they do.&nbsp;</p>
                            <p>Since its founding, Bluleadz has grown in size while delivering the results clients deserve,
                                influencing hundreds of millions of dollars in revenue and generating millions of leads.
                                Their Tampa headquarters is home of the Tampa
                                HubSpot User Group (HUG), as well as the go-to venue for epic ping pong tournaments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
