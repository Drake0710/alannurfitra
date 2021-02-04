<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Nur Fitra Aprilian Dian P / Alan" content="Resume Front End Web Developer" />
	<link href="{{ asset('/images/landing/logo.ico') }}" rel="icon" type="image/x-icon" />

    <!-- Stylesheets
	============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700,900|Playfair+Display:400,700&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/dark.css') }}" type="text/css" />

    <!-- Resume Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/css/resume.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/resume-fonts.css') }}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{ asset('/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/include/rs-plugin/css/settings.css') }}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{ asset('/include/rs-plugin/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/include/rs-plugin/css/navigation.css') }}">

	<!-- ADD-ONS CSS FILES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/include/rs-plugin/css/addons/revolution.addon.particles.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/colors.php?color=7B6ED6') }}" type="text/css" />

    <!-- Document Title
	============================================= -->
	<title>AlanNurFitra | Front End Web Developer</title>
	
	<style>
		@media screen and (max-width: 992px) {
			.rev_row_zone_bottom {
				bottom:10%;
			}
		}
	</style>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="transparent-header sticky-transparent" data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="index.html" class="standard-logo font-secondary ls3"
								style="line-height: 90px; height:90px">
								<img src="{{ asset('/images/landing/logo.png') }}">
							</a>
                            <a href="index.html" class="retina-logo font-secondary ls3"
								style="line-height: 90px; height:90px">
								<img src="{{ asset('/images/landing/logo.png') }}">
							</a>
                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container one-page-menu custom-spacing" data-easing="easeInOutExpo"
                                data-speed="1250" data-offset="0">
                                <li class="menu-item current"><a class="menu-link" href="#" data-href="#wrapper"><i
                                            class="icon-line2-home"></i>
                                        <div>Intro</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-skills"><i
                                            class="icon-line2-star"></i>
                                        <div>Skills</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-about"><i
                                            class="icon-line2-user"></i>
                                        <div>About</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-works"><i
                                            class="icon-line2-grid"></i>
                                        <div>Portfolio</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-articles"><i
                                            class="icon-line2-pencil"></i>
                                        <div>Articles</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#footer"><i
                                            class="icon-line2-envelope"></i>
                                        <div>Contact</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Slider
		============================================= -->
        <section id="slider" class="slider-element min-vh-60 min-vh-md-100 revslider-wrap include-header">
            <div class="rev_slider_wrapper" style="background-color:#eef0f1;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.3.1 fullscreen mode -->
                <div id="rev_slider_56_1" class="rev_slider fullscreenbanner" style="display:none;"
                    data-version="5.4.3.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-136" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="500" data-thumb="{{ asset('/images/landing/100x50_portrait1.jpg') }}"
                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('/images/landing/portrait1.jpg') }}" alt="Image"
                                data-bgposition="center center" data-kenburns="on" data-duration="3000"
                                data-ease="Power4.easeOut" data-scalestart="250" data-scaleend="100"
                                data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0"
                                data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="8" class="rev-slidebg"
                                data-no-retina>
                            <!-- LAYERS -->
                            <div id="rrzb_136" class="rev_row_zone rev_row_zone_bottom" style="z-index: 7;">

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption  " id="slide-136-layer-9" data-x="['left','left','left','left']"
                                    data-hoffset="['100','100','100','100']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="row"
                                    data-columnbreak="2" data-responsive_offset="on" data-responsive="off"
                                    data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[130,100,100,80]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption  " id="slide-136-layer-10"
                                        data-x="['left','left','left','left']" data-hoffset="['100','100','100','100']"
                                        data-y="['top','top','top','top']" data-voffset="['100','100','100','100']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="column"
                                        data-responsive_offset="on" data-responsive="off"
                                        data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-columnwidth="100%" data-verticalalign="top" data-margintop="[0,0,0,0]"
                                        data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                        data-marginleft="[0,0,0,0]"
                                        data-textAlign="['inherit','inherit','center','center']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[50,50,50,20]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[50,50,50,20]"
										style="z-index: 8; width: 100%;">
										<!-- LAYER NR. 8 -->
										<div class="tp-caption   tp-resizeme" id="slide-136-layer-8"
										data-x="['left','left','center','center']" data-hoffset="['0','72','0','0']"
                                            data-y="['top','bottom','bottom','bottom']"
                                            data-voffset="['0','190','230','210']"
                                            data-width="['none','none','480','360']" data-height="none"
                                            data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                            data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                            data-textAlign="['inherit','inherit','center','center']"
                                            data-paddingtop="[5,5,5,5]" data-paddingright="[20,20,20,20]"
                                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                            style="z-index: 11; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 700; color: #2d3032; letter-spacing: 0px; display: inline-block;font-family:Poppins;text-shadow:1px 1px white">
											HI, I'M </div>

										<!-- LAYER NR. 4 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                                            id="slide-136-layer-12" data-x="['left','left','left','left']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['10','10','5','5']" data-whitespace="normal"
                                            data-type="shape" data-responsive_offset="on"
                                            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                            style="z-index: 13; display: block;background-color:rgba(0, 0, 0, 0);">
                                        </div>
											
                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-136-layer-5"
                                            data-x="['left','left','center','center']" data-hoffset="['0','73','0','0']"
                                            data-y="['top','bottom','bottom','bottom']"
                                            data-voffset="['0','230','270','250']"
                                            data-fontsize="['100','100','70','50']"
                                            data-lineheight="['80','80','60','40']"
                                            data-letterspacing="['-7','-7','-5','-3']"
                                            data-width="['none','none','480','360']" data-height="none"
                                            data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                            data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                            data-textAlign="['inherit','inherit','center','center']"
                                            data-paddingtop="[10,10,10,10]" data-paddingright="[20,20,20,20]"
                                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[13,13,13,13]"
                                            style="z-index: 10; white-space: normal; font-size: 100px; line-height: 80px; font-weight: 700; color: #2d3032; letter-spacing: -7px; display: inline-block;font-family:Poppins;text-shadow:1px 1px white">
                                            Alan<br />NurFitra </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                                            id="slide-136-layer-12" data-x="['left','left','left','left']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['20','20','10','10']" data-whitespace="normal"
                                            data-type="shape" data-responsive_offset="on"
                                            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                            style="z-index: 13; display: block;background-color:rgba(0, 0, 0, 0);">
                                        </div>

                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption   tp-resizeme" id="slide-136-layer-6"
                                            data-x="['left','left','center','center']" data-hoffset="['0','72','0','0']"
                                            data-y="['top','bottom','bottom','bottom']"
                                            data-voffset="['0','190','230','210']"
                                            data-width="['none','none','480','360']" data-height="none"
                                            data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                            data-frames='[{"delay":"+490","speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                            data-textAlign="['inherit','inherit','center','center']"
                                            data-paddingtop="[5,5,5,5]" data-paddingright="[20,20,20,20]"
                                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                            style="z-index: 11; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 700; color: #2d3032; letter-spacing: 0px; display: inline-block;font-family:Poppins;text-shadow:1px 1px white">
											FRONT END WEB DEVELOPER<br>JAKARTA, INDONESIA </div>

                                        <!-- LAYER NR. 6 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                                            id="slide-136-layer-13" data-x="['left','left','left','left']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['40','40','30','30']" data-whitespace="normal"
                                            data-type="shape" data-responsive_offset="on"
                                            data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                            style="z-index: 14; display: block;background-color:rgba(0, 0, 0, 0);">
                                        </div>

                                        <!-- LAYER NR. 7 -->
                                        <a class="tp-caption rev-btn  tp-resizeme"
                                            href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123?ref=SemiColonWeb&license=regular&open_purchase_for_item_id=9228123&purchasable=source"
                                            target="_blank" id="slide-136-layer-7"
                                            data-x="['left','left','center','center']" data-hoffset="['0','93','0','0']"
                                            data-y="['top','bottom','bottom','bottom']"
                                            data-voffset="['0','100','140','130']" data-width="none" data-height="none"
                                            data-whitespace="['normal','nowrap','nowrap','nowrap']" data-type="button"
                                            data-actions='' data-responsive_offset="on"
                                            data-frames='[{"delay":"+990","speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0deg;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":750,"frame":"999","to":"x:[-100%];opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(45,48,50);bg:rgba(255,255,255,1);bc:rgba(0,0,0,1);bs:solid;bw:0 0 0 0;"}]'
                                            data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                            data-marginbottom="[0,0,0,0]" data-marginleft="[20,20,0,0]"
                                            data-textAlign="['inherit','inherit','inherit','inherit']"
                                            data-paddingtop="[0,0,0,0]" data-paddingright="[30,30,30,30]"
                                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[30,30,30,30]"
                                            style="z-index: 12; white-space: normal; font-size: 15px; line-height: 46px; font-weight: 700; color: #ffffff; display: inline-block;font-family:Poppins;background-color:rgb(45,48,50);border-color:rgb(255,255,255);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                                            MY WORKS  → </a>
                                    </div>
                                </div>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption   tp-resizeme  disabled_lc tp-videolayer" id="slide-136-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-whitespace="nowrap" data-type="video" data-basealign="slide"
                                data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:1;","ease":"Power4.easeInOut"}]'
                                data-videocontrols="none" data-videowidth="100%" data-videoheight="100%"
                                data-videoposter="{{ asset('/images/landing/matrix.jpeg') }}"
                                data-videomp4="{{ asset('/videos/landing/matrix.mkv') }}" data-noposteronmobile="off"
                                data-videopreload="auto" data-videoloop="loop"
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-blendmode="overlay" data-autoplay="on"
                                data-volume="mute" style="z-index: 5;"> </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-4" id="slide-136-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full-proportional" data-height="full-proportional" data-whitespace="nowrap"
                                data-type="image" data-basealign="slide" data-responsive_offset="on"
                                data-frames='[{"delay":400,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" data-blendmode="screen" style="z-index: 6;"><img
                                    src="{{ asset('/images/landing/programming.jpeg') }}" alt="Image"
                                    data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                    data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']"
                                    data-no-retina> </div>

                            <!-- LAYER NR. 10 -->
                            <!-- <div class="tp-caption   tp-resizeme tp-svg-layer" id="slide-136-layer-14"
                                data-x="['right','right','right','right']" data-hoffset="['70','70','70','70']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['70','70','70','70']"
                                data-width="60" data-height="60" data-whitespace="nowrap"
                                data-visibility="['on','on','off','off']" data-type="svg"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                data-svg_src="include/rs-plugin/demos/assets/images/ic_arrow_forward_36px.svg"
                                data-svg_idle="sc:transparent;sw:0px;sda:0;sdo:0;"
                                data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;" data-basealign="slide"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:[-100%];y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power3.easeInOut","to":"o:0.5;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(45,48,50);"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 14; min-width: 60px; max-width: 60px; max-width: 60px; max-width: 60px; color: #2d3032;cursor:pointer;">
                                <div class="rs-looped rs-slideloop" data-easing="Power1.easeInOut" data-speed="1"
                                    data-xs="-10" data-xe="10" data-ys="0" data-ye="0"> </div>
                            </div> -->
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div><!-- END REVOLUTION SLIDER -->
            </div><!-- END REVOLUTION SLIDER WRAPPER -->
        </section>

        <!-- <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header">

			<div class="vh-100 vw-100 position-fixed" style="top: 0; left: 0; background: #FFF url('{{ asset('/images/hero-image/1.jpg') }}') no-repeat top center; background-size: cover; background-attachment: fixed;">

				<div class="container">
					<div class="slider-caption dark slider-caption-right">
						<div>
							<h2 class="font-primary ls5" data-animate="fadeIn">Pliff Jenkins</h2>
							<p class="font-weight-light ls1 d-none d-sm-block" data-animate="fadeIn" data-delay="400">Simple Design Methodology.<br>Melbourne, Australia.</p>
							<a class="font-primary border-0 ls1 topmargin-sm inline-block more-link text-white dark d-none d-sm-inline-block" data-animate="fadeIn" data-delay="800" data-scrollto="#section-works" data-offset="0" href="#"><u>My Works</u> &rarr;</a>
						</div>
					</div>
				</div>

			</div>

			<div class="vh-100 vw-100 position-fixed blurred-img" style="top: 0; left: 0; background: #FFF url('{{ asset('/images/hero-image/1.jpg') }}') no-repeat top center; background-size: cover; background-attachment: fixed;"></div>

		</section> -->

        <!-- Content
		============================================= -->
        <section id="content" class="bg-transparent">
            <div class="content-wrap pb-0 bg-transparent">

                <div id="section-skills" class="section m-0 page-section dark bg-transparent"
                    style="padding-bottom: 50px">
                    <div class="container">
                        <div class="heading-block center">
                            <h2 class="font-secondary">My Experiments.</h2>
                        </div>

                        <div class="row justify-content-center col-mb-50 mb-0">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-html5" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">HTML5</h3>
                                        <p style="color:#AAA;">Powerful Layout with Responsive functionality that can be
                                            adapted to any screen size.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-code" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Javascripts</h3>
                                        <p style="color:#AAA;">Looks beautiful &amp; ultra-sharp on Retina Displays with
                                            Retina Icons, Fonts &amp; Images.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-picture" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Photoshop</h3>
                                        <p style="color:#AAA;">Optimized code that are completely customizable and
                                            deliver unmatched fast performance.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-wordpress" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Wordpress</h3>
                                        <p style="color:#AAA;">Canvas provides support for Native HTML5 Videos that can
                                            be added to a Full Width Background.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-line-layers" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Joomla</h3>
                                        <p style="color:#AAA;">Display your Content attractively using Parallax Sections
                                            that have unlimited customizable areas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-line2-pencil" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Illustrator</h3>
                                        <p style="color:#AAA;">Complete control on each &amp; every element that
                                            provides endless customization possibilities.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-css3" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">CSS3</h3>
                                        <p style="color:#AAA;">Change your Website's Primary Scheme instantly by simply
                                            adding the dark class to the body.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-subscript" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">PHP</h3>
                                        <p style="color:#AAA;">Stretch your Website to the Full Width or make it boxed
                                            to surprise your visitors.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><i class="icon-search2" style="color: #DDD"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Seo</h3>
                                        <p style="color:#AAA;">We have covered each &amp; everything in our
                                            Documentation including Videos &amp; Screenshots.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="section-about" class="section page-section m-0"
                    style="background: #EEE url('{{ asset('/images/sections/1.jpg') }}') no-repeat center center; background-size: cover; padding: 100px 0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 offset-md-7 clearfix">
                                <div class="heading-block">
                                    <h2 class="font-secondary">About Me.</h2>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium
                                        reprehenderit inventore beatae velit quae labore sunt in possimus. Mollitia,
                                        culpa?</span>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0"><strong>Name:</strong></td>
                                            <td class="border-top-0">SemiColonWeb</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Gender:</strong></td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td>noreply@canvas.com</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone:</strong></td>
                                            <td>+1 111 222 33</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Website:</strong></td>
                                            <td>semicolonweb.com</td>
                                        </tr>
                                        <tr>
                                            <td><strong>DOB:</strong></td>
                                            <td>6th September 1986</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Nationality:</strong></td>
                                            <td>Australian</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="button button-large button-border button-black button-dark ml-0"><i
                                        class="icon-line-cloud-download"></i> Download CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <div class="video-overlay d-sm-block d-md-none" style="background: rgba(255,255,255,0.9);">
                        </div>
                    </div>
                </div>

                <div class="section m-0 skill-area bg-color dark" style="padding: 80px 0;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <h4>Education</h4>
                                <div class="skill-info">
                                    <span>
                                        School of Graphic Design<br>
                                        Bachelor’s degree<br>
                                        2010 – 2013
                                    </span>
                                    <span>
                                        Forest Lake High School<br>
                                        Degree in Computer Science<br>
                                        2007 – 2010
                                    </span>
                                    <span>
                                        Desert Sands Conservatory<br>
                                        Arts School<br>
                                        2007
                                    </span>
                                </div>
                            </div>

                            <div class="w-100 bottommargin d-block d-md-none"></div>

                            <div class="col-lg-4 col-md-6">
                                <h4>Experience</h4>
                                <div class="skill-info">
                                    <span>
                                        2021 - Today<br>
                                        Website Development
                                    </span>
                                    <span>
                                        2021 - 2012<br>
                                        Senior Frontend Developer<br>
                                        Full Time Job
                                    </span>
                                    <span>
                                        2021 - 2012<br>
                                        Graphic Design Company<br>
                                    </span>
                                </div>
                            </div>

                            <div class="w-100 bottommargin d-block d-lg-none clear"></div>

                            <div class="col-lg-4 col-12">
                                <h4>Skills</h4>
                                <ul class="skills">
                                    <li data-percent="80">
                                        <span>Wordpress</span>
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                        data-to="80" data-refresh-interval="30"
                                                        data-speed="1100"></span>%</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-percent="60">
                                        <span>CSS3</span>
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                        data-to="60" data-refresh-interval="30"
                                                        data-speed="1100"></span>%</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-percent="90">
                                        <span>HTML5</span>
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                        data-to="90" data-refresh-interval="30"
                                                        data-speed="1100"></span>%</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-percent="70">
                                        <span>jQuery</span>
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                        data-to="70" data-refresh-interval="30"
                                                        data-speed="1100"></span>%</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-percent="52">
                                        <span>Php</span>
                                        <div class="progress">
                                            <div class="progress-percent">
                                                <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                        data-to="52" data-refresh-interval="30"
                                                        data-speed="1100"></span>%</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="section-works" class="section page-section m-0"
                    style="background: #EEE url('{{ asset('/images/sections/2.jpg') }}') no-repeat center right; background-size: cover; padding: 100px 0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-1">
                                <div class="heading-block">
                                    <h2 class="font-secondary">Latest Works.</h2>
                                    <span class="mt-0">Lorem ipsum dolor sit amet.</span>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <ul class="niche-demos-lists mb-0 lists-1">
                                            <li class="mt-0"><a href="demo-restaurant.html"><img
                                                        src="{{ asset('/images/intro/niche/restaurant.jpg') }}"
                                                        alt="Image">Restaurant Demo</a></li>
                                            <li><a href="demo-photography.html"><img
                                                        src="{{ asset('/images/intro/niche/photography.jpg') }}"
                                                        alt="Image">Photography</a></li>
                                            <li><a href="demo-medical.html"><img
                                                        src="{{ asset('/images/intro/niche/medical.jpg') }}"
                                                        alt="Image">Medical</a></li>
                                            <li><a href="demo-spa.html"><img
                                                        src="{{ asset('/images/intro/niche/spa.jpg') }}"
                                                        alt="Image">Spa</a></li>
                                            <li><a href="demo-coffee.html"><img
                                                        src="{{ asset('/images/intro/niche/coffee.jpg') }}"
                                                        alt="Image">Coffee</a></li>
                                            <li><a href="demo-interior-design.html"><img
                                                        src="{{ asset('/images/intro/niche/interior-design.jpg') }}"
                                                        alt="Image">Interior Design</a></li>
                                            <li><a href="demo-barber.html"><img
                                                        src="{{ asset('/images/intro/niche/barber.jpg') }}"
                                                        alt="Image">Barber</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="niche-demos-lists mb-0 lists-2">
                                            <li><a href="demo-travel.html"><img
                                                        src="{{ asset('/images/intro/niche/travel.jpg') }}"
                                                        alt="Image">Travel</a></li>
                                            <li><a href="demo-media-agency.html"><img
                                                        src="{{ asset('/images/intro/niche/media-agency.jpg') }}"
                                                        alt="Image">Media Agency</a></li>
                                            <li><a href="demo-construction.html"><img
                                                        src="{{ asset('/images/intro/niche/construction.jpg') }}"
                                                        alt="Image">Construction</a></li>
                                            <li><a href="demo-writer.html"><img
                                                        src="{{ asset('/images/intro/niche/writer.jpg') }}"
                                                        alt="Image">Writer</a></li>
                                            <li><a href="demo-real-estate.html"><img
                                                        src="{{ asset('/images/intro/niche/real-estate/1.jpg') }}"
                                                        alt="Image">Real Estate</a></li>
                                            <li><a href="demo-business.html"><img
                                                        src="{{ asset('/images/intro/niche/business.jpg') }}"
                                                        alt="Image">Business</a></li>
                                            <li><a href="demo-app-landing.html"><img
                                                        src="{{ asset('/images/intro/niche/app-landing.jpg') }}"
                                                        alt="Image">App Landing</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#"
                                    class="button button-large button-border button-black button-dark topmargin-sm ml-0"><i
                                        class="icon-line-stack-2"></i> See More Works</a>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <div class="video-overlay d-block d-xl-none" style="background: rgba(255,255,255,0.9);"></div>
                    </div>
                </div>

                <div id="section-articles" class="section page-section m-0 bg-color clearfix" style="padding: 100px 0">
                    <div class="container clearfix">

                        <div class="dark">
                            <div class="heading-block">
                                <h2 class="font-secondary">Latest Articles.</h2>
                                <span class="mt-0">Lorem ipsum dolor sit amet.</span>
                            </div>
                        </div>

                        <div id="posts" class="post-grid row gutter-30 mb-0" data-layout="fitRows">

                            <div class="entry col-md-6 col-lg-4">
                                <div class="grid-inner">
                                    <div class="entry-box-shadow">
                                        <div class="entry-image mb-0">
                                            <a href="images/blog/full/17.jpg" data-lightbox="image"><img
                                                    src="{{ asset('/images/blog/1.jpg') }}"
                                                    alt="Standard Post with Image"></a>
                                        </div>
                                        <div class="entry-meta-wrapper">
                                            <div class="entry-meta mt-0">
                                                <a href="#" class="text-muted">March 25th, 2021</a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="#">You can now listen to headphones.</a></h2>
                                            </div>
                                            <div class="entry-content mt-3">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim
                                                    culpa reiciendis et explicabo tenetur...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-md-6 col-lg-4">
                                <div class="grid-inner">
                                    <div class="entry-box-shadow">
                                        <div class="entry-image mb-0">
                                            <a href="images/blog/full/17.jpg" data-lightbox="image"><img
                                                    src="{{ asset('/images/blog/2.jpg') }}"
                                                    alt="Standard Post with Image"></a>
                                        </div>
                                        <div class="entry-meta-wrapper">
                                            <div class="entry-meta mt-0">
                                                <a href="#" class="text-muted">March 25th, 2021</a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="#">Collaboratively monetize multifunctional.</a></h2>
                                            </div>
                                            <div class="entry-content mt-3">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim
                                                    culpa reiciendis et explicabo tenetur...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-md-6 col-lg-4">
                                <div class="grid-inner">
                                    <div class="entry-box-shadow">
                                        <div class="entry-image mb-0">
                                            <a href="images/blog/full/17.jpg" data-lightbox="image"><img
                                                    src="{{ asset('/images/blog/3.jpg') }}"
                                                    alt="Standard Post with Image"></a>
                                        </div>
                                        <div class="entry-meta-wrapper">
                                            <div class="entry-meta mt-0">
                                                <a href="#" class="text-muted">March 25th, 2021</a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="#">Professionally disinter-mediate excellent.</a></h2>
                                            </div>
                                            <div class="entry-content mt-3">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim
                                                    culpa reiciendis et explicabo tenetur...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="page-section dark border-0 p-0 clearfix" style="background-color: #1C1C1C;">
            <div class="container clearfix">
                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap clearfix" style="padding: 80px 0">

                    <div class="row col-mb-50">
                        <div class="col-lg-3">
                            <div class="footer-logo"><span class="font-weight-normal color ls1"
                                    style="font-size: 22px; ">SemiColonWeb.</span><br><small class="ls3 text-uppercase"
                                    style="color: rgba(255,255,255,0.2);">&copy; 2020 Reserved.</small></div>
                        </div>

                        <div class="col-lg-9">

                            <div class="row col-mb-50">
                                <div class="col-sm-6 col-md-4">
                                    <div class="widget">
                                        <h4>Contact Us</h4>
                                        <div class="footer-content">
                                            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547
                                            632521<br>
                                            <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                            <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="widget">
                                        <h4>Location</h4>
                                        <div class="footer-content">
                                            <address class="mb-0">
                                                <strong>Headquarters:</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                            </address>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="widget">
                                        <h4>Social</h4>
                                        <a href="#" class="social-icon bg-transparent si-small si-light si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon bg-transparent si-small si-light si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon bg-transparent si-small si-light si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon bg-transparent si-small si-light si-instagram">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>
                                        <a href="#" class="social-icon bg-transparent si-small si-light si-dribbble">
                                            <i class="icon-dribbble"></i>
                                            <i class="icon-dribbble"></i>
                                        </a>

                                        <a href="#" class="social-icon bg-transparent si-small si-light si-vimeo">
                                            <i class="icon-vimeo"></i>
                                            <i class="icon-vimeo"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights" style="background-color: #111;">
                <div class="container clearfix">

                    <div class="w-100 text-center">
                        <p class="mb-3">Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.</p>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/plugins.min.js') }}"></script>

    <!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('/js/functions.js') }}"></script>
	
	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{ asset('/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/addons/revolution.addon.particles.min.js') }}"></script>

	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script>
        jQuery(window).scroll(function () {
            var pixs = jQuery(window).scrollTop(),
                opacity = pixs / 650,
                element = jQuery('.blurred-img'),
                elementHeight = element.outerHeight(),
                elementNextHeight = jQuery('.content-wrap').find('.page-section').first().outerHeight();
            if ((elementHeight + elementNextHeight + 50) > pixs) {
                element.addClass('blurred-image-visible');
                element.css({ 'opacity': opacity });
            } else {
                element.removeClass('blurred-image-visible');
            }
        });

		var revapi56,
		tpj=jQuery;
		var $ = jQuery.noConflict();

		tpj(document).ready(function() {
			if(tpj("#rev_slider_56_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_56_1");
			}else{
				revapi56 = tpj("#rev_slider_56_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						 mouseScrollReverse:"default",
						onHoverStop:"off",
						bullets: {
							enable:false,
							hide_onmobile:false,
							style:"hermes",
							hide_onleave:false,
							direction:"horizontal",
							h_align:"center",
							v_align:"bottom",
							h_offset:0,
							v_offset:30,
							space:5,
							tmp:''
						}
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					parallax: {
						type:"scroll",
						origo:"slidercenter",
						speed:400,
						levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
					},
					shadow:0,
					spinner:"spinner3",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
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
				var ua = window.navigator.userAgent;
				var msie = ua.indexOf("MSIE ");

				if(msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./) || ('CSS' in window && 'supports' in window.CSS && !window.CSS.supports('mix-blend-mode', 'screen'))) {
					var bgColor = 'rgba(245, 245, 245, 0.5)';
					//jQuery('.rev_slider .tp-caption[data-blendmode]').removeAttr('data-blendmode').css('background', bgColor);
					jQuery('.rev_slider .tp-caption[data-blendmode]').remove();
				}
			}
		});	/*ready*/
    </script>

</body>

</html>