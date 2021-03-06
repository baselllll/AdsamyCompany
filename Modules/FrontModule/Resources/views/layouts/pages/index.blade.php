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

    <!--======================= start header =========================-->
    <section class="header">
        <div class="owl-carousel owl-theme">
           @if ($lang=="ar")
           <div class="item bg_1">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">العلامات التجارية وتحديد المواقع</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">
                        عندما تكون العلامة التجارية ، نحددها. التعريف يعني إعطاء خصائص معينة
                        لمفهوم. ستظهر هذه الخصائص بشكل مرئي في هوية العلامة التجارية.
                    </p>
                </div>
                <div class="hidden-box">
                    <a href="" class="main-btn main animate_down">قراءة المزيد</a>
                </div>
            </div>
        </div>
        <div class="item bg_2">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">إدارة وسائل التواصل الاجتماعي</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">
                        جميع العملاء ينتقلون إلى التسويق الرقمي. الخطوة الأساسية هي أن يكون لديك ملف
                        منصة لتوليد جمهور.
                    </p>
                </div>
                <div class="hidden-box">
                    <a href="" class="main-btn main animate_down">قراءة المزيد</a>
                </div>
            </div>
        </div>
        <div class="item bg_3">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">التصوير</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">
                        نحن نعيش في عصر يتم فيه الترويج لمقاطع الفيديو على أنها أفضل طريقة لذلك
                        تسويق عملك أو منتجاتك.
                    </p>
                </div>
                <div class="hidden-box">
                    <a href="" class="main-btn main animate_down">قراءة المزيد</a>
                </div>
            </div>
        </div>
        <div class="item bg_4">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">التصوير بالفيديو</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">
                        واحدة من أكثر أدوات التسويق فعالية هي "الفيديو" معادلة كل
                        العلامة التجارية تشمل وجهين.
                    </p>
                </div>
                <div class="hidden-box" href="#">
                    <a href="" class="main-btn main animate_down">قراءة المزيد</a>
                </div>
            </div>
        </div>
        <div class="item bg_5">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">تحسين محركات البحث</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">
                         تعني تحسين محرك البحث. إنها مجموعة من القواعد لتحسين الموقع
                        تحسين موقع الويب الخاص بك حتى يتمكن من تحقيق تصنيفات أعلى في نتائج البحث المجانية لمحركات البحث
                        النتائج.
                    </p>
                </div>
                <div class="hidden-box" href="#">
                </div>
            </div>
        </div>
        <div class="item bg_6">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">تطبيقات الموبيل والويب</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">
                        عندما يزور جمهورك موقع الويب الخاص بك ، فإنه يعطيهم الانطباع الأول
                        من عملك.
                    </p>
                </div>
                <div class="hidden-box" href="#">
                    <a href="" class="main-btn main animate_down">قراءة المزيد</a>
                </div>
            </div>
        </div>
           @else
           <div class="item bg_1">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">Branding & Positioning</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">When the brand, we define. Definition means giving certain characteristics
                        to a concept. These Characteristics will visually appear in the brand identity.
                    </p>
                </div>
                <div class="hidden-box">
                    <a href="" class="main-btn main animate_down">Read More</a>
                </div>
            </div>
        </div>
        <div class="item bg_2">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">Social Media Management</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">All clients moving to digital marketing. An essential step is to have a
                        platform to generate audience.
                    </p>
                </div>
                <div class="hidden-box">
                    <a href="" class="main-btn main animate_down">Read More</a>
                </div>
            </div>
        </div>
        <div class="item bg_3">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">Photography</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">We’re living in an era when videos are being touted as the best way to
                        market your business or products.
                    </p>
                </div>
                <div class="hidden-box">
                    <a href="" class="main-btn main animate_down">Read More</a>
                </div>
            </div>
        </div>
        <div class="item bg_4">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">Videography</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">One of the most effective marketing tool is “video” The equation of every
                        brand includes two sides.
                    </p>
                </div>
                <div class="hidden-box" href="#">
                    <a href="#" class="main-btn main animate_down">Read More</a>
                </div>
            </div>
        </div>
        <div class="item bg_5">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">SEO, SEM & SMM</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">SEO stands for Search engine optimization. It is a set of rules for
                        optimizing your website so that it can achieve higher rankings in search engines’ organic
                        results.
                    </p>
                </div>
                <div class="hidden-box" href="#">
                    <a href="#" class="main-btn main animate_down">Read More</a>
                </div>
            </div>
        </div>
        <div class="item bg_6">
            <div class="overlay"></div>
            <div class="info">
                <div class="hidden-box">
                    <h2 class="animate_down">Web & App Development</h2>
                </div>
                <div class="hidden-box">
                    <p class="animate_down">When your audience visits your website, it gives them their first impression
                        of your business.
                    </p>
                </div>
                <div class="hidden-box" href="#">
                    <a href="#" class="main-btn main animate_down">Read More</a>
                </div>
            </div>
        </div>
           @endif
        </div>
        <a href="#About_section" class="mouse-wrap smoothscroll">
            <span class="mouse">
                <span class="scroll"></span>
            </span>
           
        </a>
    </section>
    <!--======================= End header =========================-->

    <!--======================= start about =========================-->
    <section class="about_section" id="About_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="about-image">
                        <img src="{{ asset('front/assets/img/about_02.jpg') }}" alt="">
                        <div class="sec-img"><img src="{{ asset('front/assets/img/about_01.jpg') }}" alt=""></div>
                        <div class="about-number">
                            <h2>10</h2><span>number of projects</span>
                        </div>
                        <div class="cup-b">
                            <div class="cup"><img src="{{ asset('front/assets/img/ab-after.svg') }}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    @if ($lang=='ar')
                    <div class="about-info">
                        <div class="section-title">
                            <h4>معلومات عنا</h4>
                        </div>
                        <h5>نحن ADSAMY ، وكالة تسويق رقمية <br> تأسست عام 2021. </h5>
                        <p> نحن نتفهم أن لكل علامة تجارية احتياجات فريدة ، وأن التسويق الرقمي يدور حول استخدام البيانات
                            تحقيق أهداف التسويق. إنه فن استخدام رؤى المستهلك لصياغة التسويق
                            تستهدف مجموعات معينة
                            من العملاء عبر الإنترنت. يستفيد المسوقون الرقميون من القنوات الرقمية مثل محركات البحث والقنوات الاجتماعية
                            الوسائط ورسائل البريد الإلكتروني والمواقع والتطبيقات لمساعدة عملائهم على التواصل مع الحاليين والمحتملين
                            عملاء.
                        </p>
                        <ul>
                            <li> تحلى بالمسؤولية ، واعملوا معًا كفريق وتواصلوا بوضوح. </ li>
                                <li> فكر خارج الصندوق ، وتحدى بشكل بناء وتصرف قبل الآخرين. </ li>
                                <li> خلق مكان إيجابي للعمل ودعم المبادرات الأخلاقية. </ li>
                                <li> قدِّم دائمًا نتائج ذات جودة استثنائية وأنجزها وحسِّنها. </li>                        </ul>
                        <div class="add">
                            <a href="#" class="main-btn solid">قراءة المزيد</a>
                            <a class="venobox play-btn" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=HuIZoH0d8s0&ab_channel=AdsamyAgency"></a>
                        </div>
                    </div>
                    @else
                    <div class="about-info">
                        <div class="section-title">
                            <h4>About Us</h4>
                        </div>
                        <h5>We are ADSAMY, A Digital Marketing Agency <br> that is established in 2021.</h5>
                        <p>We understand that every brand has unique needs, and Digital Marketing is all about using data to
                            realize marketing objectives. It is the art of using consumer insights to formulate marketing
                            strategies targeted at particular groups
                            of customers online.Digital marketers leverage digital channels such as search engines, social
                            media, emails, websites and Apps to help their clients connect with existing and potential
                            customers.
                        </p>
                        <ul>
                            <li>Be accountable, work together as a team and communicate clearly.</li>
                            <li>Think outside the box, challenge constructively and act before others do.</li>
                            <li>Creating a positive place to work and supporting ethical initiatives.</li>
                            <li>Always deliver exceptional quality results, accomplish and improve.</li>
                        </ul>
                        <div class="add">
                            <a href="#" class="main-btn solid">Read More</a>
                            <a class="venobox play-btn" data-autoplay="true" data-vbtype="video"
                                href="https://www.youtube.com/watch?v=HuIZoH0d8s0&ab_channel=AdsamyAgency"></a>
                        </div>
                    </div> 
                    @endif
                   
                </div>
            </div>
        </div>
    </section>
    <!--======================= End about =========================-->

    <!--======================= Start services =========================-->
    <section class="services_section">
        <div class="container">
            @if ($lang=="ar")
            <div class="main-heading">
                <span>نقدم لك الأفضل</span>
                <h2>خدمات</h2>
            </div>
            <p class="desc">نحن شركة تسعى دائمًا إلى راحة العميل وتنفيذ المطلوب و
                تلبية رغبته بدقة واحترافية حيث لدينا فريق عمل قوي ومثالي للغاية
                انضباط.</p>
            <div class="row mt-50">
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62"
                                height="51" viewBox="0 0 62 51">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="1.101" y1="-0.093" x2="0.151" y2="0.983"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0098ff" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="computer" transform="translate(-8 -56)">
                                    <path id="Path_124" data-name="Path 124"
                                        d="M66,56H12a4.005,4.005,0,0,0-4,4V94a4.005,4.005,0,0,0,4,4H32.612l-1.334,4H28a1,1,0,0,0-1,1v2H18a1,1,0,0,0,0,2H62a1,1,0,0,0,0-2H51v-2a1,1,0,0,0-1-1H46.721l-1.334-4H66a4.005,4.005,0,0,0,4-4V60A4.005,4.005,0,0,0,66,56ZM49,104v1H29v-1Zm-15.612-2,1.334-4h8.558l1.334,4ZM68,94a2,2,0,0,1-2,2H12a2,2,0,0,1-2-2V92H68ZM24.958,81l-.375,9H23.417l-.375-9ZM23.18,79l.667-4h.305l.668,4ZM24,73c-1.084,0-2-1.374-2-3,0-1.026,1.048-2.518,2-3.569.856.95,2,2.469,2,3.569C26,71.626,25.084,73,24,73Zm10.883-2,.118.236V72H31v-.764L31.118,71Zm-2.765-2L33,67.236,33.882,69ZM35,74V89.875a1.032,1.032,0,0,0,.009.125H30.991A1.032,1.032,0,0,0,31,89.875V74Zm9-4h3v2H46a1,1,0,0,0,0,2h1v2H44a1,1,0,0,0,0,2h3v2H46a1,1,0,0,0,0,2h1v2H44a1,1,0,1,0,0,2h3v4H40V66h7v2H44a1,1,0,0,0,0,2ZM56,82v7.875a1.031,1.031,0,0,0,.009.125H51.991A1.032,1.032,0,0,0,52,89.875V82Zm-4-2v-.764l2-4,2,4V80ZM68,90H57.991A1.032,1.032,0,0,0,58,89.875V79a1.01,1.01,0,0,0-.1-.447l-3-6a1,1,0,0,0-1.79,0l-3,6A1.01,1.01,0,0,0,50,79V89.875a1.032,1.032,0,0,0,.009.125H49V65a1,1,0,0,0-1-1H39a1,1,0,0,0-1,1V90H36.991A1.032,1.032,0,0,0,37,89.875V71a1.01,1.01,0,0,0-.1-.447l-3-6a1,1,0,0,0-1.79,0l-3,6A1.01,1.01,0,0,0,29,71V89.875a1.033,1.033,0,0,0,.009.125H26.584L27,80.041c0-.022,0-.045,0-.069v-.03a1,1,0,0,0-.013-.1v0l-.925-5.551A5.355,5.355,0,0,0,28,70c0-2.57-2.979-5.416-3.319-5.732a1,1,0,0,0-1.362,0C22.979,64.584,20,67.43,20,70a5.355,5.355,0,0,0,1.939,4.284l-.925,5.551v0a1,1,0,0,0-.012.1v.03c0,.024,0,.046,0,.069L21.416,90H10V60a2,2,0,0,1,2-2H66a2,2,0,0,1,2,2Z"
                                        fill="url(#linear-gradient)" />
                                    <path id="Path_125" data-name="Path 125" d="M47,352H41a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"
                                        transform="translate(-28 -259)" fill="url(#linear-gradient)" />
                                    <path id="Path_126" data-name="Path 126" d="M114,352h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"
                                        transform="translate(-91 -259)" fill="url(#linear-gradient)" />
                                    <path id="Path_127" data-name="Path 127"
                                        d="M201,208a1,1,0,0,0-1,1v11a1,1,0,1,0,2,0V209A1,1,0,0,0,201,208Z"
                                        transform="translate(-168 -133)" fill="url(#linear-gradient)" />
                                    <path id="Path_128" data-name="Path 128"
                                        d="M369,272a1,1,0,0,0-1,1v3a1,1,0,1,0,2,0v-3A1,1,0,0,0,369,272Z"
                                        transform="translate(-315 -189)" fill="url(#linear-gradient)" />
                                    <path id="Path_129" data-name="Path 129" d="M41,90h8a1,1,0,0,0,0-2H41a1,1,0,0,0,0,2Z"
                                        transform="translate(-28 -28)" fill="url(#linear-gradient)" />
                                    <path id="Path_130" data-name="Path 130" d="M41,114h2a1,1,0,1,0,0-2H41a1,1,0,0,0,0,2Z"
                                        transform="translate(-28 -49)" fill="url(#linear-gradient)" />
                                    <path id="Path_131" data-name="Path 131" d="M425,298h4a1,1,0,0,0,0-2h-4a1,1,0,0,0,0,2Z"
                                        transform="translate(-364 -210)" fill="url(#linear-gradient)" />
                                    <path id="Path_132" data-name="Path 132" d="M449,274h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Z"
                                        transform="translate(-385 -189)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>تصميم الهوية الكامل</h4>
                            <p>حيث نسعى جاهدين لتقديم تصاميم عالية الجودة وحديثة وجذابة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="46.737" height="46.776" viewBox="0 0 46.737 46.776">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="-0.702" y1="2.155" x2="-9.357" y2="9.365"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0e6aa8" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-4" x1="-0.702" y1="2.155" x2="-9.357" y2="9.365"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#168ad8" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="web-development" transform="translate(-0.001)">
                                    <path id="Path_136" data-name="Path 136"
                                        d="M339.527,110.9a.64.64,0,0,0-.576-.618.254.254,0,0,0-.161.042l-2.149,1.4a.559.559,0,0,0,0,.948l2.149,1.4a.254.254,0,0,0,.161.042.64.64,0,0,0,.576-.618.388.388,0,0,0-.152-.33l-1.49-.965,1.49-.965a.389.389,0,0,0,.152-.33Zm0,0"
                                        transform="translate(-305.646 -100.206)" fill="url(#linear-gradient)" />
                                    <path id="Path_137" data-name="Path 137"
                                        d="M383.927,85.367a.372.372,0,0,0-.355.212l-2.97,6.1a.38.38,0,0,0-.042.161.468.468,0,0,0,.474.448.424.424,0,0,0,.381-.211l2.979-6.1a.367.367,0,0,0,.034-.161.485.485,0,0,0-.5-.448Zm0,0"
                                        transform="translate(-345.79 -77.568)" fill="url(#linear-gradient)" />
                                    <path id="Path_138" data-name="Path 138"
                                        d="M435.5,111.719l-2.149-1.4a.256.256,0,0,0-.161-.042.64.64,0,0,0-.575.618.388.388,0,0,0,.152.33l1.489.965-1.489.965a.388.388,0,0,0-.152.33.64.64,0,0,0,.575.618.256.256,0,0,0,.161-.042l2.149-1.4a.559.559,0,0,0,0-.948Zm0,0"
                                        transform="translate(-393.092 -100.206)" fill="url(#linear-gradient)" />
                                    <path id="Path_139" data-name="Path 139"
                                        d="M43.464,3.407H28.711A5.3,5.3,0,0,0,23.763,0h-9.9a5.3,5.3,0,0,0-5.3,5.3v6.013a2.234,2.234,0,0,0-.719,2.1l.389,2.141a1.864,1.864,0,0,0,.833,1.3,2.014,2.014,0,0,0,1.06.281v.38a8.329,8.329,0,0,0,3.089,5.836,12.613,12.613,0,0,0,1.146.923v1.148a.726.726,0,0,1-.593.714l-.047.01c-.012,0-1.188.31-2.726.746H5.978a2.042,2.042,0,0,0-2.037,2.188l.014.193a6.56,6.56,0,0,0-3.8,5.444v.029L0,44.178a2.567,2.567,0,0,0,2.567,2.6H35.063a2.568,2.568,0,0,0,2.567-2.6l-.156-9.429c0-.01,0-.019,0-.029a6.593,6.593,0,0,0-3.993-5.539l-.135-.062,0-.036a2.042,2.042,0,0,0-2.037-2.188H26.629c-1.537-.436-2.714-.743-2.726-.746l-.047-.011a.726.726,0,0,1-.593-.714V24.274a12.679,12.679,0,0,0,1.146-.923,10.01,10.01,0,0,0,2.654-3.674h4.452l-.778,3.139a1.237,1.237,0,0,0,.529,1.348,1.236,1.236,0,0,0,1.447-.055l5.769-4.432h4.982A3.277,3.277,0,0,0,46.738,16.4V6.681a3.278,3.278,0,0,0-3.274-3.274ZM27.5,12.492a2.956,2.956,0,0,1,.672-.141.884.884,0,0,1,.26.817l-.387,2.13c-.056.3-.171.368-.208.391a.669.669,0,0,1-.338.076ZM9.943,5.3A3.929,3.929,0,0,1,13.868,1.37h9.9A3.929,3.929,0,0,1,27.688,5.3v5.741a3.988,3.988,0,0,0-1.173.395V7.256a2.726,2.726,0,0,0-2.723-2.723H21.94a2.8,2.8,0,0,0-1.766.63l-.181.148a1.86,1.86,0,0,1-2.354,0l-.182-.149a2.8,2.8,0,0,0-1.766-.63H13.839a2.726,2.726,0,0,0-2.723,2.723v4.175a3.986,3.986,0,0,0-1.173-.394ZM9.8,15.689c-.037-.023-.152-.094-.207-.385L9.2,13.168a.886.886,0,0,1,.259-.817,2.957,2.957,0,0,1,.672.14v3.273a.671.671,0,0,1-.338-.076ZM3.734,44.91a1.866,1.866,0,0,0,.067.5H2.569a1.2,1.2,0,0,1-1.2-1.209l.156-9.414a5.03,5.03,0,0,1,2.535-4L4.9,42.516a2.026,2.026,0,0,0,.142.613,1.87,1.87,0,0,0-1.307,1.78Zm28.656-2.394.85-11.926A5.1,5.1,0,0,1,36.1,34.783l.156,9.411a1.2,1.2,0,0,1-1.2,1.212H33.831a1.867,1.867,0,0,0-1.556-2.347,2.017,2.017,0,0,0,.115-.543Zm.138,2.394a.5.5,0,0,1-.5.5H5.6a.5.5,0,0,1,0-.992H32.031A.5.5,0,0,1,32.527,44.91ZM31.8,28.476a.665.665,0,0,1,.178.506l-.958,13.437a.674.674,0,0,1-.671.624H6.936a.675.675,0,0,1-.671-.625L5.308,28.982a.672.672,0,0,1,.671-.72H31.31a.667.667,0,0,1,.492.214Zm-9.308-1.585H15.138a2.094,2.094,0,0,0,.6-1.47v-.307a6.945,6.945,0,0,0,3.076.873,6.948,6.948,0,0,0,3.076-.873v.307a2.094,2.094,0,0,0,.6,1.47Zm.994-4.556a7.962,7.962,0,0,1-4.672,2.282,7.963,7.963,0,0,1-4.671-2.282A6.994,6.994,0,0,1,11.5,17.515V13.2h.027a.958.958,0,0,0,.956-.957V7.256A1.354,1.354,0,0,1,13.839,5.9h1.852a1.423,1.423,0,0,1,.9.32l.182.149a3.23,3.23,0,0,0,4.089,0l.182-.148a1.424,1.424,0,0,1,.9-.32h1.851a1.354,1.354,0,0,1,1.353,1.353v4.986a.958.958,0,0,0,.983.956v4.317a6.993,6.993,0,0,1-2.639,4.82ZM45.368,16.4a1.906,1.906,0,0,1-1.9,1.9H38.249a.684.684,0,0,0-.417.142l-5.684,4.366.906-3.658a.685.685,0,0,0-.665-.85H27.436a5.3,5.3,0,0,0,.061-.792v-.38a2.014,2.014,0,0,0,1.059-.281,1.866,1.866,0,0,0,.834-1.306l.388-2.135a2.234,2.234,0,0,0-.719-2.1V5.3c0-.175-.009-.348-.025-.518H43.464a1.906,1.906,0,0,1,1.9,1.9Zm0,0"
                                        transform="translate(0)" fill="url(#linear-gradient-4)" />
                                    <path id="Path_140" data-name="Path 140"
                                        d="M180.319,373.128a2.576,2.576,0,1,0-2.576-2.576A2.579,2.579,0,0,0,180.319,373.128Zm0-3.781a1.206,1.206,0,1,1-1.206,1.206A1.207,1.207,0,0,1,180.319,369.347Zm0,0"
                                        transform="translate(-161.503 -334.358)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>تصميم الهوية الكامل</h4>
                            <p>حيث نسعى جاهدين لتقديم تصاميم عالية الجودة وحديثة وجذابة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon">
                            <svg id="social-media-marketing" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="48.307" height="48.306"
                                viewBox="0 0 48.307 48.306">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0e6aa8" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <path id="Path_100" data-name="Path 100"
                                    d="M.708,65.379a.708.708,0,0,0,.708-.708V59.149a3.631,3.631,0,0,1,3.621-3.632H6.109a.708.708,0,1,0,0-1.415H5.037A5.048,5.048,0,0,0,0,59.149v5.523a.708.708,0,0,0,.708.708Z"
                                    transform="translate(0 -48.997)" fill="url(#linear-gradient)" />
                                <path id="Path_101" data-name="Path 101"
                                    d="M43.27,54.1H26.616a.708.708,0,1,0,0,1.415H43.27a3.631,3.631,0,0,1,3.621,3.632V86.186a3.631,3.631,0,0,1-3.621,3.632H5.037a3.631,3.631,0,0,1-3.621-3.632V67.965a.708.708,0,1,0-1.415,0v18.22a5.048,5.048,0,0,0,5.037,5.048H19.4l-1.425,4.655H14.84a.708.708,0,1,0,0,1.415H33.467a.708.708,0,0,0,0-1.415H30.329L28.9,91.233H43.27a5.048,5.048,0,0,0,5.037-5.048V59.15A5.048,5.048,0,0,0,43.27,54.1ZM19.458,95.889l1.425-4.655h6.541l1.425,4.655Z"
                                    transform="translate(0 -48.998)" fill="url(#linear-gradient)" />
                                <path id="Path_102" data-name="Path 102"
                                    d="M32.161,84.017H33.3a.708.708,0,0,0,0-1.415H32.161a2.242,2.242,0,0,0-2.237,2.241v24.346a2.242,2.242,0,0,0,2.237,2.241H45.352a.708.708,0,1,0,0-1.415H32.161a.825.825,0,0,1-.822-.826V84.843A.825.825,0,0,1,32.161,84.017Z"
                                    transform="translate(-27.101 -74.809)" fill="url(#linear-gradient)" />
                                <path id="Path_103" data-name="Path 103"
                                    d="M438.409,231.3a.708.708,0,0,0-.708.708v11.85a.825.825,0,0,1-.822.826h-1.53a.708.708,0,1,0,0,1.415h1.53a2.242,2.242,0,0,0,2.237-2.241v-11.85A.708.708,0,0,0,438.409,231.3Z"
                                    transform="translate(-393.633 -209.478)" fill="url(#linear-gradient)" />
                                <path id="Path_104" data-name="Path 104"
                                    d="M295.313,84.843a2.242,2.242,0,0,0-2.237-2.241H276.564a.708.708,0,0,0,0,1.415h16.512a.825.825,0,0,1,.822.826v9.163a.708.708,0,1,0,1.415,0Z"
                                    transform="translate(-249.829 -74.809)" fill="url(#linear-gradient)" />
                                <path id="Path_105" data-name="Path 105"
                                    d="M180.276,174.966a1.814,1.814,0,0,0-1.566,1.793v.423H177.4a.708.708,0,1,0,0,1.415h1.309v.423a1.814,1.814,0,0,0,1.566,1.793l.184.025v2.79a.708.708,0,0,0,1.415,0v-2.6l3.873.521a2.121,2.121,0,0,0,4.211-.358v-6.6a2.121,2.121,0,0,0-4.211-.358Zm5.442,5.152-5.253-.707a.394.394,0,0,1-.34-.39v-2.262a.394.394,0,0,1,.34-.39l5.253-.707Zm1.415-5.531a.706.706,0,1,1,1.411,0v6.6a.706.706,0,1,1-1.411,0Z"
                                    transform="translate(-160.022 -156.193)" fill="url(#linear-gradient)" />
                                <path id="Path_106" data-name="Path 106"
                                    d="M89.317,12.82h4.217l1.273,1.835a.708.708,0,0,0,1.163,0l1.273-1.835h4.217a2.126,2.126,0,0,0,2.123-2.124V2.123A2.126,2.126,0,0,0,101.46,0H94.226a.708.708,0,0,0,0,1.415h7.234a.709.709,0,0,1,.708.708V10.7a.709.709,0,0,1-.708.708H96.873a.708.708,0,0,0-.581.3l-.9,1.3-.9-1.3a.707.707,0,0,0-.581-.3H89.317a.709.709,0,0,1-.708-.708V2.123a.709.709,0,0,1,.708-.708h1.617a.708.708,0,0,0,0-1.415H89.317a2.126,2.126,0,0,0-2.123,2.123V10.7A2.126,2.126,0,0,0,89.317,12.82Z"
                                    transform="translate(-78.967)" fill="url(#linear-gradient)" />
                                <path id="Path_107" data-name="Path 107"
                                    d="M57.263,402.938a.708.708,0,0,0,0,1.415h2.891a.708.708,0,0,0,0-1.415Z"
                                    transform="translate(-51.219 -364.921)" fill="url(#linear-gradient)" />
                                <path id="Path_108" data-name="Path 108"
                                    d="M117.263,402.938a.708.708,0,0,0,0,1.415h2.891a.708.708,0,0,0,0-1.415Z"
                                    transform="translate(-105.558 -364.921)" fill="url(#linear-gradient)" />
                                <path id="Path_109" data-name="Path 109"
                                    d="M140.4,41.21a.707.707,0,0,0,1,0l2.332-2.332a2.12,2.12,0,0,0-1.5-3.621h0a2.108,2.108,0,0,0-1.333.472,2.108,2.108,0,0,0-1.333-.472h0a2.12,2.12,0,0,0-1.5,3.621Zm-1.333-4.332a.7.7,0,0,1,.5-.206h0a.7.7,0,0,1,.5.208l.334.334a.707.707,0,0,0,1,0l.334-.334a.7.7,0,0,1,.5-.208h0a.7.7,0,0,1,.5.206.707.707,0,0,1,0,1L140.9,39.709l-1.832-1.832a.707.707,0,0,1,0-1Z"
                                    transform="translate(-124.478 -31.931)" fill="url(#linear-gradient)" />
                                <path id="Path_110" data-name="Path 110"
                                    d="M87.9,285.815h3.033a.708.708,0,1,0,0-1.415H87.9a.708.708,0,1,0,0,1.415Z"
                                    transform="translate(-78.967 -257.567)" fill="url(#linear-gradient)" />
                                <path id="Path_111" data-name="Path 111"
                                    d="M87.9,320.815h4.917a.708.708,0,0,0,0-1.415H87.9a.708.708,0,0,0,0,1.415Z"
                                    transform="translate(-78.967 -289.265)" fill="url(#linear-gradient)" />
                                <path id="Path_112" data-name="Path 112"
                                    d="M385.323,173.223a.708.708,0,0,0-.708-.708h-3.033a.708.708,0,1,0,0,1.415h3.033A.708.708,0,0,0,385.323,173.223Z"
                                    transform="translate(-344.94 -156.239)" fill="url(#linear-gradient)" />
                                <path id="Path_113" data-name="Path 113"
                                    d="M366.529,137.515h-4.917a.708.708,0,0,0,0,1.415h4.917a.708.708,0,0,0,0-1.415Z"
                                    transform="translate(-326.854 -124.541)" fill="url(#linear-gradient)" />
                                <path id="Path_114" data-name="Path 114"
                                    d="M219.125,325.823h.627a.707.707,0,0,0,.573-.293l1.231-1.7,1.231,1.7a.708.708,0,0,0,.573.293h3.9a.708.708,0,0,0,0-1.415h-3.541l-1.592-2.2a.708.708,0,0,0-1.146,0l-1.592,2.2h-.265a3.051,3.051,0,0,0,0,6.1h13.132a3.051,3.051,0,0,0,0-6.1h-1.72a.708.708,0,1,0,0,1.415h1.72a1.636,1.636,0,0,1,0,3.271H219.125a1.636,1.636,0,0,1,0-3.271Z"
                                    transform="translate(-195.691 -291.545)" fill="url(#linear-gradient)" />
                            </svg>

                        </div>
                        <div class="info">
                            <h4>تصميم الهوية الكامل</h4>
                            <p>حيث نسعى جاهدين لتقديم تصاميم عالية الجودة وحديثة وجذابة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="39.885" height="49.856" viewBox="0 0 39.885 49.856">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0d4b74" />
                                        <stop offset="1" stop-color="#0098ff" />
                                    </linearGradient>
                                </defs>
                                <g id="surface1" transform="translate(-0.25)">
                                    <path id="Path_141" data-name="Path 141"
                                        d="M588.87,363.484l-1.12,1.225,5.1,4.671a5.831,5.831,0,0,1,1.884,4.288V394.01h1.662V373.669a7.5,7.5,0,0,0-2.425-5.513Zm0,0"
                                        transform="translate(-556.257 -344.154)" fill="url(#linear-gradient)" />
                                    <path id="Path_142" data-name="Path 142"
                                        d="M26.009,0H4.4A4.16,4.16,0,0,0,.25,4.155V45.7A4.16,4.16,0,0,0,4.4,49.856H25.178V48.369a18.891,18.891,0,0,1,3.184-10.516.831.831,0,0,0-.1-1.049l-5.817-5.817a2.695,2.695,0,0,1,.2-3.988,2.8,2.8,0,0,1,3.72.286l8.2,8.2,1.175-1.175-5.573-5.575V4.155A4.16,4.16,0,0,0,26.009,0ZM28.5,27.077l-.967-.967a4.472,4.472,0,0,0-5.953-.393,4.357,4.357,0,0,0-.315,6.447l5.343,5.343a20.545,20.545,0,0,0-3.088,10.688H4.4A2.493,2.493,0,0,1,1.912,45.7V43.208H22.685V41.547H1.912V6.647H28.5Zm0-22.091H1.912V4.155A2.493,2.493,0,0,1,4.4,1.662h21.6A2.493,2.493,0,0,1,28.5,4.155Zm0,0"
                                        fill="url(#linear-gradient)" />
                                    <path id="Path_143" data-name="Path 143"
                                        d="M64.412,162.9h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,162.9Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -147.941)" fill="url(#linear-gradient)" />
                                    <path id="Path_144" data-name="Path 144"
                                        d="M220.662,162.9h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324A1.662,1.662,0,0,0,219,157.912v3.324A1.662,1.662,0,0,0,220.662,162.9Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -147.941)" fill="url(#linear-gradient)" />
                                    <path id="Path_145" data-name="Path 145"
                                        d="M376.912,162.9h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,376.912,162.9Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-355.058 -147.941)" fill="url(#linear-gradient)" />
                                    <path id="Path_146" data-name="Path 146"
                                        d="M64.412,319.147h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,319.147Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -295.881)" fill="url(#linear-gradient)" />
                                    <path id="Path_147" data-name="Path 147"
                                        d="M64.412,475.4h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,475.4Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -443.822)" fill="url(#linear-gradient)" />
                                    <path id="Path_148" data-name="Path 148"
                                        d="M220.662,319.147h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324A1.662,1.662,0,0,0,219,314.162v3.324A1.662,1.662,0,0,0,220.662,319.147Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -295.881)" fill="url(#linear-gradient)" />
                                    <path id="Path_149" data-name="Path 149"
                                        d="M376.912,319.147h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,376.912,319.147Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-355.058 -295.881)" fill="url(#linear-gradient)" />
                                    <path id="Path_150" data-name="Path 150"
                                        d="M220.662,475.4h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324A1.662,1.662,0,0,0,219,470.412v3.324A1.662,1.662,0,0,0,220.662,475.4Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -443.822)" fill="url(#linear-gradient)" />
                                    <path id="Path_151" data-name="Path 151"
                                        d="M64.412,631.647h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324A1.662,1.662,0,0,0,67.736,625H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,631.647Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -591.763)" fill="url(#linear-gradient)" />
                                    <path id="Path_152" data-name="Path 152"
                                        d="M220.662,631.647h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324A1.662,1.662,0,0,0,223.986,625h-3.324A1.662,1.662,0,0,0,219,626.662v3.324A1.662,1.662,0,0,0,220.662,631.647Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -591.763)" fill="url(#linear-gradient)" />
                                    <path id="Path_153" data-name="Path 153" d="M265.875,843.75h1.662v1.662h-1.662Zm0,0"
                                        transform="translate(-251.499 -798.88)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>تصميم الهوية الكامل</h4>
                            <p>حيث نسعى جاهدين لتقديم تصاميم عالية الجودة وحديثة وجذابة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="49.177" height="49.156" viewBox="0 0 49.177 49.156">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#028dec" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="global" transform="translate(0 -0.105)">
                                    <path id="Path_115" data-name="Path 115"
                                        d="M41.639,32.925a.819.819,0,1,1-.819-.819A.819.819,0,0,1,41.639,32.925Zm0,0"
                                        transform="translate(-35.904 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_116" data-name="Path 116"
                                        d="M73.639,32.925a.819.819,0,1,1-.819-.819A.819.819,0,0,1,73.639,32.925Zm0,0"
                                        transform="translate(-64.627 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_117" data-name="Path 117"
                                        d="M105.639,32.925a.819.819,0,1,1-.819-.819A.819.819,0,0,1,105.639,32.925Zm0,0"
                                        transform="translate(-93.35 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_118" data-name="Path 118"
                                        d="M160.819,32.105a.819.819,0,0,0,0,1.639H181.3a.819.819,0,0,0,0-1.639Zm0,0"
                                        transform="translate(-143.615 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_119" data-name="Path 119"
                                        d="M11.813,40.249H1.638V8.3H37.686a.819.819,0,1,0,0-1.639H1.638V1.744H40.143V11.919a.819.819,0,1,0,1.639,0V.925a.819.819,0,0,0-.819-.819H.819A.819.819,0,0,0,0,.925V41.069a.819.819,0,0,0,.819.819H11.813a.819.819,0,1,0,0-1.639Zm0,0"
                                        transform="translate(0 0)" fill="url(#linear-gradient)" />
                                    <path id="Path_120" data-name="Path 120"
                                        d="M353.724,350.347l-4.506-4.473,2.638-1.761a.815.815,0,0,0-.246-1.475l-11-2.925a.82.82,0,0,0-1,1l2.884,11a.815.815,0,0,0,1.475.246l1.8-2.638,4.506,4.506a.831.831,0,0,0,1.163,0l2.319-2.319a.819.819,0,0,0-.033-1.163Zm-2.9,1.745-4.637-4.637a.817.817,0,0,0-.573-.238h-.082a.818.818,0,0,0-.6.36l-1.311,1.958-2.073-7.881,7.881,2.073-1.958,1.327a.81.81,0,0,0-.123,1.253l4.637,4.637Zm0,0"
                                        transform="translate(-304.806 -304.806)" fill="url(#linear-gradient)" />
                                    <path id="Path_121" data-name="Path 121"
                                        d="M120.287,129.294a16.271,16.271,0,0,1-5.374,1.221v-7.373a32.649,32.649,0,0,1,3.621.287.827.827,0,1,0,.23-1.639,34.642,34.642,0,0,0-3.851-.287v-6.554h8.193a29.339,29.339,0,0,1-.377,3.834.83.83,0,1,0,1.639.27,30.613,30.613,0,0,0,.377-4.1h5.735a16.268,16.268,0,0,1-1.18,5.374.818.818,0,1,0,1.516.614,18.072,18.072,0,0,0-16.721-24.832h-.59a18.081,18.081,0,0,0-10.88,4.1.821.821,0,1,0,1.04,1.27,16.539,16.539,0,0,1,4.76-2.736,16.016,16.016,0,0,0-3.162,5.1,32.317,32.317,0,0,1-4.1-1.467.819.819,0,0,0-.934.213.065.065,0,0,0-.058.049,18.022,18.022,0,0,0,.049,22.939l.058.065a17.908,17.908,0,0,0,20.621,5.17.819.819,0,1,0-.614-1.516Zm-7.013,1.147c-2.613-.418-4.916-2.867-6.4-6.472a31.526,31.526,0,0,1,6.4-.827Zm0-8.938a32.971,32.971,0,0,0-6.972.893,26.892,26.892,0,0,1-1.221-7.447h8.193Zm-15.525-6.554h5.694a28.4,28.4,0,0,0,1.278,7.9,33,33,0,0,0-3.572,1.27,16.271,16.271,0,0,1-3.4-9.167Zm23.513-10.65a31.62,31.62,0,0,1-6.349.819V97.826C117.5,98.26,119.779,100.718,121.262,104.3Zm-7.988,9.012h-8.193a26.606,26.606,0,0,1,1.229-7.472,32.935,32.935,0,0,0,6.964.918Zm1.639-6.554a33.011,33.011,0,0,0,6.915-.885,26.6,26.6,0,0,1,1.229,7.439h-8.143Zm15.566,6.554h-5.735a28.367,28.367,0,0,0-1.27-7.889,32.215,32.215,0,0,0,3.621-1.278,16.272,16.272,0,0,1,3.383,9.167Zm-4.506-10.478a31.271,31.271,0,0,1-3.056,1.049,15.715,15.715,0,0,0-3.179-5.129,16.479,16.479,0,0,1,6.194,4.08Zm-12.7-5.014v7.3a31.52,31.52,0,0,1-6.4-.819C108.359,100.685,110.661,98.236,113.274,97.818Zm-9.831,15.492H97.708a16.387,16.387,0,0,1,3.383-9.167,33.17,33.17,0,0,0,3.58,1.27A28.3,28.3,0,0,0,103.443,113.31Zm-1.188,12.117a31.135,31.135,0,0,1,3.007-1.032,16,16,0,0,0,3.146,5.08,16.318,16.318,0,0,1-6.153-4.047Zm0,0"
                                        transform="translate(-86.239 -86.169)" fill="url(#linear-gradient)" />
                                    <path id="Path_122" data-name="Path 122"
                                        d="M428.013,138.529a.819.819,0,0,0,.754.508.684.684,0,0,0,.311-.066.819.819,0,0,0,.442-1.065,21.7,21.7,0,0,0-3.408-5.628.819.819,0,0,0-1.253,1.024,20.263,20.263,0,0,1,3.154,5.227Zm0,0"
                                        transform="translate(-381.249 -118.45)" fill="url(#linear-gradient)" />
                                    <path id="Path_123" data-name="Path 123"
                                        d="M61.1,131.3A22.121,22.121,0,0,0,56,145.427a.819.819,0,0,0,1.639,0,20.481,20.481,0,0,1,4.727-13.108.82.82,0,1,0-1.262-1.048Zm0,0"
                                        transform="translate(-50.266 -117.467)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>تصميم الهوية الكامل</h4>
                            <p>حيث نسعى جاهدين لتقديم تصاميم عالية الجودة وحديثة وجذابة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62"
                                height="50" viewBox="0 0 62 50">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="1.101" y1="-0.093" x2="0.151" y2="0.983"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0098ff" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="Mask_Group_2" data-name="Mask Group 2" transform="translate(-3.251 -1456.933)"
                                    clip-path="url(#clip-path)">
                                    <g id="bullhorn" transform="translate(10.972 1458.266)">
                                        <path id="Path_85" data-name="Path 85"
                                            d="M61.585,567.891H60.033v-7.6a.776.776,0,1,0-1.552,0v7.6H38.306V552.372h6.456a.776.776,0,0,0,0-1.552H37.53a.776.776,0,0,0-.776.776v16.3H35.2a.776.776,0,0,0-.776.776v1.552a3.88,3.88,0,0,0,3.88,3.88H58.481a3.88,3.88,0,0,0,3.88-3.88v-1.552A.776.776,0,0,0,61.585,567.891Zm-.776,2.328a2.328,2.328,0,0,1-2.328,2.328H56.929v-.776a.776.776,0,1,0-1.552,0v.776H41.41v-.776a.776.776,0,1,0-1.552,0v.776H38.306a2.328,2.328,0,0,1-2.328-2.328v-.776H60.809Z"
                                            transform="translate(-34.426 -526.765)" fill="url(#linear-gradient)" />
                                        <path id="Path_86" data-name="Path 86"
                                            d="M847.322,104.831h1.552a.776.776,0,1,0,0-1.552h-1.552a2.328,2.328,0,0,0-2.328,2.328v.776h-.776a.776.776,0,0,0,0,1.552h.776v2.328a.776.776,0,1,0,1.552,0v-2.328h.776a.776.776,0,0,0,0-1.552h-.776v-.776A.776.776,0,0,1,847.322,104.831Z"
                                            transform="translate(-806.973 -99.399)" fill="url(#linear-gradient)" />
                                        <path id="Path_87" data-name="Path 87"
                                            d="M769.016,34.426H759.7a2.328,2.328,0,0,0-2.328,2.328v1.552a.776.776,0,1,0,1.552,0V36.754a.776.776,0,0,1,.776-.776h9.312a.776.776,0,0,1,.776.776v9.311a.776.776,0,0,1-.776.776H759.7a.776.776,0,0,1-.776-.776V41.41a.776.776,0,1,0-1.552,0v4.656a2.328,2.328,0,0,0,2.328,2.328h9.312a2.328,2.328,0,0,0,2.328-2.328V36.754A2.328,2.328,0,0,0,769.016,34.426Z"
                                            transform="translate(-724.787 -33.65)" fill="url(#linear-gradient)" />
                                        <path id="Path_88" data-name="Path 88"
                                            d="M843.443,657.2a3.1,3.1,0,1,0,3.1-3.1A3.1,3.1,0,0,0,843.443,657.2Zm4.656,0a1.552,1.552,0,1,1-1.552-1.552A1.552,1.552,0,0,1,848.1,657.2Z"
                                            transform="translate(-806.973 -625.388)" fill="url(#linear-gradient)" />
                                        <path id="Path_89" data-name="Path 89"
                                            d="M769.016,568.033H759.7a2.328,2.328,0,0,0-2.328,2.328v9.312A2.328,2.328,0,0,0,759.7,582h9.312a2.328,2.328,0,0,0,2.328-2.328V578.12a.776.776,0,0,0-1.552,0v1.552a.776.776,0,0,1-.776.776H759.7a.776.776,0,0,1-.776-.776v-9.312a.776.776,0,0,1,.776-.776h9.312a.776.776,0,0,1,.776.776v4.656a.776.776,0,1,0,1.552,0v-4.656A2.328,2.328,0,0,0,769.016,568.033Z"
                                            transform="translate(-724.787 -543.202)" fill="url(#linear-gradient)" />
                                        <path id="Path_90" data-name="Path 90"
                                            d="M413.479,109.42a.772.772,0,0,0,.76.031l4.656-2.328a.776.776,0,0,0,0-1.381l-4.656-2.328a.776.776,0,0,0-1.125.691v4.656A.776.776,0,0,0,413.479,109.42Zm1.187-4.058,2.142,1.071-2.142,1.071Z"
                                            transform="translate(-396.044 -99.449)" fill="url(#linear-gradient)" />
                                        <path id="Path_91" data-name="Path 91"
                                            d="M316.82,31.18a6.984,6.984,0,1,0-6.984-6.984A6.984,6.984,0,0,0,316.82,31.18Zm0-12.415a5.432,5.432,0,1,1-5.432,5.432A5.432,5.432,0,0,1,316.82,18.765Z"
                                            transform="translate(-297.421 -17.213)" fill="url(#linear-gradient)" />
                                        <path id="Path_92" data-name="Path 92"
                                            d="M620.447,297.278a.776.776,0,0,0,.621-.31l2.328-3.1a.776.776,0,0,0-1.242-.931l-2.328,3.1a.776.776,0,0,0,.621,1.242Z"
                                            transform="translate(-593.289 -280.207)" fill="url(#linear-gradient)" />
                                        <path id="Path_93" data-name="Path 93"
                                            d="M671.466,382.257a.776.776,0,0,0,1.086.155l3.1-2.328a.776.776,0,1,0-.931-1.242l-3.1,2.328A.776.776,0,0,0,671.466,382.257Z"
                                            transform="translate(-642.6 -362.393)" fill="url(#linear-gradient)" />
                                        <path id="Path_94" data-name="Path 94"
                                            d="M726.656,482.2a.776.776,0,0,0-.931-.621l-3.88.776a.78.78,0,1,0,.155,1.552h.155l3.88-.776a.776.776,0,0,0,.621-.931Z"
                                            transform="translate(-690.186 -460.629)" fill="url(#linear-gradient)" />
                                        <path id="Path_95" data-name="Path 95"
                                            d="M35.2,203.311h9.311a.776.776,0,0,0,.776-.776V190.12a.776.776,0,0,0-.776-.776H35.2a.776.776,0,0,0-.776.776v12.415A.776.776,0,0,0,35.2,203.311Zm.776-12.415h7.76V201.76h-7.76Z"
                                            transform="translate(-34.426 -181.585)" fill="url(#linear-gradient)" />
                                        <path id="Path_96" data-name="Path 96"
                                            d="M140.033,258.2h-1.552a.776.776,0,0,0,0,1.552h1.552a.776.776,0,1,0,0-1.552Z"
                                            transform="translate(-133.049 -247.333)" fill="url(#linear-gradient)" />
                                        <path id="Path_97" data-name="Path 97"
                                            d="M107.158,327.049h-3.1a.776.776,0,1,0,0,1.552h3.1a.776.776,0,1,0,0-1.552Z"
                                            transform="translate(-100.175 -313.082)" fill="url(#linear-gradient)" />
                                        <path id="Path_98" data-name="Path 98"
                                            d="M107.158,395.9h-3.1a.776.776,0,0,0,0,1.552h3.1a.776.776,0,0,0,0-1.552Z"
                                            transform="translate(-100.175 -378.831)" fill="url(#linear-gradient)" />
                                        <path id="Path_99" data-name="Path 99"
                                            d="M176.519,400.369a.779.779,0,1,0-1.35.776l3.422,5.921-12.415,4.656h-.116l-2.017,1.164-1.342.776a1.549,1.549,0,0,1-2.118-.566l-1.552-2.685a1.552,1.552,0,0,1,.582-2.048l2.685-1.552,1.94,3.36a.779.779,0,0,0,1.35-.776l-2-3.461,9.738-8.031.318.551a.779.779,0,1,0,1.35-.776l-.776-1.342a.786.786,0,0,0-1.172-.21l-10.863,8.954-3.306,1.909a3.1,3.1,0,0,0-1.428,3.515l-.776.442a2.326,2.326,0,0,0,1.164,4.345,2.375,2.375,0,0,0,1.164-.31l.776-.442a3.011,3.011,0,0,0,1.358.807,2.939,2.939,0,0,0,.815.109,3.058,3.058,0,0,0,1.552-.419l.675-.388,1.552,2.693a2.326,2.326,0,1,0,4.027-2.328l-1.412-2.46,11.639-4.369a.778.778,0,0,0,.4-1.11ZM158.191,413.63a.775.775,0,1,1-.776-1.342l.675-.388.776,1.342ZM168.4,415.8a.775.775,0,0,1-1.342.776l-1.552-2.693,1.288-.737h.062Z"
                                            transform="translate(-150.043 -378.875)" fill="url(#linear-gradient)" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>تصميم الهوية الكامل</h4>
                            <p>حيث نسعى جاهدين لتقديم تصاميم عالية الجودة وحديثة وجذابة</p>
                        </div>
                    </div>
                </div>
            @else
            <div class="main-heading">
                <span>We give you the best</span>
                <h2>Services</h2>
            </div>
            <p class="desc">We are a company that always seeks the convenience of the customer, implement the required and
                meet his desire with accuracy and professionalism, as we have a very strong and perfect team in work and
                discipline.</p>
            <div class="row mt-50">
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62"
                                height="51" viewBox="0 0 62 51">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="1.101" y1="-0.093" x2="0.151" y2="0.983"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0098ff" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="computer" transform="translate(-8 -56)">
                                    <path id="Path_124" data-name="Path 124"
                                        d="M66,56H12a4.005,4.005,0,0,0-4,4V94a4.005,4.005,0,0,0,4,4H32.612l-1.334,4H28a1,1,0,0,0-1,1v2H18a1,1,0,0,0,0,2H62a1,1,0,0,0,0-2H51v-2a1,1,0,0,0-1-1H46.721l-1.334-4H66a4.005,4.005,0,0,0,4-4V60A4.005,4.005,0,0,0,66,56ZM49,104v1H29v-1Zm-15.612-2,1.334-4h8.558l1.334,4ZM68,94a2,2,0,0,1-2,2H12a2,2,0,0,1-2-2V92H68ZM24.958,81l-.375,9H23.417l-.375-9ZM23.18,79l.667-4h.305l.668,4ZM24,73c-1.084,0-2-1.374-2-3,0-1.026,1.048-2.518,2-3.569.856.95,2,2.469,2,3.569C26,71.626,25.084,73,24,73Zm10.883-2,.118.236V72H31v-.764L31.118,71Zm-2.765-2L33,67.236,33.882,69ZM35,74V89.875a1.032,1.032,0,0,0,.009.125H30.991A1.032,1.032,0,0,0,31,89.875V74Zm9-4h3v2H46a1,1,0,0,0,0,2h1v2H44a1,1,0,0,0,0,2h3v2H46a1,1,0,0,0,0,2h1v2H44a1,1,0,1,0,0,2h3v4H40V66h7v2H44a1,1,0,0,0,0,2ZM56,82v7.875a1.031,1.031,0,0,0,.009.125H51.991A1.032,1.032,0,0,0,52,89.875V82Zm-4-2v-.764l2-4,2,4V80ZM68,90H57.991A1.032,1.032,0,0,0,58,89.875V79a1.01,1.01,0,0,0-.1-.447l-3-6a1,1,0,0,0-1.79,0l-3,6A1.01,1.01,0,0,0,50,79V89.875a1.032,1.032,0,0,0,.009.125H49V65a1,1,0,0,0-1-1H39a1,1,0,0,0-1,1V90H36.991A1.032,1.032,0,0,0,37,89.875V71a1.01,1.01,0,0,0-.1-.447l-3-6a1,1,0,0,0-1.79,0l-3,6A1.01,1.01,0,0,0,29,71V89.875a1.033,1.033,0,0,0,.009.125H26.584L27,80.041c0-.022,0-.045,0-.069v-.03a1,1,0,0,0-.013-.1v0l-.925-5.551A5.355,5.355,0,0,0,28,70c0-2.57-2.979-5.416-3.319-5.732a1,1,0,0,0-1.362,0C22.979,64.584,20,67.43,20,70a5.355,5.355,0,0,0,1.939,4.284l-.925,5.551v0a1,1,0,0,0-.012.1v.03c0,.024,0,.046,0,.069L21.416,90H10V60a2,2,0,0,1,2-2H66a2,2,0,0,1,2,2Z"
                                        fill="url(#linear-gradient)" />
                                    <path id="Path_125" data-name="Path 125" d="M47,352H41a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"
                                        transform="translate(-28 -259)" fill="url(#linear-gradient)" />
                                    <path id="Path_126" data-name="Path 126" d="M114,352h-1a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Z"
                                        transform="translate(-91 -259)" fill="url(#linear-gradient)" />
                                    <path id="Path_127" data-name="Path 127"
                                        d="M201,208a1,1,0,0,0-1,1v11a1,1,0,1,0,2,0V209A1,1,0,0,0,201,208Z"
                                        transform="translate(-168 -133)" fill="url(#linear-gradient)" />
                                    <path id="Path_128" data-name="Path 128"
                                        d="M369,272a1,1,0,0,0-1,1v3a1,1,0,1,0,2,0v-3A1,1,0,0,0,369,272Z"
                                        transform="translate(-315 -189)" fill="url(#linear-gradient)" />
                                    <path id="Path_129" data-name="Path 129" d="M41,90h8a1,1,0,0,0,0-2H41a1,1,0,0,0,0,2Z"
                                        transform="translate(-28 -28)" fill="url(#linear-gradient)" />
                                    <path id="Path_130" data-name="Path 130" d="M41,114h2a1,1,0,1,0,0-2H41a1,1,0,0,0,0,2Z"
                                        transform="translate(-28 -49)" fill="url(#linear-gradient)" />
                                    <path id="Path_131" data-name="Path 131" d="M425,298h4a1,1,0,0,0,0-2h-4a1,1,0,0,0,0,2Z"
                                        transform="translate(-364 -210)" fill="url(#linear-gradient)" />
                                    <path id="Path_132" data-name="Path 132" d="M449,274h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Z"
                                        transform="translate(-385 -189)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>complete identity design</h4>
                            <p>As we strive to provide high quality, modern and attractive designs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="46.737" height="46.776" viewBox="0 0 46.737 46.776">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="-0.702" y1="2.155" x2="-9.357" y2="9.365"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0e6aa8" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                    <linearGradient id="linear-gradient-4" x1="-0.702" y1="2.155" x2="-9.357" y2="9.365"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#168ad8" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="web-development" transform="translate(-0.001)">
                                    <path id="Path_136" data-name="Path 136"
                                        d="M339.527,110.9a.64.64,0,0,0-.576-.618.254.254,0,0,0-.161.042l-2.149,1.4a.559.559,0,0,0,0,.948l2.149,1.4a.254.254,0,0,0,.161.042.64.64,0,0,0,.576-.618.388.388,0,0,0-.152-.33l-1.49-.965,1.49-.965a.389.389,0,0,0,.152-.33Zm0,0"
                                        transform="translate(-305.646 -100.206)" fill="url(#linear-gradient)" />
                                    <path id="Path_137" data-name="Path 137"
                                        d="M383.927,85.367a.372.372,0,0,0-.355.212l-2.97,6.1a.38.38,0,0,0-.042.161.468.468,0,0,0,.474.448.424.424,0,0,0,.381-.211l2.979-6.1a.367.367,0,0,0,.034-.161.485.485,0,0,0-.5-.448Zm0,0"
                                        transform="translate(-345.79 -77.568)" fill="url(#linear-gradient)" />
                                    <path id="Path_138" data-name="Path 138"
                                        d="M435.5,111.719l-2.149-1.4a.256.256,0,0,0-.161-.042.64.64,0,0,0-.575.618.388.388,0,0,0,.152.33l1.489.965-1.489.965a.388.388,0,0,0-.152.33.64.64,0,0,0,.575.618.256.256,0,0,0,.161-.042l2.149-1.4a.559.559,0,0,0,0-.948Zm0,0"
                                        transform="translate(-393.092 -100.206)" fill="url(#linear-gradient)" />
                                    <path id="Path_139" data-name="Path 139"
                                        d="M43.464,3.407H28.711A5.3,5.3,0,0,0,23.763,0h-9.9a5.3,5.3,0,0,0-5.3,5.3v6.013a2.234,2.234,0,0,0-.719,2.1l.389,2.141a1.864,1.864,0,0,0,.833,1.3,2.014,2.014,0,0,0,1.06.281v.38a8.329,8.329,0,0,0,3.089,5.836,12.613,12.613,0,0,0,1.146.923v1.148a.726.726,0,0,1-.593.714l-.047.01c-.012,0-1.188.31-2.726.746H5.978a2.042,2.042,0,0,0-2.037,2.188l.014.193a6.56,6.56,0,0,0-3.8,5.444v.029L0,44.178a2.567,2.567,0,0,0,2.567,2.6H35.063a2.568,2.568,0,0,0,2.567-2.6l-.156-9.429c0-.01,0-.019,0-.029a6.593,6.593,0,0,0-3.993-5.539l-.135-.062,0-.036a2.042,2.042,0,0,0-2.037-2.188H26.629c-1.537-.436-2.714-.743-2.726-.746l-.047-.011a.726.726,0,0,1-.593-.714V24.274a12.679,12.679,0,0,0,1.146-.923,10.01,10.01,0,0,0,2.654-3.674h4.452l-.778,3.139a1.237,1.237,0,0,0,.529,1.348,1.236,1.236,0,0,0,1.447-.055l5.769-4.432h4.982A3.277,3.277,0,0,0,46.738,16.4V6.681a3.278,3.278,0,0,0-3.274-3.274ZM27.5,12.492a2.956,2.956,0,0,1,.672-.141.884.884,0,0,1,.26.817l-.387,2.13c-.056.3-.171.368-.208.391a.669.669,0,0,1-.338.076ZM9.943,5.3A3.929,3.929,0,0,1,13.868,1.37h9.9A3.929,3.929,0,0,1,27.688,5.3v5.741a3.988,3.988,0,0,0-1.173.395V7.256a2.726,2.726,0,0,0-2.723-2.723H21.94a2.8,2.8,0,0,0-1.766.63l-.181.148a1.86,1.86,0,0,1-2.354,0l-.182-.149a2.8,2.8,0,0,0-1.766-.63H13.839a2.726,2.726,0,0,0-2.723,2.723v4.175a3.986,3.986,0,0,0-1.173-.394ZM9.8,15.689c-.037-.023-.152-.094-.207-.385L9.2,13.168a.886.886,0,0,1,.259-.817,2.957,2.957,0,0,1,.672.14v3.273a.671.671,0,0,1-.338-.076ZM3.734,44.91a1.866,1.866,0,0,0,.067.5H2.569a1.2,1.2,0,0,1-1.2-1.209l.156-9.414a5.03,5.03,0,0,1,2.535-4L4.9,42.516a2.026,2.026,0,0,0,.142.613,1.87,1.87,0,0,0-1.307,1.78Zm28.656-2.394.85-11.926A5.1,5.1,0,0,1,36.1,34.783l.156,9.411a1.2,1.2,0,0,1-1.2,1.212H33.831a1.867,1.867,0,0,0-1.556-2.347,2.017,2.017,0,0,0,.115-.543Zm.138,2.394a.5.5,0,0,1-.5.5H5.6a.5.5,0,0,1,0-.992H32.031A.5.5,0,0,1,32.527,44.91ZM31.8,28.476a.665.665,0,0,1,.178.506l-.958,13.437a.674.674,0,0,1-.671.624H6.936a.675.675,0,0,1-.671-.625L5.308,28.982a.672.672,0,0,1,.671-.72H31.31a.667.667,0,0,1,.492.214Zm-9.308-1.585H15.138a2.094,2.094,0,0,0,.6-1.47v-.307a6.945,6.945,0,0,0,3.076.873,6.948,6.948,0,0,0,3.076-.873v.307a2.094,2.094,0,0,0,.6,1.47Zm.994-4.556a7.962,7.962,0,0,1-4.672,2.282,7.963,7.963,0,0,1-4.671-2.282A6.994,6.994,0,0,1,11.5,17.515V13.2h.027a.958.958,0,0,0,.956-.957V7.256A1.354,1.354,0,0,1,13.839,5.9h1.852a1.423,1.423,0,0,1,.9.32l.182.149a3.23,3.23,0,0,0,4.089,0l.182-.148a1.424,1.424,0,0,1,.9-.32h1.851a1.354,1.354,0,0,1,1.353,1.353v4.986a.958.958,0,0,0,.983.956v4.317a6.993,6.993,0,0,1-2.639,4.82ZM45.368,16.4a1.906,1.906,0,0,1-1.9,1.9H38.249a.684.684,0,0,0-.417.142l-5.684,4.366.906-3.658a.685.685,0,0,0-.665-.85H27.436a5.3,5.3,0,0,0,.061-.792v-.38a2.014,2.014,0,0,0,1.059-.281,1.866,1.866,0,0,0,.834-1.306l.388-2.135a2.234,2.234,0,0,0-.719-2.1V5.3c0-.175-.009-.348-.025-.518H43.464a1.906,1.906,0,0,1,1.9,1.9Zm0,0"
                                        transform="translate(0)" fill="url(#linear-gradient-4)" />
                                    <path id="Path_140" data-name="Path 140"
                                        d="M180.319,373.128a2.576,2.576,0,1,0-2.576-2.576A2.579,2.579,0,0,0,180.319,373.128Zm0-3.781a1.206,1.206,0,1,1-1.206,1.206A1.207,1.207,0,0,1,180.319,369.347Zm0,0"
                                        transform="translate(-161.503 -334.358)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>complete identity design</h4>
                            <p>As we strive to provide high quality, modern and attractive designs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="box">
                        <div class="icon">
                            <svg id="social-media-marketing" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="48.307" height="48.306"
                                viewBox="0 0 48.307 48.306">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0e6aa8" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <path id="Path_100" data-name="Path 100"
                                    d="M.708,65.379a.708.708,0,0,0,.708-.708V59.149a3.631,3.631,0,0,1,3.621-3.632H6.109a.708.708,0,1,0,0-1.415H5.037A5.048,5.048,0,0,0,0,59.149v5.523a.708.708,0,0,0,.708.708Z"
                                    transform="translate(0 -48.997)" fill="url(#linear-gradient)" />
                                <path id="Path_101" data-name="Path 101"
                                    d="M43.27,54.1H26.616a.708.708,0,1,0,0,1.415H43.27a3.631,3.631,0,0,1,3.621,3.632V86.186a3.631,3.631,0,0,1-3.621,3.632H5.037a3.631,3.631,0,0,1-3.621-3.632V67.965a.708.708,0,1,0-1.415,0v18.22a5.048,5.048,0,0,0,5.037,5.048H19.4l-1.425,4.655H14.84a.708.708,0,1,0,0,1.415H33.467a.708.708,0,0,0,0-1.415H30.329L28.9,91.233H43.27a5.048,5.048,0,0,0,5.037-5.048V59.15A5.048,5.048,0,0,0,43.27,54.1ZM19.458,95.889l1.425-4.655h6.541l1.425,4.655Z"
                                    transform="translate(0 -48.998)" fill="url(#linear-gradient)" />
                                <path id="Path_102" data-name="Path 102"
                                    d="M32.161,84.017H33.3a.708.708,0,0,0,0-1.415H32.161a2.242,2.242,0,0,0-2.237,2.241v24.346a2.242,2.242,0,0,0,2.237,2.241H45.352a.708.708,0,1,0,0-1.415H32.161a.825.825,0,0,1-.822-.826V84.843A.825.825,0,0,1,32.161,84.017Z"
                                    transform="translate(-27.101 -74.809)" fill="url(#linear-gradient)" />
                                <path id="Path_103" data-name="Path 103"
                                    d="M438.409,231.3a.708.708,0,0,0-.708.708v11.85a.825.825,0,0,1-.822.826h-1.53a.708.708,0,1,0,0,1.415h1.53a2.242,2.242,0,0,0,2.237-2.241v-11.85A.708.708,0,0,0,438.409,231.3Z"
                                    transform="translate(-393.633 -209.478)" fill="url(#linear-gradient)" />
                                <path id="Path_104" data-name="Path 104"
                                    d="M295.313,84.843a2.242,2.242,0,0,0-2.237-2.241H276.564a.708.708,0,0,0,0,1.415h16.512a.825.825,0,0,1,.822.826v9.163a.708.708,0,1,0,1.415,0Z"
                                    transform="translate(-249.829 -74.809)" fill="url(#linear-gradient)" />
                                <path id="Path_105" data-name="Path 105"
                                    d="M180.276,174.966a1.814,1.814,0,0,0-1.566,1.793v.423H177.4a.708.708,0,1,0,0,1.415h1.309v.423a1.814,1.814,0,0,0,1.566,1.793l.184.025v2.79a.708.708,0,0,0,1.415,0v-2.6l3.873.521a2.121,2.121,0,0,0,4.211-.358v-6.6a2.121,2.121,0,0,0-4.211-.358Zm5.442,5.152-5.253-.707a.394.394,0,0,1-.34-.39v-2.262a.394.394,0,0,1,.34-.39l5.253-.707Zm1.415-5.531a.706.706,0,1,1,1.411,0v6.6a.706.706,0,1,1-1.411,0Z"
                                    transform="translate(-160.022 -156.193)" fill="url(#linear-gradient)" />
                                <path id="Path_106" data-name="Path 106"
                                    d="M89.317,12.82h4.217l1.273,1.835a.708.708,0,0,0,1.163,0l1.273-1.835h4.217a2.126,2.126,0,0,0,2.123-2.124V2.123A2.126,2.126,0,0,0,101.46,0H94.226a.708.708,0,0,0,0,1.415h7.234a.709.709,0,0,1,.708.708V10.7a.709.709,0,0,1-.708.708H96.873a.708.708,0,0,0-.581.3l-.9,1.3-.9-1.3a.707.707,0,0,0-.581-.3H89.317a.709.709,0,0,1-.708-.708V2.123a.709.709,0,0,1,.708-.708h1.617a.708.708,0,0,0,0-1.415H89.317a2.126,2.126,0,0,0-2.123,2.123V10.7A2.126,2.126,0,0,0,89.317,12.82Z"
                                    transform="translate(-78.967)" fill="url(#linear-gradient)" />
                                <path id="Path_107" data-name="Path 107"
                                    d="M57.263,402.938a.708.708,0,0,0,0,1.415h2.891a.708.708,0,0,0,0-1.415Z"
                                    transform="translate(-51.219 -364.921)" fill="url(#linear-gradient)" />
                                <path id="Path_108" data-name="Path 108"
                                    d="M117.263,402.938a.708.708,0,0,0,0,1.415h2.891a.708.708,0,0,0,0-1.415Z"
                                    transform="translate(-105.558 -364.921)" fill="url(#linear-gradient)" />
                                <path id="Path_109" data-name="Path 109"
                                    d="M140.4,41.21a.707.707,0,0,0,1,0l2.332-2.332a2.12,2.12,0,0,0-1.5-3.621h0a2.108,2.108,0,0,0-1.333.472,2.108,2.108,0,0,0-1.333-.472h0a2.12,2.12,0,0,0-1.5,3.621Zm-1.333-4.332a.7.7,0,0,1,.5-.206h0a.7.7,0,0,1,.5.208l.334.334a.707.707,0,0,0,1,0l.334-.334a.7.7,0,0,1,.5-.208h0a.7.7,0,0,1,.5.206.707.707,0,0,1,0,1L140.9,39.709l-1.832-1.832a.707.707,0,0,1,0-1Z"
                                    transform="translate(-124.478 -31.931)" fill="url(#linear-gradient)" />
                                <path id="Path_110" data-name="Path 110"
                                    d="M87.9,285.815h3.033a.708.708,0,1,0,0-1.415H87.9a.708.708,0,1,0,0,1.415Z"
                                    transform="translate(-78.967 -257.567)" fill="url(#linear-gradient)" />
                                <path id="Path_111" data-name="Path 111"
                                    d="M87.9,320.815h4.917a.708.708,0,0,0,0-1.415H87.9a.708.708,0,0,0,0,1.415Z"
                                    transform="translate(-78.967 -289.265)" fill="url(#linear-gradient)" />
                                <path id="Path_112" data-name="Path 112"
                                    d="M385.323,173.223a.708.708,0,0,0-.708-.708h-3.033a.708.708,0,1,0,0,1.415h3.033A.708.708,0,0,0,385.323,173.223Z"
                                    transform="translate(-344.94 -156.239)" fill="url(#linear-gradient)" />
                                <path id="Path_113" data-name="Path 113"
                                    d="M366.529,137.515h-4.917a.708.708,0,0,0,0,1.415h4.917a.708.708,0,0,0,0-1.415Z"
                                    transform="translate(-326.854 -124.541)" fill="url(#linear-gradient)" />
                                <path id="Path_114" data-name="Path 114"
                                    d="M219.125,325.823h.627a.707.707,0,0,0,.573-.293l1.231-1.7,1.231,1.7a.708.708,0,0,0,.573.293h3.9a.708.708,0,0,0,0-1.415h-3.541l-1.592-2.2a.708.708,0,0,0-1.146,0l-1.592,2.2h-.265a3.051,3.051,0,0,0,0,6.1h13.132a3.051,3.051,0,0,0,0-6.1h-1.72a.708.708,0,1,0,0,1.415h1.72a1.636,1.636,0,0,1,0,3.271H219.125a1.636,1.636,0,0,1,0-3.271Z"
                                    transform="translate(-195.691 -291.545)" fill="url(#linear-gradient)" />
                            </svg>

                        </div>
                        <div class="info">
                            <h4>complete identity design</h4>
                            <p>As we strive to provide high quality, modern and attractive designs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="39.885" height="49.856" viewBox="0 0 39.885 49.856">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0d4b74" />
                                        <stop offset="1" stop-color="#0098ff" />
                                    </linearGradient>
                                </defs>
                                <g id="surface1" transform="translate(-0.25)">
                                    <path id="Path_141" data-name="Path 141"
                                        d="M588.87,363.484l-1.12,1.225,5.1,4.671a5.831,5.831,0,0,1,1.884,4.288V394.01h1.662V373.669a7.5,7.5,0,0,0-2.425-5.513Zm0,0"
                                        transform="translate(-556.257 -344.154)" fill="url(#linear-gradient)" />
                                    <path id="Path_142" data-name="Path 142"
                                        d="M26.009,0H4.4A4.16,4.16,0,0,0,.25,4.155V45.7A4.16,4.16,0,0,0,4.4,49.856H25.178V48.369a18.891,18.891,0,0,1,3.184-10.516.831.831,0,0,0-.1-1.049l-5.817-5.817a2.695,2.695,0,0,1,.2-3.988,2.8,2.8,0,0,1,3.72.286l8.2,8.2,1.175-1.175-5.573-5.575V4.155A4.16,4.16,0,0,0,26.009,0ZM28.5,27.077l-.967-.967a4.472,4.472,0,0,0-5.953-.393,4.357,4.357,0,0,0-.315,6.447l5.343,5.343a20.545,20.545,0,0,0-3.088,10.688H4.4A2.493,2.493,0,0,1,1.912,45.7V43.208H22.685V41.547H1.912V6.647H28.5Zm0-22.091H1.912V4.155A2.493,2.493,0,0,1,4.4,1.662h21.6A2.493,2.493,0,0,1,28.5,4.155Zm0,0"
                                        fill="url(#linear-gradient)" />
                                    <path id="Path_143" data-name="Path 143"
                                        d="M64.412,162.9h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,162.9Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -147.941)" fill="url(#linear-gradient)" />
                                    <path id="Path_144" data-name="Path 144"
                                        d="M220.662,162.9h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324A1.662,1.662,0,0,0,219,157.912v3.324A1.662,1.662,0,0,0,220.662,162.9Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -147.941)" fill="url(#linear-gradient)" />
                                    <path id="Path_145" data-name="Path 145"
                                        d="M376.912,162.9h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,376.912,162.9Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-355.058 -147.941)" fill="url(#linear-gradient)" />
                                    <path id="Path_146" data-name="Path 146"
                                        d="M64.412,319.147h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,319.147Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -295.881)" fill="url(#linear-gradient)" />
                                    <path id="Path_147" data-name="Path 147"
                                        d="M64.412,475.4h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,475.4Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -443.822)" fill="url(#linear-gradient)" />
                                    <path id="Path_148" data-name="Path 148"
                                        d="M220.662,319.147h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324A1.662,1.662,0,0,0,219,314.162v3.324A1.662,1.662,0,0,0,220.662,319.147Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -295.881)" fill="url(#linear-gradient)" />
                                    <path id="Path_149" data-name="Path 149"
                                        d="M376.912,319.147h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,376.912,319.147Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-355.058 -295.881)" fill="url(#linear-gradient)" />
                                    <path id="Path_150" data-name="Path 150"
                                        d="M220.662,475.4h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324a1.662,1.662,0,0,0-1.662-1.662h-3.324A1.662,1.662,0,0,0,219,470.412v3.324A1.662,1.662,0,0,0,220.662,475.4Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -443.822)" fill="url(#linear-gradient)" />
                                    <path id="Path_151" data-name="Path 151"
                                        d="M64.412,631.647h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324A1.662,1.662,0,0,0,67.736,625H64.412a1.662,1.662,0,0,0-1.662,1.662v3.324A1.662,1.662,0,0,0,64.412,631.647Zm0-4.986h3.324v3.324H64.412Zm0,0"
                                        transform="translate(-59.176 -591.763)" fill="url(#linear-gradient)" />
                                    <path id="Path_152" data-name="Path 152"
                                        d="M220.662,631.647h3.324a1.662,1.662,0,0,0,1.662-1.662v-3.324A1.662,1.662,0,0,0,223.986,625h-3.324A1.662,1.662,0,0,0,219,626.662v3.324A1.662,1.662,0,0,0,220.662,631.647Zm0-4.986h3.324v3.324h-3.324Zm0,0"
                                        transform="translate(-207.117 -591.763)" fill="url(#linear-gradient)" />
                                    <path id="Path_153" data-name="Path 153" d="M265.875,843.75h1.662v1.662h-1.662Zm0,0"
                                        transform="translate(-251.499 -798.88)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>complete identity design</h4>
                            <p>As we strive to provide high quality, modern and attractive designs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="49.177" height="49.156" viewBox="0 0 49.177 49.156">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#028dec" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="global" transform="translate(0 -0.105)">
                                    <path id="Path_115" data-name="Path 115"
                                        d="M41.639,32.925a.819.819,0,1,1-.819-.819A.819.819,0,0,1,41.639,32.925Zm0,0"
                                        transform="translate(-35.904 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_116" data-name="Path 116"
                                        d="M73.639,32.925a.819.819,0,1,1-.819-.819A.819.819,0,0,1,73.639,32.925Zm0,0"
                                        transform="translate(-64.627 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_117" data-name="Path 117"
                                        d="M105.639,32.925a.819.819,0,1,1-.819-.819A.819.819,0,0,1,105.639,32.925Zm0,0"
                                        transform="translate(-93.35 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_118" data-name="Path 118"
                                        d="M160.819,32.105a.819.819,0,0,0,0,1.639H181.3a.819.819,0,0,0,0-1.639Zm0,0"
                                        transform="translate(-143.615 -28.723)" fill="url(#linear-gradient)" />
                                    <path id="Path_119" data-name="Path 119"
                                        d="M11.813,40.249H1.638V8.3H37.686a.819.819,0,1,0,0-1.639H1.638V1.744H40.143V11.919a.819.819,0,1,0,1.639,0V.925a.819.819,0,0,0-.819-.819H.819A.819.819,0,0,0,0,.925V41.069a.819.819,0,0,0,.819.819H11.813a.819.819,0,1,0,0-1.639Zm0,0"
                                        transform="translate(0 0)" fill="url(#linear-gradient)" />
                                    <path id="Path_120" data-name="Path 120"
                                        d="M353.724,350.347l-4.506-4.473,2.638-1.761a.815.815,0,0,0-.246-1.475l-11-2.925a.82.82,0,0,0-1,1l2.884,11a.815.815,0,0,0,1.475.246l1.8-2.638,4.506,4.506a.831.831,0,0,0,1.163,0l2.319-2.319a.819.819,0,0,0-.033-1.163Zm-2.9,1.745-4.637-4.637a.817.817,0,0,0-.573-.238h-.082a.818.818,0,0,0-.6.36l-1.311,1.958-2.073-7.881,7.881,2.073-1.958,1.327a.81.81,0,0,0-.123,1.253l4.637,4.637Zm0,0"
                                        transform="translate(-304.806 -304.806)" fill="url(#linear-gradient)" />
                                    <path id="Path_121" data-name="Path 121"
                                        d="M120.287,129.294a16.271,16.271,0,0,1-5.374,1.221v-7.373a32.649,32.649,0,0,1,3.621.287.827.827,0,1,0,.23-1.639,34.642,34.642,0,0,0-3.851-.287v-6.554h8.193a29.339,29.339,0,0,1-.377,3.834.83.83,0,1,0,1.639.27,30.613,30.613,0,0,0,.377-4.1h5.735a16.268,16.268,0,0,1-1.18,5.374.818.818,0,1,0,1.516.614,18.072,18.072,0,0,0-16.721-24.832h-.59a18.081,18.081,0,0,0-10.88,4.1.821.821,0,1,0,1.04,1.27,16.539,16.539,0,0,1,4.76-2.736,16.016,16.016,0,0,0-3.162,5.1,32.317,32.317,0,0,1-4.1-1.467.819.819,0,0,0-.934.213.065.065,0,0,0-.058.049,18.022,18.022,0,0,0,.049,22.939l.058.065a17.908,17.908,0,0,0,20.621,5.17.819.819,0,1,0-.614-1.516Zm-7.013,1.147c-2.613-.418-4.916-2.867-6.4-6.472a31.526,31.526,0,0,1,6.4-.827Zm0-8.938a32.971,32.971,0,0,0-6.972.893,26.892,26.892,0,0,1-1.221-7.447h8.193Zm-15.525-6.554h5.694a28.4,28.4,0,0,0,1.278,7.9,33,33,0,0,0-3.572,1.27,16.271,16.271,0,0,1-3.4-9.167Zm23.513-10.65a31.62,31.62,0,0,1-6.349.819V97.826C117.5,98.26,119.779,100.718,121.262,104.3Zm-7.988,9.012h-8.193a26.606,26.606,0,0,1,1.229-7.472,32.935,32.935,0,0,0,6.964.918Zm1.639-6.554a33.011,33.011,0,0,0,6.915-.885,26.6,26.6,0,0,1,1.229,7.439h-8.143Zm15.566,6.554h-5.735a28.367,28.367,0,0,0-1.27-7.889,32.215,32.215,0,0,0,3.621-1.278,16.272,16.272,0,0,1,3.383,9.167Zm-4.506-10.478a31.271,31.271,0,0,1-3.056,1.049,15.715,15.715,0,0,0-3.179-5.129,16.479,16.479,0,0,1,6.194,4.08Zm-12.7-5.014v7.3a31.52,31.52,0,0,1-6.4-.819C108.359,100.685,110.661,98.236,113.274,97.818Zm-9.831,15.492H97.708a16.387,16.387,0,0,1,3.383-9.167,33.17,33.17,0,0,0,3.58,1.27A28.3,28.3,0,0,0,103.443,113.31Zm-1.188,12.117a31.135,31.135,0,0,1,3.007-1.032,16,16,0,0,0,3.146,5.08,16.318,16.318,0,0,1-6.153-4.047Zm0,0"
                                        transform="translate(-86.239 -86.169)" fill="url(#linear-gradient)" />
                                    <path id="Path_122" data-name="Path 122"
                                        d="M428.013,138.529a.819.819,0,0,0,.754.508.684.684,0,0,0,.311-.066.819.819,0,0,0,.442-1.065,21.7,21.7,0,0,0-3.408-5.628.819.819,0,0,0-1.253,1.024,20.263,20.263,0,0,1,3.154,5.227Zm0,0"
                                        transform="translate(-381.249 -118.45)" fill="url(#linear-gradient)" />
                                    <path id="Path_123" data-name="Path 123"
                                        d="M61.1,131.3A22.121,22.121,0,0,0,56,145.427a.819.819,0,0,0,1.639,0,20.481,20.481,0,0,1,4.727-13.108.82.82,0,1,0-1.262-1.048Zm0,0"
                                        transform="translate(-50.266 -117.467)" fill="url(#linear-gradient)" />
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>complete identity design</h4>
                            <p>As we strive to provide high quality, modern and attractive designs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="62"
                                height="50" viewBox="0 0 62 50">
                                <defs>
                                    <linearGradient id="linear-gradient" x1="1.101" y1="-0.093" x2="0.151" y2="0.983"
                                        gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#0098ff" />
                                        <stop offset="1" stop-color="#0d4b74" />
                                    </linearGradient>
                                </defs>
                                <g id="Mask_Group_2" data-name="Mask Group 2" transform="translate(-3.251 -1456.933)"
                                    clip-path="url(#clip-path)">
                                    <g id="bullhorn" transform="translate(10.972 1458.266)">
                                        <path id="Path_85" data-name="Path 85"
                                            d="M61.585,567.891H60.033v-7.6a.776.776,0,1,0-1.552,0v7.6H38.306V552.372h6.456a.776.776,0,0,0,0-1.552H37.53a.776.776,0,0,0-.776.776v16.3H35.2a.776.776,0,0,0-.776.776v1.552a3.88,3.88,0,0,0,3.88,3.88H58.481a3.88,3.88,0,0,0,3.88-3.88v-1.552A.776.776,0,0,0,61.585,567.891Zm-.776,2.328a2.328,2.328,0,0,1-2.328,2.328H56.929v-.776a.776.776,0,1,0-1.552,0v.776H41.41v-.776a.776.776,0,1,0-1.552,0v.776H38.306a2.328,2.328,0,0,1-2.328-2.328v-.776H60.809Z"
                                            transform="translate(-34.426 -526.765)" fill="url(#linear-gradient)" />
                                        <path id="Path_86" data-name="Path 86"
                                            d="M847.322,104.831h1.552a.776.776,0,1,0,0-1.552h-1.552a2.328,2.328,0,0,0-2.328,2.328v.776h-.776a.776.776,0,0,0,0,1.552h.776v2.328a.776.776,0,1,0,1.552,0v-2.328h.776a.776.776,0,0,0,0-1.552h-.776v-.776A.776.776,0,0,1,847.322,104.831Z"
                                            transform="translate(-806.973 -99.399)" fill="url(#linear-gradient)" />
                                        <path id="Path_87" data-name="Path 87"
                                            d="M769.016,34.426H759.7a2.328,2.328,0,0,0-2.328,2.328v1.552a.776.776,0,1,0,1.552,0V36.754a.776.776,0,0,1,.776-.776h9.312a.776.776,0,0,1,.776.776v9.311a.776.776,0,0,1-.776.776H759.7a.776.776,0,0,1-.776-.776V41.41a.776.776,0,1,0-1.552,0v4.656a2.328,2.328,0,0,0,2.328,2.328h9.312a2.328,2.328,0,0,0,2.328-2.328V36.754A2.328,2.328,0,0,0,769.016,34.426Z"
                                            transform="translate(-724.787 -33.65)" fill="url(#linear-gradient)" />
                                        <path id="Path_88" data-name="Path 88"
                                            d="M843.443,657.2a3.1,3.1,0,1,0,3.1-3.1A3.1,3.1,0,0,0,843.443,657.2Zm4.656,0a1.552,1.552,0,1,1-1.552-1.552A1.552,1.552,0,0,1,848.1,657.2Z"
                                            transform="translate(-806.973 -625.388)" fill="url(#linear-gradient)" />
                                        <path id="Path_89" data-name="Path 89"
                                            d="M769.016,568.033H759.7a2.328,2.328,0,0,0-2.328,2.328v9.312A2.328,2.328,0,0,0,759.7,582h9.312a2.328,2.328,0,0,0,2.328-2.328V578.12a.776.776,0,0,0-1.552,0v1.552a.776.776,0,0,1-.776.776H759.7a.776.776,0,0,1-.776-.776v-9.312a.776.776,0,0,1,.776-.776h9.312a.776.776,0,0,1,.776.776v4.656a.776.776,0,1,0,1.552,0v-4.656A2.328,2.328,0,0,0,769.016,568.033Z"
                                            transform="translate(-724.787 -543.202)" fill="url(#linear-gradient)" />
                                        <path id="Path_90" data-name="Path 90"
                                            d="M413.479,109.42a.772.772,0,0,0,.76.031l4.656-2.328a.776.776,0,0,0,0-1.381l-4.656-2.328a.776.776,0,0,0-1.125.691v4.656A.776.776,0,0,0,413.479,109.42Zm1.187-4.058,2.142,1.071-2.142,1.071Z"
                                            transform="translate(-396.044 -99.449)" fill="url(#linear-gradient)" />
                                        <path id="Path_91" data-name="Path 91"
                                            d="M316.82,31.18a6.984,6.984,0,1,0-6.984-6.984A6.984,6.984,0,0,0,316.82,31.18Zm0-12.415a5.432,5.432,0,1,1-5.432,5.432A5.432,5.432,0,0,1,316.82,18.765Z"
                                            transform="translate(-297.421 -17.213)" fill="url(#linear-gradient)" />
                                        <path id="Path_92" data-name="Path 92"
                                            d="M620.447,297.278a.776.776,0,0,0,.621-.31l2.328-3.1a.776.776,0,0,0-1.242-.931l-2.328,3.1a.776.776,0,0,0,.621,1.242Z"
                                            transform="translate(-593.289 -280.207)" fill="url(#linear-gradient)" />
                                        <path id="Path_93" data-name="Path 93"
                                            d="M671.466,382.257a.776.776,0,0,0,1.086.155l3.1-2.328a.776.776,0,1,0-.931-1.242l-3.1,2.328A.776.776,0,0,0,671.466,382.257Z"
                                            transform="translate(-642.6 -362.393)" fill="url(#linear-gradient)" />
                                        <path id="Path_94" data-name="Path 94"
                                            d="M726.656,482.2a.776.776,0,0,0-.931-.621l-3.88.776a.78.78,0,1,0,.155,1.552h.155l3.88-.776a.776.776,0,0,0,.621-.931Z"
                                            transform="translate(-690.186 -460.629)" fill="url(#linear-gradient)" />
                                        <path id="Path_95" data-name="Path 95"
                                            d="M35.2,203.311h9.311a.776.776,0,0,0,.776-.776V190.12a.776.776,0,0,0-.776-.776H35.2a.776.776,0,0,0-.776.776v12.415A.776.776,0,0,0,35.2,203.311Zm.776-12.415h7.76V201.76h-7.76Z"
                                            transform="translate(-34.426 -181.585)" fill="url(#linear-gradient)" />
                                        <path id="Path_96" data-name="Path 96"
                                            d="M140.033,258.2h-1.552a.776.776,0,0,0,0,1.552h1.552a.776.776,0,1,0,0-1.552Z"
                                            transform="translate(-133.049 -247.333)" fill="url(#linear-gradient)" />
                                        <path id="Path_97" data-name="Path 97"
                                            d="M107.158,327.049h-3.1a.776.776,0,1,0,0,1.552h3.1a.776.776,0,1,0,0-1.552Z"
                                            transform="translate(-100.175 -313.082)" fill="url(#linear-gradient)" />
                                        <path id="Path_98" data-name="Path 98"
                                            d="M107.158,395.9h-3.1a.776.776,0,0,0,0,1.552h3.1a.776.776,0,0,0,0-1.552Z"
                                            transform="translate(-100.175 -378.831)" fill="url(#linear-gradient)" />
                                        <path id="Path_99" data-name="Path 99"
                                            d="M176.519,400.369a.779.779,0,1,0-1.35.776l3.422,5.921-12.415,4.656h-.116l-2.017,1.164-1.342.776a1.549,1.549,0,0,1-2.118-.566l-1.552-2.685a1.552,1.552,0,0,1,.582-2.048l2.685-1.552,1.94,3.36a.779.779,0,0,0,1.35-.776l-2-3.461,9.738-8.031.318.551a.779.779,0,1,0,1.35-.776l-.776-1.342a.786.786,0,0,0-1.172-.21l-10.863,8.954-3.306,1.909a3.1,3.1,0,0,0-1.428,3.515l-.776.442a2.326,2.326,0,0,0,1.164,4.345,2.375,2.375,0,0,0,1.164-.31l.776-.442a3.011,3.011,0,0,0,1.358.807,2.939,2.939,0,0,0,.815.109,3.058,3.058,0,0,0,1.552-.419l.675-.388,1.552,2.693a2.326,2.326,0,1,0,4.027-2.328l-1.412-2.46,11.639-4.369a.778.778,0,0,0,.4-1.11ZM158.191,413.63a.775.775,0,1,1-.776-1.342l.675-.388.776,1.342ZM168.4,415.8a.775.775,0,0,1-1.342.776l-1.552-2.693,1.288-.737h.062Z"
                                            transform="translate(-150.043 -378.875)" fill="url(#linear-gradient)" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="info">
                            <h4>complete identity design</h4>
                            <p>As we strive to provide high quality, modern and attractive designs</p>
                        </div>
                    </div>
                </div>
            @endif
           
            </div>
        </div>
    </section>
    <!--======================= End services =========================-->

    <!--======================= Start ceo_bg =========================-->
    <section class="ceo_bg">
        <div class="row no-gutters ">
            <div class="col-lg-6 ">
                <div class="info ">
                    @if ($lang =="ar")
                    <div class="content">
                        <h5 class="sp_title">كلمة المدير</h5>
                        <p>{{ $ceo->ar_content }}</p>
                    </div>
                    @else
                    <div class="content">
                        <h5 class="sp_title">CEO Speech</h5>
                        <p>{{ $ceo->en_content }}</p>
                    </div>
                    @endif
                    
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="play">
                    <a class="venobox play-btn" data-autoplay="true" data-vbtype="video"
                        href="{{ $ceo->videolink }}"></a>
                </div>
            </div>
        </div>
    </section>
    <!--======================= End ceo_bg =========================-->

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

    <!--======================= Start counter =========================-->

    <section class="counter-section jarallax">
        <div class="container">
            <div class="content">
                <div class="row" id="counters_1">
                    @if ($lang == 'ar')
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/01.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="200" data-Speed="4000">0</div>
                                <h4>الخبرات</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/02.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="5000" data-Speed="4000">0</div>
                                <h4>الزوار</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/03.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="1000" data-Speed="4000">0</div>
                                <h4>المشاهدات</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/04.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="300" data-Speed="4000">0</div>
                                <h4>العملاء</h4>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/01.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="200" data-Speed="4000">0</div>
                                <h4>Experience</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/02.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="5000" data-Speed="4000">0</div>
                                <h4>Visitors</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/03.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="1000" data-Speed="4000">0</div>
                                <h4>Views</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="box wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('front/assets/img/counter/04.svg') }}" alt="img">
                                </div>
                                <div class="counter" data-TargetNum="300" data-Speed="4000">0</div>
                                <h4>customers</h4>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!--======================= End counter =========================-->

    <!--======================= Start our team =========================-->
    <section class="our_team_section">
        <div class="container">
           @if ($lang=="ar")
           <div class="main-heading">
            <span>نقدم لك الأفضل</span>
            <h2>فريقنا</h2>
        </div>
           @else
           <div class="main-heading">
            <span>We give you the best</span>
            <h2>our team</h2>
        </div> 
           @endif
            <div class="owl-carousel owl-theme wow fadeInUp">
                @foreach ($teams as $row)
                    <div class="box">
                        <div class="item">
                            <div class="team-item_content">
                                <div class="team-image gsap-reveal-hero gsap-reveal-img">
                                    <img src="{{ asset('front/images/teams/' . $row->img) }}" alt="" class="img-fluid">
                                </div>
                                <div class="team-item_info">
                                    <div class="team-info_icons">
                                        <span class="team-icon fa fa-share-alt"></span>
                                        <a href="#" class="team-icon instagram" tabindex="0"><i
                                                class="fab fa-instagram"></i></a>
                                        <a href="#" class="team-icon twitter" tabindex="0"><i
                                                class="fab fa-twitter"></i></a>
                                        <a href="#" class="team-icon facebook" tabindex="0"><i
                                                class="fab fa-facebook"></i></a>
                                        <a href="#" class="team-icon linkedin" tabindex="0"><i
                                                class="fab fa-linkedin"></i></a>
                                    </div>
                                    @if ($lang == 'ar')
                                        <h2 class="team-title">
                                            <a href="#">{{ $row->ar_name }}</a>
                                        </h2>
                                        <div class="team-department">{{ $row->ar_job }}</div>
                                    @else
                                        <h2 class="team-title">
                                            <a href="#">{{ $row->en_name }}</a>
                                        </h2>
                                        <div class="team-department">{{ $row->en_job }}</div>
                                    @endif


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--======================= End our team =========================-->

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

    <!--================================= start gallary ==============================-->
    <section class="gallary_section">
        <div class="container">
            <div class="main-heading">
                <h2>Our gallary</h2>
            </div>
            <div class="row wow fadeInUp">
                @foreach ($gallery as $row)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="box">
                            <div class="image">
                                <div class="ratio">
                                    <img src="{{ asset('front/images/gallery/' . $row->img) }}" alt="img"
                                        class="img-fluid">
                                </div>
                                <a class="venobox vbox-item" data-gall="venue-gallery"
                                    href="{{ asset('front/images/gallery/' . $row->img) }}">
                                    <div class="overlay"><i class="fal fa-plus-circle"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--================================= End gallary ==============================-->
@endsection
