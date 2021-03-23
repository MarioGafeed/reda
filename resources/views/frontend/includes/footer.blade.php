<!-- footer start -->
<footer class="bg-light-white relative">
    <div class="main-footer pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h6 class="fs-23 f-700 mb-25 txt-center" >{{ trans('main.about') }}</h6>
                    <div class="about_title-footer pr-60 mb-md-40 txt-{{GetDirection()}}">
                        <p>{{ trans('main.about_desc1') }}</p>
                        <p> {{ trans('main.about_desc2') }}<a href="/about" class="underline">{{ trans('main.read_more') }}</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 mb-md-40">
                    <h6 class="fs-23 f-700 mb-25 txt-center" >{{ trans('main.qlinks') }}</h6>
                    <ul class="footer-links txt-center">
                        <li> <a href="/about">{{ trans('main.about') }}</a>
                        </li>
                        <li> <a href="/contact">{{ trans('main.contact') }}</a>
                        </li>
                        <li> <a href="/posts/index">{{ trans('main.blog') }}</a>
                        </li>
                        <li> <a href="/vposts/index">{{ trans('main.videos') }}</a>
                        </li>
                        <li> <a href="#" onclick='alert("إنتظروا الإصدار القادم بنعمة ربنا")'>{{ trans('main.terms') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-md-20">
                    <h6 class="fs-23 f-700 mb-25 txt-{{GetDirection()}}">{{ trans('main.subscribe') }}</h6>
                    <form>
                        <div class="form-group relative">
                            <input type="text" class="form-control input-border txt-center" id="name" aria-describedby="name" placeholder="{{ trans('main.ur_name') }}"> <i class="far fa-user transform-v-center"></i>
                        </div>
                        <div class="form-group relative mt-25 ">
                            <input type="email" class="form-control input-border txt-center" id="email" aria-describedby="email" placeholder="{{ trans('main.ur_email') }}"> <i class="far fa-envelope transform-v-center"></i>
                        </div>
                        <div class="text-left text-md-right mt-30 footer-center">
                            <button type="submit" class="btn btn-small bg-yellow">{{ trans('main.subscribe_b') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer pb-35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hr-2 mb-35 bg-black opacity-1"></div>
                </div>
                <div class="col-lg-6 col-md-12 text-center text-lg-left mb-md-10">
                    <ul class="social-icons footer-social">
                        <li> <a href="https://www.facebook.com/DoctorsWithAMission/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <!-- <li> <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li> <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li> -->
                        <li> <a href="https://youtube.com/channel/UCPg_ihi25b6MBda2Obc0_qA" target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 text-center text-lg-right"> Mario © D.W.A.M. 2021 Allright Reserved</div>
            </div>
        </div>
        <a href="#" class="btn scroll-btn f-right flex-center z-25 opacity-0"> <i class="fas fa-arrow-up"></i>
        </a>
    </div>
</footer>
<!-- footer end -->
