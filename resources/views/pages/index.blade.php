@extends('layout.master')
@section('content')
    <!-- *** HEADER STARTS *** -->
    <header id="contrive-masthead" class="transparent-header">

        <div class="header-main">
            <div class="contrive-container">

                <div class="contrive-row">

                    <!-- *** LOGO STARTS *** -->
                    <div class="contrive-col-3">
                        <div id="logo">
                            <a href="index.html" title="" class="contrive-standard-logo">
                                <img class="logo-light" src="../../assets/theme/images/logo-light.png" alt="" title="">
                                <img class="logo-dark" src="../../assets/theme/images/logo.png" alt="" title="">
                            </a>
                            <a href="index.html" title="" class="contrive-retina-logo">
                                <img class="logo-light" src="../../assets/theme/images/logo-light.png" alt="" title="">
                                <img class="logo-dark" src="../../assets/theme/images/logo.png" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <!-- *** LOGO END *** -->

                    <div class="contrive-col-9">
                        <div class="contrive-search-container">
                            <a class="contrive-search" href="#contrive-search-form"> </a>

                            <div id="contrive-search-form" class="contrive-search-form">
                                <form>
                                    <input type="search" placeholder="SEARCH...">
                                </form>
                            </div>
                        </div>

                        <!-- *** MAIN NAVIGATION STARTS *** -->
                        <div id="contrive-responsive-menu-trigger"><i class="fa fa-bars"></i></div>
                        <nav class="main-nav">
                            <ul>
                                <li class="current_page_item"> <a href="index.html" title=""> Home </a>
                                    <ul class="contrive-sub-menu">
                                        <li> <a href="index2.html" title=""> Home - Version 2 </a> </li>
                                        <li> <a href="index-left-header.html" title=""> Home - Left Header </a> </li>
                                        <li> <a href="index-overlay-menu.html" title=""> Home - Overlay Menu </a> </li>
                                        <li> <a href="index-3d-curtain.html" title=""> Home - 3D Curtain </a> </li>
                                        <li> <a href="index-parallax.html" title=""> Home - Parallax Header </a> </li>
                                        <li> <a href="index-zoomout.html" title=""> Home - Zoomout Image </a> </li>
                                        <li class="current_page_item"> <a href="index-kenburns.html" title=""> Home - Kenburns Slider </a> </li>
                                        <li> <a href="index2.html" title=""> Home - Fullwidth Slider </a> </li>
                                        <li> <a href="index-overlay-menu.html" title=""> Home - Fullscreen Slider </a> </li>
                                        <li> <a href="index-gradient-animation.html" title=""> Home - Gradient Animation </a> </li>
                                    </ul>
                                </li>
                                <li> <a href="about.html" title=""> Pages </a>
                                    <ul class="contrive-sub-menu">
                                        <li> <a href="about.html" title=""> About </a> </li>
                                        <li> <a href="faq.html" title=""> Faq </a> </li>
                                        <li> <a href="shortcodes.html" title=""> Shortcodes </a> </li>
                                        <li> <a href="404.html" title=""> 404 </a>
                                            <ul class="contrive-sub-menu">
                                                <li> <a href="404-full-screen.html" title=""> 404 Fullscreen </a> </li>
                                                <li> <a href="404-full-screen-video.html" title=""> 404 Fullscreen Video </a> </li>
                                                <li> <a href="404-full-screen-yt-video.html" title=""> 404 Fullscreen Youtube Video </a> </li>
                                                <li> <a href="404-gradient-animation.html" title=""> 404 Gradient Animation </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a href="services.html" title=""> Services </a>
                                    <ul class="contrive-sub-menu">
                                        <li> <a href="services.html" title=""> Services Layout 1 </a> </li>
                                        <li> <a href="services-with-sidenav.html" title=""> Services Layout 2 </a> </li>
                                    </ul>
                                </li>
                                <li class="contrive-mega-menu"> <a href="portfolio-4-col-infinity.html" title=""> Portfolio </a>
                                    <div class="contrive-mega-menu-container col-3">
                                        <ul>
                                            <li class="contrive-mega-menu-title">
                                                <a href="portfolio-2-col.html" title=""> Portfolio 2 columns </a>
                                                <ul>
                                                    <li><a href="portfolio-2-col.html" title=""> Portfolio 2 col </a></li>
                                                    <li><a href="portfolio-2-col-left-sidebar.html" title=""> Portfolio 2 col Left Sidebar </a></li>
                                                    <li><a href="portfolio-2-col-right-sidebar.html" title=""> Portfolio 2 col Right Sidebar  </a></li>
                                                </ul>
                                            </li>
                                            <li class="contrive-mega-menu-title">
                                                <a href="portfolio-4-col.html" title=""> Portfolio 4 columns </a>
                                                <ul>
                                                    <li><a href="portfolio-4-col.html" title=""> Portfolio 4 col </a></li>
                                                    <li><a href="portfolio-4-col-left-sidebar.html" title=""> Portfolio 4 col Left Sidebar </a></li>
                                                    <li><a href="portfolio-4-col-right-sidebar.html" title=""> Portfolio 4 col Right Sidebar  </a></li>
                                                </ul>
                                            </li>
                                            <li class="contrive-mega-menu-title">
                                                <a href="portfolio-details.html" title=""> Portfolio Details </a>
                                                <ul>
                                                    <li><a href="portfolio-details.html" title=""> Portfolio Details Fullwdith </a></li>
                                                    <li><a href="portfolio-details-left-sidebar.html" title=""> Portfolio Details Left Sidebar </a></li>
                                                    <li><a href="portfolio-details-right-sidebar.html" title=""> Portfolio Details Right Sidebar  </a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <ul>
                                            <li class="contrive-mega-menu-title">
                                                <a href="portfolio-3-col.html" title=""> Portfolio 3 columns </a>
                                                <ul>
                                                    <li><a href="portfolio-3-col.html" title=""> Portfolio 3 col </a></li>
                                                    <li><a href="portfolio-3-col-left-sidebar.html" title=""> Portfolio 3 col Left Sidebar </a></li>
                                                    <li><a href="portfolio-3-col-right-sidebar.html" title=""> Portfolio 3 col Right Sidebar  </a></li>
                                                </ul>
                                            </li>
                                            <li class="contrive-mega-menu-title">
                                                <a href="portfolio-4-col-infinity.html" title=""> Portfolio cols Infinity Scroll </a>
                                                <ul>
                                                    <li><a href="portfolio-2-col-infinity.html" title=""> Portfolio 2 col Infinity </a></li>
                                                    <li><a href="portfolio-3-col-infinity.html" title=""> Portfolio 3 col Infinity </a></li>
                                                    <li><a href="portfolio-4-col-infinity.html" title=""> Portfolio 4 col Infinity  </a></li>
                                                </ul>
                                            </li>
                                            <li class="contrive-mega-menu-title">
                                                <a href="portfolio-details-gallery.html" title=""> Portfolio Details Gallery </a>
                                                <ul>
                                                    <li><a href="portfolio-details-gallery.html" title=""> Portfolio Gallery - Fullwdith </a></li>
                                                    <li><a href="portfolio-details-gallery-left-sidebar.html" title=""> Portfolio Gallery - Left Sidebar </a></li>
                                                    <li><a href="portfolio-details-gallery-right-sidebar.html" title=""> Portfolio Gallery - Right Sidebar  </a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <ul>
                                            <li class="contrive-mega-menu-title">
                                                <img title="" alt="" src="http://placehold.it/356x531/">
                                            </li>
                                        </ul>
                                        <!--<ul>
                                            <li class="contrive-mega-menu-title">
                                                <a href="portfolio-details-video.html" title=""> Portfolio Details Video </a>
                                                <ul>
                                                    <li><a href="portfolio-details-video.html" title=""> Portfolio Video - Fullwdith </a></li>
                                                    <li><a href="portfolio-details-video-left-sidebar.html" title=""> Portfolio Video - Left Sidebar </a></li>
                                                    <li><a href="portfolio-details-video-right-sidebar.html" title=""> Portfolio Video - Right Sidebar  </a></li>
                                                </ul>
                                            </li>
                                        </ul>-->
                                    </div>
                                </li>
                                <li> <a href="blog.html" title=""> Blog </a>
                                    <ul class="contrive-sub-menu">
                                        <li> <a href="blog-fullwidth.html" title=""> Blog Fullwidth </a> </li>
                                        <li> <a href="blog-left-sidebar.html" title=""> Blog With Left Sidebar </a> </li>
                                        <li> <a href="blog.html" title=""> Blog With Right Sidebar </a> </li>
                                        <li> <a href="blog-details.html" title=""> Blog Details </a> </li>
                                        <li> <a href="blog-details-left-sidebar.html" title=""> Blog Details Left Sidebar </a> </li>
                                        <li> <a href="blog-details-right-sidebar.html" title=""> Blog Details Right Sidebar </a> </li>
                                    </ul>
                                </li>
                                <li> <a href="careers.html" title=""> Careers </a> </li>
                                <li> <a href="contact.html" title=""> Contact </a>
                                    <ul class="contrive-sub-menu">
                                        <li> <a href="contact.html" title=""> Contact 1 </a> </li>
                                        <li> <a href="contact-2.html" title=""> Contact 2 </a> </li>
                                        <li> <a href="contact-3.html" title=""> Contact 3 </a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- *** MAIN NAVIGATION END *** -->
                    </div>

                </div>

            </div>
        </div>
    </header>
    <!-- *** HEADER END *** -->

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">

        <!-- *** SLIDER WRAP STARTS *** -->
        <div class="contrive-slider-wrap">
            <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="contrive-kenburns" style="background-color:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.0.8.5 fullscreen mode -->
                <div id="rev_slider_8_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.8.5">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-24" data-transition="fade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/100x50/"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/1920x1080/000000"  alt=""  width="1920" height="1080" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption contrive-ken-title1 tp-resizeme rs-parallaxlevel-0"
                                 id="slide-24-layer-1"
                                 data-x="center" data-hoffset="-242"
                                 data-y="center" data-voffset="-9"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap;">WE HAVE </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption contrive-ken-title2 tp-resizeme rs-parallaxlevel-0"
                                 id="slide-24-layer-2"
                                 data-x="499"
                                 data-y="center" data-voffset="-9"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 6; white-space: nowrap;">PROFESSIONAL </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption contrive-ken-title3 tp-resizeme rs-parallaxlevel-0"
                                 id="slide-24-layer-3"
                                 data-x="center" data-hoffset="1"
                                 data-y="center" data-voffset="59"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-start="2000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">TEAM TO BUILD YOUR DREAM HOME </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption contrive-rev-btn tp-resizeme rs-parallaxlevel-0"
                                 id="slide-24-layer-4"
                                 data-x="center" data-hoffset=""
                                 data-y="520"
                                 data-width="['none','none','none','none']"
                                 data-height="['none','none','none','none']"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-mask_in="x:0px;y:[100%];"
                                 data-start="3000"
                                 data-responsive_offset="on"
                                 style="z-index: 8;"><div class="rs-looped disabled"> LEARN MORE <i class="pe-7s-right-arrow"></i> </div> </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption contrive-rev-home-icon tp-resizeme rs-parallaxlevel-0"
                                 id="slide-24-layer-14"
                                 data-x="center" data-hoffset=""
                                 data-y="226"
                                 data-width="['85']"
                                 data-height="['90']"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-start="3000"
                                 data-responsive_offset="on"
                                 style="z-index: 13;"><i class="pe-7s-home"></i> </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-25" data-transition="fade" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://placehold.it/100x50/"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="http://placehold.it/1920x1080/000000"  alt=""  width="1920" height="1080" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption contrive-ken-title1 tp-resizeme rs-parallaxlevel-0"
                                 id="slide-25-layer-9"
                                 data-x="center" data-hoffset="253"
                                 data-y="center" data-voffset="-12"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-start="2000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 5; white-space: nowrap;">BUSINESS PARTNER </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption contrive-ken-title2 tp-resizeme rs-parallaxlevel-0"
                                 id="slide-25-layer-2"
                                 data-x="214"
                                 data-y="center" data-voffset="-12"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-start="2000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 6; white-space: nowrap;">CREATIVE </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption contrive-ken-title3 tp-resizeme rs-parallaxlevel-0"
                                 id="slide-25-layer-3"
                                 data-x="center" data-hoffset="1"
                                 data-y="center" data-voffset="-96"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-mask_in="x:0px;y:0px;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">We are Contrive </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-0"
                                 id="slide-25-layer-6"
                                 data-x="center" data-hoffset=""
                                 data-y="456"
                                 data-width="['none','none','none','none']"
                                 data-height="['none','none','none','none']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power2.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-mask_in="x:0px;y:[100%];"
                                 data-start="3000"
                                 data-responsive_offset="on"
                                 style="z-index: 8;"><img src="../../assets/theme/images/revolution/purchase-now-btn.png" alt="" width="170" height="50" data-ww="170px" data-hh="50px" data-no-retina> </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption contrive-ken-title1 tp-resizeme rs-parallaxlevel-0"
                                 id="slide-25-layer-8"
                                 data-x="center" data-hoffset="-474"
                                 data-y="center" data-voffset="-12"
                                 data-width="['auto']"
                                 data-height="['auto']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:300;s:300;"
                                 data-start="2000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 9; white-space: nowrap;">YOUR </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- *** SLIDER WRAP END *** -->

        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-container">
                <div class="contrive-row">

                    <div class="contrive-topmargin-80"></div>

                    <div class="contrive-col-3 contrive-custom-padding">
                        <div class="contrive-topmargin-30"> </div>
                        <div class="contrive-heading right">
                            <h6> We are </h6>
                            <h2> CONTRIVE </h2>
                        </div>
                        <p class="alignright"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non tincidunt orci. In non vestibulu orci. Praesent ac velit maecenas. </p>
                    </div>

                    <div class="contrive-col-3 hvr-float">
                        <div class="contrive-icon-with-title circle center style1">
                            <div class="contrive-icon-holder">
                                <i class="et-icon icon-pencil"> </i>
                            </div>
                            <h6> Professional Team </h6>
                            <p> Praesent aliquet fermentum magnaunc urna Class aptent taciti sociosqu litora Pellentesque sit </p>
                        </div>
                    </div>

                    <div class="contrive-col-3 hvr-float">
                        <div class="contrive-icon-with-title circle center style1">
                            <div class="contrive-icon-holder">
                                <i class="et-icon icon-gears"> </i>
                            </div>
                            <h6> We build with love </h6>
                            <p> Praesent aliquet fermentum magnaunc urna Class aptent taciti sociosqu litora Pellentesque sit </p>
                        </div>
                    </div>

                    <div class="contrive-col-3 hvr-float">
                        <div class="contrive-icon-with-title circle center style1">
                            <div class="contrive-icon-holder">
                                <i class="et-icon icon-key"> </i>
                            </div>
                            <h6> We deliver on time </h6>
                            <p> Praesent aliquet fermentum magnaunc urna Class aptent taciti sociosqu litora Pellentesque sit </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="contrive-topmargin-120"> </div>

        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-container">

                <div class="contrive-heading center">
                    <h6> Who we are </h6>
                    <h2> ABOUT CONTRIVE </h2>
                </div>

                <p class="aligncenter contrive-custom-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non tincidunt orci. In non vestibulum orci. <br> Praesent ac velit nisl. <a href="" title="">Maecenas facilisis </a> tincidunt odio sollicitudin mattis. </p>

                <div class="contrive-topmargin-50"> </div>

            </div>
        </div>

        <div class="contrive-row-fw contrive-fw-no-padding contrive-about-cont2 contrive-scale-bg">

            <div class="contrive-row">

                <div class="contrive-col-6">
                    <img src="http://placehold.it/934x482/" alt="" title="">
                </div>

                <div class="contrive-col-6 contrive-about-cont">

                    <div class="contrive-topmargin-70"> </div>

                    <div class="contrive-row">
                        <div class="contrive-col-6">
                            <div class="contrive-icon-with-title left style5">
                                <div class="contrive-icon-holder">
                                    <i class="et-icon icon-target"> </i>
                                </div>
                                <h6> MISSION STATMENT </h6>
                                <p> Praesent aliquet fermentum magna Nunc urna Class aptent taciti sociosqu litora Pellentesque sit amet justo orem ipsum dolor sit amet. </p>
                            </div>
                        </div>
                        <div class="contrive-col-6">
                            <div class="contrive-icon-with-title left style5">
                                <div class="contrive-icon-holder">
                                    <i class="et-icon icon-global"> </i>
                                </div>
                                <h6> We are Gobal </h6>
                                <p> Praesent aliquet fermentum magna Nunc urna Class aptent taciti sociosqu litora Pellentesque sit amet justo orem ipsum dolor sit amet. </p>
                            </div>
                        </div>
                        <div class="contrive-topmargin-50"> </div>
                        <div class="contrive-col-6">
                            <div class="contrive-icon-with-title left style5">
                                <div class="contrive-icon-holder">
                                    <i class="et-icon icon-profile-male"> </i>
                                </div>
                                <h6> WHO WE ARE </h6>
                                <p> Praesent aliquet fermentum magna Nunc urna Class aptent taciti sociosqu litora Pellentesque sit amet justo orem ipsum dolor sit amet. </p>
                            </div>
                        </div>
                        <div class="contrive-col-6">
                            <div class="contrive-icon-with-title left style5">
                                <div class="contrive-icon-holder">
                                    <i class="et-icon icon-trophy"> </i>
                                </div>
                                <h6> OUR ACHIEVEMENTS </h6>
                                <p> Praesent aliquet fermentum magna Nunc urna Class aptent taciti sociosqu litora Pellentesque sit amet justo orem ipsum dolor sit amet. </p>
                            </div>
                        </div>
                    </div>
                    <div class="contrive-topmargin-30"> </div>
                </div>

            </div>

        </div>

        <div class="contrive-topmargin-120"> </div>

        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-heading center">
                <h6> Reccent </h6>
                <h2> PROJECTS </h2>
            </div>

            <p class="aligncenter contrive-custom-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non tincidunt orci. In non vestibulum orci. <br> Praesent ac velit nisl. Maecenas facilisis tincidunt odio sollicitudin mattis. </p>

            <div class="contrive-topmargin-50"></div>

            <div class="contrive-portfolio-filter">
                <ul>
                    <li><a href="" title="" data-filter="*" class="current">All Projects</a></li>
                    <li><a href="" title="" data-filter=".web">Web Design</a></li>
                    <li><a href="" title="" data-filter=".psd">Photography</a></li>
                    <li><a href="" title="" data-filter=".ai">Illustration</a></li>
                    <li><a href="" title="" data-filter=".wp">Wordpress</a></li>
                </ul>
            </div>

            <div class="contrive-portfolio-holder contrive-row contrive-no-space-cols">
                <article class="contrive-col-3 no-space contrive-portfolio-item psd wp">
                    <figure>
                        <img title="" alt="" src="http://placehold.it/1170x914/">
                        <figcaption>
                            <div class="fig-overlay">
                                <h3> <a title="" href="portfolio-details.html"> Sheikh Zayed <strong> Bridge </strong> </a> </h3>
                                <p> <a title="" href="portfolio-details.html"> Melbourne</a>, <a title="" href="portfolio-details.html"> Australia </a> </p>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="contrive-col-3 no-space contrive-portfolio-item web ai">
                    <figure>
                        <img title="" alt="" src="http://placehold.it/1170x914/">
                        <figcaption>
                            <div class="fig-overlay">
                                <h3> <a title="" href="portfolio-details.html"> Akashi kaikyo <strong> Bridge </strong> </a> </h3>
                                <p> <a title="" href="portfolio-details.html"> Melbourne</a>, <a title="" href="portfolio-details.html"> Australia </a> </p>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="contrive-col-3 no-space contrive-portfolio-item psd">
                    <figure>
                        <img title="" alt="" src="http://placehold.it/1170x914/">
                        <figcaption>
                            <div class="fig-overlay">
                                <h3> <a title="" href="portfolio-details.html"> The Mobius <strong> Bridge </strong> </a> </h3>
                                <p> <a title="" href="portfolio-details.html"> Melbourne</a>, <a title="" href="portfolio-details.html"> Australia </a> </p>
                            </div>
                        </figcaption>
                    </figure>
                </article>
                <article class="contrive-col-3 no-space contrive-portfolio-item psd ai">
                    <figure>
                        <img title="" alt="" src="http://placehold.it/1170x914/">
                        <figcaption>
                            <div class="fig-overlay">
                                <h3> <a title="" href="portfolio-details.html"> Interior <strong> Design </strong> </a> </h3>
                                <p> <a title="" href="portfolio-details.html"> Melbourne</a>, <a title="" href="portfolio-details.html"> Australia </a> </p>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>

        </div>

        <div class="contrive-row-fw light-text contrive-polygon-parallax">
            <div class="contrive-container">
                <div class="contrive-info-bar style3">
                    <h3> WOULD YOU LIKE TO BUILD YOUR DREAM HOME WITH US? </h3>
                    <a href="" title="" class="contrive-button stroke-style light hvr-shutter-out-horizontal hvr-effect"> Get a Free Quote Now </a>
                </div>
            </div>
        </div>

        <div class="contrive-row-fw">
            <div class="contrive-container">
                <div class="contrive-row">

                    <div class="contrive-col-3 contrive-custom-padding-2">
                        <div class="contrive-heading right">
                            <h6> Our </h6>
                            <h2> PROCESS </h2>
                        </div>
                        <p class="alignright"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non tincidunt orci. In non vestibulu orci. Praesent ac velit maecenas. </p>
                    </div>

                    <div class="contrive-col-3">
                        <div class="contrive-icon-with-title right style9">
                            <div class="contrive-icon-holder">
                                <i class="flaticon-worker-1"> </i>
                            </div>
                            <h6> plan &amp; Design <span> 01 </span> </h6>
                            <p> Praesent aliquet fermentum magna Nunc urna Class aptent taciti sociosqu litora Pellentesque sit </p>
                        </div>
                    </div>

                    <div class="contrive-col-3">
                        <div class="contrive-icon-with-title right style9">
                            <div class="contrive-icon-holder">
                                <i class="flaticon-wrench"> </i>
                            </div>
                            <h6> Development <span> 02 </span> </h6>
                            <p> Praesent aliquet fermentum magna Nunc urna Class aptent taciti sociosqu litora Pellentesque sit </p>
                        </div>
                    </div>

                    <div class="contrive-col-3">
                        <div class="contrive-icon-with-title right style9">
                            <div class="contrive-icon-holder">
                                <i class="flaticon-torch"> </i>
                            </div>
                            <h6> Launching <span> 03 </span> </h6>
                            <p> Praesent aliquet fermentum magna Nunc urna Class aptent taciti sociosqu litora Pellentesque sit </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contrive-row-fw contrive-grey-bg">
            <div class="contrive-container">

                <div class="contrive-testimonial style2">
                    <blockquote>
                        <q> Donec eleifend velit vel suscipit fringilla. Maecenas sed lacus nec massa molestie consectetur. Etiam sit amet blandit turpis, lobortis accumsan elit. In porta nibh a diam dapibus, ut venenatis tortor sodales </q>
                    </blockquote>
                    <div class="contrive-testimonial-author">
                        <img class="author-image" title="" alt="" src="http://placehold.it/420x420/">
                        <div class="contrive-testimonial-meta">
                            <p> JOHN HAMILTON <span> CEO of Contrive </span> </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="contrive-topmargin-100"></div>
        <div class="contrive-topmargin-20"></div>

        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-heading center">
                <h6> Our </h6>
                <h2> LATEST NEWS </h2>
            </div>

            <div class="contrive-topmargin-20"></div>

            <div class="contrive-row contrive-no-space-cols">
                <div class="contrive-col-3 no-space">
                    <article class="contrive-blog-thumb-style2">
                        <a class="post-thumbnail" href=""><img src="http://placehold.it/1170x975/" alt="" title=""></a>
                        <header class="entry-header">
                            <a class="entry-format" href=""> <i class="fa fa-pencil"> </i> </a>
                            <div class="contrive-blog-meta">
                                <div class="posted-on"> <span> POSTED </span> <time datetime="2015-02-14T17:17:52+00:00" class="entry-date">  14 FEB 2015 </time> </div>
                                <h4> <a href="" title=""> dolore magna aliqua Ut enim ad minim </a> </h4>
                            </div>
                        </header>
                    </article>
                </div>
                <div class="contrive-col-3 no-space">
                    <article class="contrive-blog-thumb-style2">
                        <a class="post-thumbnail" href=""><img src="http://placehold.it/1170x975/" alt="" title=""></a>
                        <header class="entry-header">
                            <a class="entry-format" href=""> <i class="fa fa-pencil"> </i> </a>
                            <div class="contrive-blog-meta">
                                <div class="posted-on"> <span> POSTED </span> <time datetime="2015-02-14T17:17:52+00:00" class="entry-date">  14 FEB 2015 </time> </div>
                                <h4> <a href="" title=""> dolore magna aliqua Ut enim ad minim </a> </h4>
                            </div>
                        </header>
                    </article>
                </div>
                <div class="contrive-col-3 no-space">
                    <article class="contrive-blog-thumb-style2">
                        <a class="post-thumbnail" href=""><img src="http://placehold.it/1170x975/" alt="" title=""></a>
                        <header class="entry-header">
                            <a class="entry-format" href=""> <i class="fa fa-pencil"> </i> </a>
                            <div class="contrive-blog-meta">
                                <div class="posted-on"> <span> POSTED </span> <time datetime="2015-02-14T17:17:52+00:00" class="entry-date">  14 FEB 2015 </time> </div>
                                <h4> <a href="" title=""> dolore magna aliqua Ut enim ad minim </a> </h4>
                            </div>
                        </header>
                    </article>
                </div>
                <div class="contrive-col-3 no-space">
                    <article class="contrive-blog-thumb-style2">
                        <a class="post-thumbnail" href=""><img src="http://placehold.it/1170x975/" alt="" title=""></a>
                        <header class="entry-header">
                            <a class="entry-format" href=""> <i class="fa fa-pencil"> </i> </a>
                            <div class="contrive-blog-meta">
                                <div class="posted-on"> <span> POSTED </span> <time datetime="2015-02-14T17:17:52+00:00" class="entry-date">  14 FEB 2015 </time> </div>
                                <h4> <a href="" title=""> dolore magna aliqua Ut enim ad minim </a> </h4>
                            </div>
                        </header>
                    </article>
                </div>
            </div>

        </div>

        <div class="contrive-row-fw contrive-grey-bg">
            <div class="contrive-container">
                <div class="contrive-clients">
                    <div class="contrive-row">
                        <div class="contrive-col-2">
                            <div class="aligncenter">
                                <a href="" title=""><img src="http://placehold.it/187x150/" alt="" title=""></a>
                            </div>
                            <div class="contrive-topmargin-30"></div>
                        </div>
                        <div class="contrive-col-2">
                            <div class="aligncenter">
                                <a href="" title=""><img src="http://placehold.it/187x150/" alt="" title=""></a>
                            </div>
                            <div class="contrive-topmargin-30"></div>
                        </div>
                        <div class="contrive-col-2">
                            <div class="aligncenter">
                                <a href="" title=""><img src="http://placehold.it/187x150/" alt="" title=""></a>
                            </div>
                            <div class="contrive-topmargin-30"></div>
                        </div>
                        <div class="contrive-col-2">
                            <div class="aligncenter">
                                <a href="" title=""><img src="http://placehold.it/187x150/" alt="" title=""></a>
                            </div>
                            <div class="contrive-topmargin-30"></div>
                        </div>
                        <div class="contrive-col-2">
                            <div class="aligncenter">
                                <a href="" title=""><img src="http://placehold.it/187x150/" alt="" title=""></a>
                            </div>
                            <div class="contrive-topmargin-30"></div>
                        </div>
                        <div class="contrive-col-2">
                            <div class="aligncenter">
                                <a href="" title=""><img src="http://placehold.it/187x150/" alt="" title=""></a>
                            </div>
                            <div class="contrive-topmargin-30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contrive-row-fw light-text contrive-locate-bg">
            <div class="contrive-google-map-toggle on-hide">
                <h4> <a href="contact-2.html" target="_blank"><span class="et-icon icon-map-pin"></span> LOCATE US ON GOOGLE MAP </a></h4>
            </div>
        </div>

        <div class="contrive-row-fw contrive-contact-space">
            <div class="contrive-container">

                <div class="contrive-row">
                    <div class="contrive-col-3">
                        <div class="contrive-contact-with-large-icon">
                            <div class="contrive-contact-icon-holder">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="contrive-contact-text-holder">
                                <h6> PHONE </h6>
                                <p> +123 45 67 890 78 </p>
                                <p> +123 67 89 012 45 </p>
                            </div>
                        </div>
                    </div>
                    <div class="contrive-col-3">
                        <div class="contrive-contact-with-large-icon">
                            <div class="contrive-contact-icon-holder">
                                <i class="icon icon-map"></i>
                            </div>
                            <div class="contrive-contact-text-holder">
                                <h6> ADDRESS </h6>
                                <p> 17, Contrive Building </p>
                                <p> Thunder Park, CA 2343 </p>
                            </div>
                        </div>
                    </div>
                    <div class="contrive-col-3">
                        <div class="contrive-contact-with-large-icon">
                            <div class="contrive-contact-icon-holder">
                                <i class="icon icon-clock"></i>
                            </div>
                            <div class="contrive-contact-text-holder">
                                <h6> WORKING TIME </h6>
                                <p> Mon - Sat : 8:00 Am - 18:00 Pm </p>
                                <p> Sunday : Closed </p>
                            </div>
                        </div>
                    </div>
                    <div class="contrive-col-3">
                        <div class="contrive-contact-with-large-icon">
                            <div class="contrive-contact-icon-holder">
                                <i class="icon icon-envelope"></i>
                            </div>
                            <div class="contrive-contact-text-holder">
                                <h6> EMAIL ID </h6>
                                <a href="" title=""> info@yourdomain.com </a>
                                <a href="" title=""> support@yourdomain.com </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    @endsection

@section('page_js')
    <!-- *** CONTENT WRAP END *** -->
    <script type="text/javascript">
        /******************************************
         -	PREPARE PLACEHOLDER FOR SLIDER	-
         ******************************************/

        var setREVStartSize=function(){
            try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                e.c = jQuery('#rev_slider_8_1')
                e.gridwidth = [1170];
                e.gridheight = [800];

                e.sliderLayout = "fullscreen";
                e.fullScreenAutoWidth='off';
                e.fullScreenAlignForce='off';
                e.fullScreenOffsetContainer= '';
                e.fullScreenOffset='';
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
            }catch(d){console.log("Failure at Presize of Slider:"+d)}
        };


        setREVStartSize();
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>"
            jQuery(sliderID).show().html(errorMessage);
        }
        var tpj=jQuery;

        var revapi8;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_8_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_8_1");
            }else{
                revapi8 = tpj("#rev_slider_8_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"js/rs-plugin/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        onHoverStop:"off",
                        arrows: {
                            style:"erinyen",
                            enable:true,
                            hide_onmobile:false,
                            hide_onleave:true,
                            hide_delay:200,
                            hide_delay_mobile:1200,
                            tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div>	<span class="tp-arr-titleholder"></span> </div>',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            }
                        }
                    },
                    gridwidth:1170,
                    gridheight:800,
                    lazyType:"none",
                    parallax: {
                        type:"scroll",
                        origo:"enterpoint",
                        speed:2000,
                        levels:[5,10,15,20,25,30,35,40,45,50],
                    },
                    shadow:0,
                    spinner:"spinner4",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        });	/*ready*/
    </script>
    @endsection
