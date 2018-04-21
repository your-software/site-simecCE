@extends('layouts.app')

@section('title', 'Home')


@section('content')
   <!--================Slider Area =================-->
   <section class="main_slider_area">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
        <ul>
            <li data-index="rs-2946" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
                <img src="{{ url('img/slider-1.jpeg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYER NR. 1 -->
                <div class="slider_text_box">
                    
                    <div class="tp-caption tp-resizeme secand_text"
                        data-x="['center','center','center','center','center','center']"
                        data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','0','0']"
                        data-fontsize="['48','48','48','28','28','22']"
                        data-lineheight="['60','60','60','36','36','30']"
                        data-width="100%"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-transform_idle="o:1;"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['center','center','center','center','center','center']"

                        style="z-index: 8;font-family:'Poppins', sans-serif;font-weight:700;color:#fff;">
                        Sindicato dos Mediadores e Conciliadores<br/> Judiciais e Extrajudiciais do Estado do Ceará 
                    </div>

                    <div class="tp-caption tp-resizeme slider_button"
                        data-x="['center','center','center','center','center','center']"
                        data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['130','130','130','100','100','100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['center','center','center','center','center','center']">
                        <a class="bg_btn" href="#">About Us</a>
                        <a class="tp_btn" href="#">Get a quote</a>
                    </div>
                </div>
            </li>
            <li data-index="rs-2947" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <!-- MAIN IMAGE -->
                <img src="{{ url('img/slider-1.jpeg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYER NR. 1 -->
                <div class="slider_text_box">
                    <div class="tp-caption tp-resizeme secand_text"
                        data-x="['center','center','center','center','center','center']"
                        data-hoffset="['0','80','80','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['0','0','0','0','0']"
                        data-fontsize="['48','48','48','28','28','22']"
                        data-lineheight="['60','60','60','36','36','30']"
                        data-width="100%"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-transform_idle="o:1;"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['center','center','center','center','center','center']"

                        style="z-index: 8;font-family:'Poppins', sans-serif;font-weight:700;color:#fff;">Website Design, Brand Strategy, <br />Digital Marketing with Stunning Results
                    </div>

                    <div class="tp-caption tp-resizeme slider_button"
                        data-x="['center','center','center','center','center','center']"
                        data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['130','130','130','100','100','100']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['center','center','center','center','center','center']">
                        <a class="bg_btn" href="#">About Us</a>
                        <a class="tp_btn" href="#">Get a quote</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--================End Slider Area =================-->

<!--================Creative Feature Area =================-->
<section class="creative_feature_area">
    <div class="container">
        <div class="c_feature_box">
            <div class="row">
                <div class="col-lg-4">
                    <div class="c_box_item">
                        <a href="#"><h4><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h4></a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="c_box_item">
                        <a href="#"><h4><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h4></a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="c_box_item">
                        <a href="#"><h4><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h4></a>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="digital_feature p_100">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d_feature_text">
                        <div class="main_title">
                            <h2>We Are A Creative <br /> Digital Agency Focused on Growing Brands Online</h2>
                        </div>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                        <a class="read_btn" href="#">Read more</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d_feature_img">
                        <img src="img/oabce-logo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================Our Service Area =================-->
<section class="service_area">
    <div class="container">
        <div class="center_title">
            <h2>Our Services</h2>
            <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
        </div>
        <div class="row service_item_inner">
            <div class="col-lg-4">
                <div class="service_item">
                    <i class="ti-ruler-pencil"></i>
                    <h4>Website Design</h4>
                    <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service_item">
                    <i class="ti-desktop"></i>
                    <h4>Website Development</h4>
                    <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service_item">
                    <i class="ti-announcement"></i>
                    <h4>Digital Marketing</h4>
                    <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Our Service Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area p_50">
    <div class="container">
        <div class="testimonials_slider owl-carousel">
            <div class="item">
                <div class="media">
                    <img class="d-flex rounded-circle" src="img/testimonials-1.png" alt="">
                    <div class="media-body">
                        <img src="img/dotted-icon.png" alt="">
                        <p>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</p>
                        <h4><a href="#">Aigars Silkalns</a> - CEO DeerCreative</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media">
                    <img class="d-flex rounded-circle" src="img/testimonials-1.png" alt="">
                    <div class="media-body">
                        <img src="img/dotted-icon.png" alt="">
                        <p>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</p>
                        <h4><a href="#">Aigars Silkalns</a> - CEO DeerCreative</h4>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media">
                    <img class="d-flex rounded-circle" src="img/testimonials-1.png" alt="">
                    <div class="media-body">
                        <img src="img/dotted-icon.png" alt="">
                        <p>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</p>
                        <h4><a href="#">Aigars Silkalns</a> - CEO DeerCreative</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Testimonials Area =================-->

<!--================Latest News Area =================-->
<section class="latest_news_area p_50">
    <div class="container">
        <div class="b_center_title">
            <h2>Latest News</h2>
            <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
        </div>
        <div class="l_news_inner">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/l-news-1.jpg" alt=""></a></div>
                        <div class="l_news_content">
                            <a href="#"><h4>We Create Experiences</h4></a>
                            <p>The Fancy that recognize the talent and effort of the best web designers, develop-ers and agencies in the world.</p>
                            <a class="more_btn" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/l-news-2.jpg" alt=""></a></div>
                        <div class="l_news_content">
                            <a href="#"><h4>Simple, Fast And Fun</h4></a>
                            <p>The Fancy that recognize the talent and effort of the best web designers, develop-ers and agencies in the world.</p>
                            <a class="more_btn" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img"><a href="#"><img class="img-fluid" src="img/l-news-3.jpg" alt=""></a></div>
                        <div class="l_news_content">
                            <a href="#"><h4>Device Friendly</h4></a>
                            <p>The Fancy that recognize the talent and effort of the best web designers, develop-ers and agencies in the world.</p>
                            <a class="more_btn" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Latest News Area =================-->
@endsection