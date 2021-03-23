@extends('frontend.layout.app')

@section('content')


<!-- Inner start -->
<div class="inner-banner relative bg-cover" style="background-image: url('{{ asset("uploads/{$myvpost->image}") }} ');">
    <a href="{{ $myvpost->content  }}" class="laink-arrow btn-lg z-10 popup-video transform-center"> <i class="fas fa-play"></i>
    </a>
</div>
<section class="bnr-pagination pt-sm-20 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{ trans('main.pub_by') }} {{ $myvpost->user->name }}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="/" class="yellow">{{ trans('main.home') }} </a>
                    </li>
                    <li>
                      @if(GetLanguage() == 'en')
                        {{ json_decode($myvpost->title)->en }}
                      @else
                        {{ json_decode($myvpost->title)->ar }}
                      @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- Sermon head start -->
<section class="blogs-header pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="blog-by-info pt-20 pb-20 mb-55">
                    <ul class="list-inline fs-13 text-left text-sm-center">
                        <li class="list-inline-item"> <i class="far fa-user mr-10 fs-13 yellow"></i>
                          @if(GetLanguage() == 'en')
                            {{ json_decode($myvpost->title)->en }}
                          @else
                            {{ json_decode($myvpost->title)->ar }}
                          @endif
                        </li>
                        <li class="list-inline-item"> <i class="far fa-calendar mr-10 fs-13 yellow"></i> {{ $myvpost->updated_at  }}</li>
                        <!-- <li class="list-inline-item"> <i class="far fa-comments mr-10 fs-13 yellow"></i> 30 Comments</li> -->
                    </ul>
                </div>
                <div class="blog-head-top relative">
                    <ul class="breadcrumb-blog rbt-slab fs-17 mb-10 f-700">
                        <li class="yellow">
                          @if(GetLanguage() == 'en')
                            {{ json_decode($myvpost->title)->en }}
                          @else
                            {{ json_decode($myvpost->title)->ar }}
                          @endif
                        </li>
                        <li class="yellow">
                          @if(GetLanguage() == 'en')
                            {{ json_decode($myvpost->vcategory->title)->en }}
                          @else
                            {{ json_decode($myvpost->vcategory->title)->ar }}
                          @endif
                        </li>
                    </ul>
                    <h2 class="mt-20 f-700 lh-12">
                      @if(GetLanguage() == 'en')
                        {{ json_decode($myvpost->title)->en }}
                      @else
                        {{ json_decode($myvpost->title)->ar }}
                      @endif
                    </h2>
                    <div class="nav-blog-detail mt-md-45">
                        <a href="#" class="left fs-13 f-700 transform-v-center"> <i class="fas fa-long-arrow-alt-left mr-20"></i>{{ trans('main.prev') }}</a> <a href="#" class="right fs-13 f-700 transform-v-center">
                    {{ trans('main.next') }}<i class="fas fa-long-arrow-alt-right ml-20"></i>
                </a>
                    </div>
                </div>
                <div class="blog-by-info pt-20 pb-20 mb-55 mt-55">
                    <ul class="list-inline fs-13 text-left text-sm-center">
                        <li class="list-inline-item"> <i class="fa fa-music mr-10 fs-13 yellow"></i> </li>
                        <li class="list-inline-item"> <i class="fa fa-play-circle mr-10 fs-13 yellow"></i></li>
                        <li class="list-inline-item"> <i class="fas fa-share-alt mr-10 fs-13 yellow"></i></li>
                        <li class="list-inline-item"> <i class="fa fa-heart mr-10 fs-13 yellow"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sermon head end -->
<!-- Sermon details start -->
<section class="blog-details pb-80">
    <div class="container">
        <div class="row ">
            <div class="col-lg-10 offset-lg-1">
                <!-- left Sermon start -->
                <div class="blog-detail-left">
                    <h3 class="lh-15 mb-20">
                      @if( GetLanguage() == 'en' )
                          {{ json_decode($myvpost->desc)->en }}
                      @else
                          {{ json_decode($myvpost->desc)->ar }}
                      @endif
                    </p>
                    <p>
                      {{$myvpost->keyword}}
                    </p>
                    <!-- <div class="block-quote-2 mb-30 mt-20"> <span class="quote-icon2 yellow">“</span>
                        <div class="block-quote-text z-5">
                            <p class="blue fs-23 lh-15 rbt-slab">Aenean vestibulum sapien ut felis consequat tempus. Quisque condimentum ipsum a condimentum ornare Suspendisse potentis</p> <span class="block-quote-by fs-13 f-400 uppercase">Admin</span>
                        </div>
                    </div>
                    <h3 class="f-700 mb-10">Condimentum Lornare</h3>
                    <p>Vestibulum ac porttitor dolor, ac feugiat nunc. Nulla eleifend massa tortor, nec laoreet lectus varius ac. Fusce scelerisque consequat eros, non venenatis turpis ultricies id. Etiam nec sagittis diam, a tempor risus. Nunc nisl
                        felis, congue non euismod ac, dignissim id eros.</p>
                    <div class="tag-social pt-20 pt-sm-15 pb-20 mt-30">
                        <div class="row align-items-center">
                            <div class="col-xl-7">
                                <div class="tag-list d-flex align-items-center"> <span class="f-700 mr-15">Tags:</span>
                                    <ul>
                                        <li><a href="#">#God</a>
                                        </li>
                                        <li><a href="#">#Faith</a>
                                        </li>
                                        <li><a href="#">#Prayer</a>
                                        </li>
                                        <li><a href="#">#Church</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="social-shate mt-lg-15 d-flex align-items-center justify-content-start justify-content-xl-end"> <span class="f-700 mr-15">Share:</span>
                                    <ul class="social-icons footer-social social-md">
                                      <li> <a href="https://www.facebook.com/DoctorsWithAMission/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                      </li>
                                      <li> <a href="https://youtube.com/channel/UCPg_ihi25b6MBda2Obc0_qA" target="_blank"><i class="fab fa-youtube"></i></a>
                                      </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments">
                        <h3 class="f-700 mt-30 mb-30 mb-xs-15">Comments (<span>3</span>)</h3>
                        <ul class="connent-lists">
                            <li>
                                <div class="d-flex flex-column flex-sm-row">
                                    <div class="comment-image mt-10">
                                        <img src="assets/images/testimonial/member-3.jpg" class="rounded-circle" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="top-head">
                                            <h6 class="f-700">Very Nice</h6>
                                        </div>
                                        <p class="mt-10 mb-10">Nunc quis lorem quis sapien tristique blandit. Etiam ac interdum sem. Pellentesque volutpat id neque et viverra. Nulla lacinia.</p>
                                        <div class="name-replay">
                                            <ul class="list-inline fs-13">
                                                <li class="list-inline-item"> <i class="far fa-user mr-10 fs-13 yellow"></i> David Mille</li>
                                                <li class="list-inline-item"> <i class="far fa-calendar mr-10 fs-13 yellow"></i> August 11, 2019</li>
                                            </ul>
                                            <a href="#" class="reply yellow f-700"> <i class="fas fa-reply mr-10"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="replay-comment">
                                <div class="d-flex flex-column flex-sm-row">
                                    <div class="comment-image mt-10">
                                        <img src="assets/images/testimonial/member-2.jpg" class="rounded-circle" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="top-head">
                                            <h6 class="f-700">Good News</h6> <span class="comment-date">20 may 2019</span>
                                        </div>
                                        <p class="mt-10 mb-10">Donec lobortis justo nec imperdiet rutrum. Sed at diam sed tellus su scipit consectetur. Mauris a fermentum magna</p>
                                        <div class="name-replay">
                                            <ul class="list-inline fs-13">
                                                <li class="list-inline-item"> <i class="far fa-user mr-10 fs-13 yellow"></i> Mary Jhoseoh</li>
                                                <li class="list-inline-item"> <i class="far fa-calendar mr-10 fs-13 yellow"></i> July 5, 2019</li>
                                            </ul>
                                            <a href="#" class="reply yellow f-700"> <i class="fas fa-reply mr-10"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex flex-column flex-sm-row">
                                    <div class="comment-image mt-10">
                                        <img src="assets/images/testimonial/member-1.jpg" class="rounded-circle" alt="">
                                    </div>
                                    <div class="comment-text">
                                        <div class="top-head">
                                            <h6 class="f-700">Very Nice Sermon</h6> <span class="comment-date">20 may 2019</span>
                                        </div>
                                        <p class="mt-10 mb-10">Nunc quis lorem quis sapien tristique blandit. Etiam ac interdum sem. Pellentesque volutpat id neque et viverra. Nulla lacinia.</p>
                                        <div class="name-replay">
                                            <ul class="list-inline fs-13">
                                                <li class="list-inline-item"> <i class="far fa-user mr-10 fs-13 yellow"></i>Jessica</li>
                                                <li class="list-inline-item"> <i class="far fa-calendar mr-10 fs-13 yellow"></i> April 11, 2019</li>
                                            </ul>
                                            <a href="#" class="reply yellow f-700"> <i class="fas fa-reply mr-10"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="post-comment">
                        <h3 class="f-700 mt-30 mb-30">Leave Your Comment </h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group relative mb-30">
                                        <input type="text" class="form-control input-white yellow-border" name="name" placeholder="Enter your name">
                                        <i class="far fa-user transform-v-center"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group relative mb-30">
                                        <input type="email" class="form-control input-white yellow-border" id="email2" placeholder="Enter your email">
                                        <i class="far fa-envelope transform-v-center"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control input-white yellow-border mb-30" name="message" id="message" cols="30" rows="7" placeholder="Your message"></textarea>
                                </div>
                                <div class="col-lg-12 mb-50">
                                    <a href="#" class="btn btn-black shadow-1">SUBMIT</a>
                                </div>
                            </div>
                        </form>
                    </div> -->

                    <div class="related-blogs">
                        <div class="row align-items-center mb-25">
                            <div class="col-sm-9 col-12 text-center text-sm-left">
                                <h3 class="f-700 mb-xs-25">{{ trans('main.tags') }}</h3>
                            </div>
                            <div class="col-sm-3 col-12 text-center text-sm-right">
                                <div class="blog-nav">
                                  @foreach($myvpost->vtaqs as $vtaq)
                                    <li><a href="#">#{{ $vtaq->name }}</a>
                                  @endforeach
                                   </li>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel owl-theme relative-slider" dir="ltr">
                                  @foreach($vpostsHasSameTaqs As $posthsataq)
                                    <div class="item">
                                        <div class="each-blog">
                                            <div class="blog-img relative">
                                                <img src="{{ asset('uploads/'.$posthsataq->image) }}" alt="">
                                                <a href="#" class="blog-link transform-center"> <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                            <div class="blog-text">
                                                <h4 class="mt-20 mb-20">
                                                    <a href="{{ url("/vpost/show/{$posthsataq->id}") }} " class="f-700 fs-19">
                                                      @if(GetLanguage() == 'en')
                                                        {{ str_limit(json_decode($posthsataq->desc)->en, 40) }}
                                                      @else
                                                      {{ str_limit(json_decode($posthsataq->desc)->ar, 40) }}
                                                      @endif
                                                    </a>
                                                </h4>
                                                <div class="blog-data">
                                                    <ul class="d-flex align-items-center">
                                                        <li><i class="far fa-calendar-alt"></i>{{$posthsataq->updated_at->format('d M Y, h:i')}}</li>
                                                        <!-- <li><i class="fas fa-comment"></i>30 Comments</li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left Sermon end -->
        </div>
    </div>
</section>
<!-- Sermon details end -->

@endsection
