<!--==================== Start navtop ======================-->
<div class="topbar">
    <div class="container">
        <div class="topbar__right">
            <a href="#"><i class="fal fa-phone-alt"></i>+971505077374</a>
            <a href="#"><i class="fal fa-envelope"></i>ex.example@gmail.com</a>
        </div>
        <div class="topbar__left">
            <div class="topbar__social">
                <a href="#" class="icon"><span class="fab fa-facebook-square"></span></a>
                <a href="#" class="icon"><span class="fab fa-twitter"></span></a>
                <a href="#" class="icon"><span class="fab fa-pinterest-p"></span></a>
                <a href="#" class="icon"><span class="fab fa-instagram"></span></a>
            </div>
        </div>

    </div>
</div>
<!--==================== End navtop ======================-->

<!--==================== start navbar =======================-->
<nav class="nav">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-8 logo">
                <a href="#"><img src="{{ asset('front/assets/img/logo.png') }}" alt="logo"></a>
            </div>
            <div class="col-7 nav-menu d-none d-lg-block">
                @if ($lang=="ar")
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
            <div class="col-lg-2 additional d-none d-lg-flex">
                <div>
                    <a href="#" class="search-toggler"><i class="far fa-search"></i></a>
                    <div class="d-flex justify-content-center">
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4 d-block d-lg-none">
                <div class="navbar-toggler">
                    <div>
                        <span class="one"></span>
                        <span class="two"></span>
                        <span class="three"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="sid-logo">
                <a href="#">
                    <img src="{{ asset('front/assets/img/logo.png') }}">
                </a>
            </div>
            <div class="btn-req additional">
                <ul>
                    <li>
                        <a href="#" class="search-toggler"><i class="far fa-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="lang">العربية</a>
                    </li>

                </ul>
            </div>
            <div class="side-nav mCustomScrollbar _mCS_1 mCS-dir-rtl mCS_no_scrollbar">
                <div id="mCSB_1" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_inside" style="max-height: 664px;" tabindex="0">
                    <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;">
                        <ul>
                            <li><a href="{{ url('frontmodule/homepage')}}">Home</a></li>
                            <li><a href="{{ url('frontmodule/about')}}">About Us</a></li>
                            <li><a href="{{ url('frontmodule/services')}}">Services</a></li>
                            <li><a href="{{ url('frontmodule/works')}}">Works</a></li>
                            <li><a href="{{ url('frontmodule/blogs')}}">Blogs</a></li>
                            <li><a href="{{ url('frontmodule/team')}}">Team</a></li>
                            <li><a href="{{ url('frontmodule/contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical" style="display: none;">
                        <div class="mCSB_draggerContainer">
                            <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;">
                                <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                            </div>
                            <div class="mCSB_draggerRail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="overlay_gen" style="display: none;"></div>
<!--==================== End navbar =======================-->