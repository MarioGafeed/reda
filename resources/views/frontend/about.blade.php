@extends('frontend.layout.app')

@section('content')

<!-- Inner start -->
<section class="inner-banner bg-cover" style="background-image: url('frontend/assets/img/team/44.jpg');">
</section>
<section class="bnr-pagination pt-sm-20 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{trans('main.about')}}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="/" class="yellow">{{trans('main.home')}} </a>
                    </li>
                    <li>{{trans('main.about')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- About Us start -->
<section class="team-about pt-80 pb-80 pb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="quote-head relative">
                    <h5 class="fs-17 yellow f-700 mb-10">{{ trans('main.about_title') }}</h5>
                    <h2 class="f-500 fs-34 lh-14 mb-55">“{{trans('main.about_desc')}}” </h2>
                    <span class="icon-bg-quote transform-center opacity-5"><img src="frontend/assets/img/Christian-cross.svg" alt=""></span>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="photo-collage">
                    <div class="photo-left shadow-1">
                        <img src="frontend/assets/img/gallery/collage1.jpg" alt="">
                    </div>
                    <div class="photo-center transform-h-center shadow-1 z-10">
                        <img src="frontend/assets/img/gallery/collage2.jpg" alt="">
                    </div>
                    <div class="photo-right shadow-1">
                        <img src="frontend/assets/img/gallery/collage3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us end -->
<!-- about info start -->
<section class="pb-80">
    <div class="container">
        <div class="row text-center text-lg-left">
            <div class="col-lg-6">
                <h3 class="lh-15 mb-md-20 mt-xs-10">{{trans('main.about_desc_right')}}</h3>
            </div>
            <div class="col-lg-5 offset-lg-1">                
                <p>{{trans('main.about_desc_left')}}</p>
                <p class="mb-0">{{trans('main.about_desc_left2')}}</p>
            </div>
        </div>
    </div>
</section>
<!-- about info end -->
<!-- video start -->
<section class="video-start pt-80 pb-80" style="background-image: url('frontend/assets/img/bg/video-bg.jpg');" data-overlay="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="our-style-text z-10">
                    <a href="https://www.youtube.com/watch?v=ZTC8ay17Oi8" class="laink-arrow opacity-1 z-10 popup-video  mb-35"> <i class="fas fa-play"></i>
                    </a>
                    <h3 class="white fs-58 f-700 mb-25">{{trans('main.about_video_title')}}</h3>
                    <p class="white">{{trans('main.about_video_desc')}}</p> <span class="line-vd"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video end -->
<!-- About Pastor start -->
<!-- <section class="pt-80 pb-80 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 z-5">
                <div class="about-image relative shadow-1 js-tilt mb-md-40">
                    <img src="frontend/assets/img/about/user-4.jpg" class="" alt="">
                    <div class="user-exprnce mb-50 ml-50 mb-xs-10 ml-xs-00">
                        <h3 class="yellow fs-85 f-700 mb-10">15</h3>
                        <h4 class="white f-700 fs-24">Years of Experience</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 pl-30 pl-lg-15 z-5">
                <h3 class="f-700 fs-41 mb-30">Robertson Alex</h3>
                <div class="simple-quote pl-25 mb-30">
                    <p class="fs-15 rbt-slab">Worship is a way of feeling, of touching, of loving. What you have caught on film is captured forever… It remembers little things, long after you have forgotten everything.</p>
                </div>
                <h4 class="f-700 mb-15 fs-20">A Short Story About Me</h4>
                <p class=" mb-30">Maecenas non faucibus nibh. Duis et eleifend sem, ut venenatis quam. Pelle ntesque eu quam ac arcu elementum vestibulum quis eu nulla. Donec lacinia risus ac ex mollis, sed faucibus magna pellentesque. Praesent volutpat mi ut leo vehicula,
                    iaculis finibus leo fermentum...<a href="#" class="underli">Readmore</a>
                </p>
                <h4 class="f-700 mb-15 fs-20">Why Choose My Church?</h4>
                <ul class="yello-dot-list">
                    <li>Aenean vehicula molestie aliquet. Maecenas sed pretium</li>
                    <li>Nulla malesuada id ipsum quis vestibulum. In in sapien</li>
                    <li>Fringilla, gravida nisl sit amet, consequat turpis.</li>
                    <li>Praesent at gravida dolor. Duis tristique sit amet lacus</li>
                    <li>Nulla malesuada id ipsum quis vestibulum. In in sapien</li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- About Pastor End -->
<!-- team start -->
<section class="team-inner pt-80 pb-80">
    <div class="container">
        <div class="row z-5 align-items-center mb-55">
            <div class="col-md-9 col-sm-12 text-center text-md-left">
                <h3 class="f-700 fs-41 mb-sm-25">{{trans('main.about_pastor_txt_back')}}
                    <span class="fade-texts">{{trans('main.about_pastor_txt_title')}}</span>
                </h3>
            </div>
            <div class="col-md-3 col-sm-12 text-center text-md-right"> <a href="#" onclick='alert("في الإصدار القادم صلوا لأجلنا")' class="viewall fs-12 f-700">{{trans('main.view_all')}}
                <i class="fas fa-long-arrow-alt-right ml-5"></i>
            </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-img shadow-1 js-tilt3">
                    <img src="frontend/assets/img/team/1.jpg" alt="">
                    <div class="team-text text-center">
                        <h4 class="fs-22 f-700 yellow mb-10">{{trans('main.about_pastor1')}}</h4>
                        <p class="white mb-0">{{trans('main.about_pastor1_role')}}</p>
                        <div class="social-team">
                            <ul class="social-icons white">
                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-img shadow-1 js-tilt3">
                    <img src="frontend/assets/img/team/2.jpg" alt="">
                    <div class="team-text text-center">
                        <h4 class="fs-22 f-700 yellow mb-10">{{trans('main.about_pastor2')}}</h4>
                        <p class="white mb-0">{{trans('main.about_pastor2_role')}}</p>
                        <div class="social-team">
                            <ul class="social-icons white">
                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-img shadow-1 js-tilt3">
                    <img src="frontend/assets/img/team/3.jpg" alt="">
                    <div class="team-text text-center">
                        <h4 class="fs-22 f-700 yellow mb-10">{{trans('main.about_pastor3')}}</h4>
                        <p class="white mb-0">{{trans('main.about_pastor3_role')}}</p>
                        <div class="social-team">
                            <ul class="social-icons white">
                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-img shadow-1 js-tilt3">
                    <img src="frontend/assets/img/team/4.jpg" alt="">
                    <div class="team-text text-center">
                        <h4 class="fs-22 f-700 yellow mb-10">{{trans('main.about_pastor4')}}</h4>
                        <p class="white mb-0">{{trans('main.about_pastor4_role')}}</p>
                        <div class="social-team">
                            <ul class="social-icons white">
                                <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li> <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- team end -->
<!-- testimonials start -->
<section class="pt-80 pb-80 pb-xs-45 bg-light-white">
    <div class="container">
        <!-- <div class="row mb-sm-35">
            <div class="col-md-9 col-sm-12 text-center text-md-left">
                <h3 class="f-700 fs-41 mb-45 mb-sm-30">What Our Members Says
                    <span class="fade-texts testi-2s">Testimonials</span>
                </h3>
            </div>
            <div class="col-md-3 col-sm-12 text-center text-md-right">
                <div class="testimonial-nav">
                    <a href="#" class="quote-nav bg-yellow left mr-15"> <i class="fas fa-long-arrow-alt-left"></i>
                    </a>
                    <a href="#" class="quote-nav bg-yellow right"> <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="hr-1 hr-sep bg-black opacity-1 mt-10 mb-35"></div>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme testimonial-slide2">
                    <div class="item">
                        <div class="each-quote relative">
                            <ul class="stars-rate fs-14 mb-5" data-starsactive="5">
                                <li class="text-md-left text-center"> <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                            <h4 class="fs-22 f-700 mt-10 mb-30">He is the Best</h4>
                            <p class="mb-25">Quisque enim ipsum, commodo et ven enatis rutrum, luctus in enim. Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor, pulvinar id ligula non, congue aliquam ve.</p>
                            <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                <div class="img-div mr-20 pb-0">
                                    <div class="client-image">
                                        <img src="frontend/assets/img/user/client1.jpg" class=" rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="client-text-2 mb-10">
                                    <h6 class="client-name yellow fs-17 f-700">David Joe</h6>
                                    <p class="mb-0 mt-5 fs-13 f-500">CEO, Abc Company</p>
                                </div>
                            </div> <span class="quote-icon-2 light-white"><i class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="each-quote relative">
                            <ul class="stars-rate fs-14 mb-5" data-starsactive="5">
                                <li class="text-md-left text-center"> <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                            <h4 class="fs-22 f-700 mt-10 mb-30">100% Recommended</h4>
                            <p class="mb-25">Sed lobortis ipsum eu molestie sagittis. Nunc turpis sapien, accumsan sollicitudin suscipit ac, faucibus finibus justo. Nullam a tristique ligula. Ut gravida erat vitae viverra varius.</p>
                            <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                <div class="img-div mr-20 pb-0">
                                    <div class="client-image">
                                        <img src="frontend/assets/img/user/client2.jpg" class=" rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="client-text-2 mb-10">
                                    <h6 class="client-name yellow fs-17 f-700">Jessica</h6>
                                    <p class="mb-0 mt-5 fs-13 f-500">CEO, Abc Company</p>
                                </div>
                            </div> <span class="quote-icon-2 light-white"><i class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="each-quote relative">
                            <ul class="stars-rate fs-14 mb-5" data-starsactive="5">
                                <li class="text-md-left text-center"> <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                            <h4 class="fs-22 f-700 mt-10 mb-30">Loved it</h4>
                            <p class="mb-25">Donec lacinia risus ac ex mollis, sed faucibus magna pellentesque. Praesent volutpat mi ut leo vehicula, iaculis finibus leo fermentum. Curabitur at eros quis nisi.</p>
                            <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                <div class="img-div mr-20 pb-0">
                                    <div class="client-image">
                                        <img src="frontend/assets/img/user/client3.jpg" class=" rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="client-text-2 mb-10">
                                    <h6 class="client-name yellow fs-17 f-700">Angelina</h6>
                                    <p class="mb-0 mt-5 fs-13 f-500">CEO, Abc Company</p>
                                </div>
                            </div> <span class="quote-icon-2 light-white"><i class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="each-quote relative">
                            <ul class="stars-rate fs-14 mb-5" data-starsactive="5">
                                <li class="text-md-left text-center"> <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                            <h4 class="fs-22 f-700 mt-10 mb-30">He is the Best</h4>
                            <p class="mb-25">Quisque enim ipsum, commodo et ven enatis rutrum, luctus in enim. Quisque dapibus lacus non pulvinar lobortis. Cras odio dolor, pulvinar id ligula non, congue aliquam ve.</p>
                            <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                <div class="img-div mr-20 pb-0">
                                    <div class="client-image">
                                        <img src="frontend/assets/img/user/client1.jpg" class=" rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="client-text-2 mb-10">
                                    <h6 class="client-name yellow fs-17 f-700">David Joe</h6>
                                    <p class="mb-0 mt-5 fs-13 f-500">CEO, Abc Company</p>
                                </div>
                            </div> <span class="quote-icon-2 light-white"><i class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="each-quote relative">
                            <ul class="stars-rate fs-14 mb-5" data-starsactive="5">
                                <li class="text-md-left text-center"> <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </li>
                            </ul>
                            <h4 class="fs-22 f-700 mt-10 mb-30">100% Recommended</h4>
                            <p class="mb-25">Sed lobortis ipsum eu molestie sagittis. Nunc turpis sapien, accumsan sollicitudin suscipit ac, faucibus finibus justo. Nullam a tristique ligula. Ut gravida erat vitae viverra varius.</p>
                            <div class="client-2-img d-flex align-items-center justify-content-md-start justify-content-center">
                                <div class="img-div mr-20 pb-0">
                                    <div class="client-image">
                                        <img src="frontend/assets/img/user/client2.jpg" class=" rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="client-text-2 mb-10">
                                    <h6 class="client-name yellow fs-17 f-700">Jessica</h6>
                                    <p class="mb-0 mt-5 fs-13 f-500">CEO, Abc Company</p>
                                </div>
                            </div> <span class="quote-icon-2 light-white"><i class="fas fa-quote-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="hr-1 bg-black opacity-1 mt-40 mb-50"></div>
            </div>
        </div> -->
        <!-- client list start -->
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="happyclients text-center mr-55 mr-lg-00 mb-md-45 mb-xs-15">
                    <h3 class="f-700 fs-41 lh-14">{{trans('main.about_squre1')}}<span class="counter yellow"> {{trans('main.about_num')}}</span>{{trans('main.about_squre2')}}</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="clients-logos">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="logo-each flex-center">
                                <img src="frontend/assets/img/clients/1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="logo-each flex-center">
                                <img src="frontend/assets/img/clients/2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="logo-each flex-center">
                                <img src="frontend/assets/img/clients/3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="logo-each flex-center">
                                <img src="frontend/assets/img/clients/4.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="logo-each flex-center">
                                <img src="frontend/assets/img/clients/5.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center">
                            <div class="logo-each flex-center"> <a href="#" onclick='alert("في الإصدار القادم صلوا لأجلنا")' class="btn btn-yellow f-700 btn-md shadow-1">
                                    {{trans('main.view_all')}}<i class="fas fa-chevron-right ml-15 fs-11"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- client list end -->
    </div>
</section>

@endsection
