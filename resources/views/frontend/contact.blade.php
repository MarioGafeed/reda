@extends('frontend.layout.app')

@section('content')

<!-- Inner start -->
<section class="inner-banner bg-cover" style="background-image: url('frontend/assets/img/team/team-banner.jpg');">
    <h1 class="transform-center">{{ trans('main.touch') }}</h1>
</section>
<section class="bnr-pagination pt-sm-20 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{ trans('main.contact') }}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="/" class="yellow">{{ trans('main.home') }} </a>
                    </li>
                    <li>{{ trans('main.contact') }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- contact start -->
<section class="contact-2 pt-75">
    <div class="container">
        <div class="row mb-40">
            <div class="col-lg-12 mb-55 mb-sm-30">
                <h2 class="f-700 fs-41 text-left text-lg-center">{{ trans('main.con_info') }}
                    <span class="fade-texts my-style transform-center">{{ trans('main.contact') }}</span>
                </h2>
            </div>
            <div class="col-lg-4 col-sm-6 mb-md-30">
                <div class="each-ctnct-info">
                    <div class="ctnct-info-icon"> <i class="fas fa-phone"></i>
                    </div>
                    <h5 class="fs-12 f-500 mb-10">{{ trans('main.call') }}</h5>
                    <p class="bld-text"> <a href="#" class="fs-16 f-500">01224246679</a>
                        <a href="#" class="fs-16 f-500">01223945545</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-md-30">
                <div class="each-ctnct-info">
                    <div class="ctnct-info-icon"> <i class="fas fa-envelope"></i>
                    </div>
                    <h5 class="fs-12 f-500 mb-10">{{ trans('main.send_mail') }}</h5>
                    <p class="bld-text"> <a href="#" class="fs-16 f-500">dwam@dwam4j.net</a>
                        <a href="#" class="fs-16 f-500">contact@dwam4j.net</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="each-ctnct-info">
                    <div class="ctnct-info-icon"> <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5 class="fs-12 f-500 mb-10 txt-center">{{ trans('main.our_add') }}</h5>
                    <p class="bld-text"> <a href="#" class="fs-16 f-500">{{ trans('main.full_add') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->
<!-- contact form -->
<section class="contact-form pt-0 pb-80">
    <div class="container">
        <div class="yellow-border-7 shadow-2">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="f-700 mb-25 fs-41 text-left text-lg-center">{{trans('main.send_message')}}</h2>
                </div>
                @if(session('success'))
                  <div class="col-lg-12 alert alert-success txt-center">
                      {{ session('success') }}
                  </div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{ url('contact/message/send') }}"  class="relative z-5 mt-10">
                      @csrf
                        <div class="row">

                            <div class="col-lg-4">
                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="form-group relative mb-30 mb-sm-20">
                                    <input type="text" class="form-control input-lg input-white shadow-5 txt-center" name="name" placeholder="{{ trans('main.name') }}" >  <i class="far fa-user transform-v-center"></i>
                                    @if ($errors->has('name'))
                                        <span class="help-block" style="color:red;">
                                            <strong class="help-block">{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                             </div>
                           </div>

                            <div class="col-lg-4">
                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="form-group relative mb-30 mb-sm-20">
                                    <input type="email" class="form-control input-lg input-white shadow-5 txt-center" name="email" placeholder="{{ trans('main.email') }}" > <i class="far fa-envelope transform-v-center"></i>
                                    @if ($errors->has('email'))
                                        <span class="help-block" style="color:red;">
                                            <strong class="help-block">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group relative mb-30 mb-sm-20">
                                    <input type="text" class="form-control input-lg input-white shadow-5 txt-center" id="phone" name="phone" placeholder="{{ trans('main.phone') }}"> <i class="fas fa-mobile-alt transform-v-center"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group relative mb-30 mb-sm-20">
                                    <input type="text" class="form-control input-lg input-white shadow-5 txt-center" id="subject" name="subject" placeholder="{{ trans('main.subject') }}"> <i class="far fa-envelope transform-v-center"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <div class="form-group relative mb-30 mb-sm-20">
                                    <textarea class="form-control input-white shadow-5 txt-center" name="body" id="message" cols="30" rows="7" placeholder="{{ trans('main.your_message') }}"></textarea>
                                    @if ($errors->has('body'))
                                        <span class="help-block txt-center" style="color:red;">
                                            <strong class="help-block txt-center">{{ $errors->first('body') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 text-center mt-10 mb-5"> <button  type="submit" class="btn btn-black shadow-1" >{{trans('main.submit')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form end -->

@endsection
