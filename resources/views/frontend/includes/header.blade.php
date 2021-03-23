
<!-- Header start -->
<header class="type4 transition-5 relative mg-header mg-header-dark">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2 col-4">
                <div class="logo2">
                    <a href="/">
                        <img src="{{ asset('frontend/assets/img/logo/logo5.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-4 text-right ">
                <span class="toggle-category">
                    <i class="fas fa-chevron-down"></i>
                  </span>
                <ul class="nav nav-links1 list-type2 justify-content-center">
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="/">{{ trans('main.home') }}</a>
                        <!-- <ul class="sub-menu">
                            <li class="mg-nav-item nav-link"> <a href="index.html">Homepage 1</a></li>
                            <li class="mg-nav-item nav-link"> <a href="index-2.html">Homepage 2</a></li>
                            <li class="mg-nav-item nav-link"> <a href="index-3.html">Homepage 3</a></li>
                            <li class="mg-nav-item nav-link"> <a href="index-4.html">Homepage 4</a></li>
                        </ul> -->
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="{{ url("/vposts/index") }}">{{ trans('main.videos') }}</a>
                        <ul class="sub-menu">
                            <li class="mg-nav-item nav-link"> <a href="#" onclick='alert("قريباً في الإصدار القادم")'>{{ trans('main.live_videos') }}</a></li>
                            @foreach($vcats as $vcat)
                              <li class="mg-nav-item nav-link"> <a href="{{ url("/vcatposts/show/{$vcat->id}") }}">
                                  @if(GetLanguage() == 'en')
                                  {{json_decode($vcat->title)->en}}
                                  @else
                                  {{json_decode($vcat->title)->ar}}
                                  @endif
                                 </a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="#">{{ trans('main.services') }}</a>
                        <ul class="sub-menu">
                            <li class="mg-nav-item nav-link"> <a href="#" onclick='alert("معذرة تحت الإنشاء")'>{{ trans('main.books') }}</a></li>
                            <li class="mg-nav-item nav-link"> <a href="#" onclick='alert("معذرة تحت الإنشاء")'>{{ trans('main.book_room') }}</a></li>
                        </ul>
                    </li>
                    <li class="mg-nav-item mg-nav-item-has-children nav-link">
                        <a href="{{ url("/posts/index") }}">{{ trans('main.blogs') }}</a>
                        <ul class="sub-menu">
                          @foreach($pcats as $pcat)
                            <li class="mg-nav-item nav-link"> <a href="{{ url("/catposts/show/{$pcat->id}") }}">
                                @if(GetLanguage() == 'en')
                                {{json_decode($pcat->title)->en}}
                                @else
                                {{json_decode($pcat->title)->ar}}
                                @endif
                               </a></li>
                          @endforeach
                        </ul>
                    </li>
                  <!-- <h3 style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }}  " class="form-title font-green">{{ trans('main.login') }}</h3> -->

                  @if (GetLanguage() == 'en')
                   <li class="nav-link">
                      <!-- <a style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }} ; position: absolute;  {{ GetLanguage() != 'en' ? 'left' : 'right' }} : 30px; top: {{ $errors->count() ? '108px' : '37px' }}; text-decoration: none" href="{{ url('/lang/ar') }}"> -->

                      <a href="{{ url('/lang/ar') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAYAAAB24g05AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAAPwAAAD8BR5eJ4AAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAEOSURBVCiRpZHNSsNQEEbPTXOtoc1NmyhFK6ioCLXioq4UdOtz+Ia+g+7cFQURhYClikRtqGkTm8SFbkrSWHC23w9nZgTnnZR/jFYkiiRFJMX9+izBSRbZ6ks0BPcrEZ42np+g7SuOqiFi/xUOXji1Qtq+mo/ACSW2GvJsN9DkElEy4UH2qdeGOCOJV/4qJmhqJgsqpLNzzHLFpqEcTlpnKCugqZl/E/SiAU5osWkZGHINfxSwrgS3I4teNAA57ReZN6Zw+GlTW/XY3t0A4PHO5e2pzrX5DmK6IHtEAV3jAzXew70UuFeC6rhFtzLIhHNXAAhLCRfBDaXyjxwHE2I9Jz2rACDWBTHxrys/DPAN4YpPXyWy3BoAAAAASUVORK5CYII=" title="English" alt="English"> {{ ' عربي ' }} <i class="fa fa-globe"></i>
                      </a>
                  </li>
                  @else
                  <li class="nav-link">
                      <a href="{{ url('/lang/en') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                          {{ ' English ' }} <i class="fa fa-globe"></i>
                      </a>
                  </li>
                  @endif

                        <!-- mega menu page-->
                </ul>
            </div>
        </div>
    </div>
    <a href="#" onclick='alert("في الإصدار القادم صلواتكم")' class="db-block-{{GetDirection()}} ml-35 ml-xs-25">
        <div class="transform-center">{{ trans('main.donate') }}</div>
    </a>
    <a href="#" class="menu-bars db-none right-menu ml-35 ml-xs-25">
        <div class="bars transform-center">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>

    <!--RIGHT MENU-->
    <div class="col-md-2 col-2 text-right">
      <div class="icon-links d-flex align-items-center justify-content-end">
        <div class="bg-menu-overlay transition-5 opacity-8"></div>
        <div class="fx-menu-wrapper bg-yellow-op-9 transition-5 d-flex justify-content-between flex-column">
          <div class="fx-menu-header d-flex justify-content-between">
            <p class="rbt-slab fs-13 f-700">{{trans('main.dwam')}}</p>
            <div class="close-menu">
              <a href="#" onclick='alert("في الإصدار القادم صلواتكم")' class=""> <span></span>
                <span></span>
              </a>
            </div>
          </div>
          <a href="#" onclick='alert("في الإصدار القادم صلواتكم")' class="btn btn-black mt-30 mb-35 mb-xs-20">{{ trans('main.donate') }}</a>
          <div class="fx-menu-content mb-15" >
            <ul class="fx-menu-links rbt-slab txt-{{GetDirection()}}">
              <!-- <li> <a href="#" >{{ trans('main.home') }}</a>
              </li> -->
              <li> <a href="{{ url("/vposts/index") }}" class="has-sub" >{{ trans('main.videos') }}</a>
                <ul class="submenu">
                  <li class="mg-nav-item nav-link"  dir="ltr"> <a href="#" onclick='alert("قريباً في الإصدار القادم")'>{{ trans('main.live_videos') }}</a></li>
                  @foreach($vcats as $vcat)
                  <li class="mg-nav-item nav-link"   dir="ltr"> <a href="{{ url("/vcatposts/show/{$vcat->id}") }}">
                    @if(GetLanguage() == 'en')
                    {{json_decode($vcat->title)->en}}
                    @else
                    {{json_decode($vcat->title)->ar}}
                    @endif
                  </a></li>
                  @endforeach
                </ul>
              </li>
              <li> <a href="#" class="has-sub"  >{{ trans('main.services') }}</a>
                <ul class="submenu">
                  <li class="mg-nav-item nav-link" > <a href="#" onclick='alert("معذرة تحت الإنشاء")' >{{ trans('main.books') }}</a></li>
                  <li class="mg-nav-item nav-link" > <a href="#" onclick='alert("معذرة تحت الإنشاء")'>{{ trans('main.book_room') }}</a></li>
                </ul>
              </li>
              <li> <a href="{{ url("/posts/index") }}" class="has-sub"  >{{ trans('main.blogs') }}</a>
                <ul class="submenu">
                  @foreach($pcats as $pcat)
                  <li class="mg-nav-item nav-link"  dir="ltr"> <a href="{{ url("/catposts/show/{$pcat->id}") }}">
                    @if(GetLanguage() == 'en')
                    {{json_decode($pcat->title)->en}}
                    @else
                    {{json_decode($pcat->title)->ar}}
                    @endif
                  </a></li>
                  @endforeach
                </ul>
              </li>
            </ul>
            @if (GetLanguage() == 'en')
            <li class="nav-link">
              <!-- <a style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }} ; position: absolute;  {{ GetLanguage() != 'en' ? 'left' : 'right' }} : 30px; top: {{ $errors->count() ? '108px' : '37px' }}; text-decoration: none" href="{{ url('/lang/ar') }}"> -->

              <a href="{{ url('/lang/ar') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAYAAAB24g05AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAAPwAAAD8BR5eJ4AAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAEOSURBVCiRpZHNSsNQEEbPTXOtoc1NmyhFK6ioCLXioq4UdOtz+Ia+g+7cFQURhYClikRtqGkTm8SFbkrSWHC23w9nZgTnnZR/jFYkiiRFJMX9+izBSRbZ6ks0BPcrEZ42np+g7SuOqiFi/xUOXji1Qtq+mo/ACSW2GvJsN9DkElEy4UH2qdeGOCOJV/4qJmhqJgsqpLNzzHLFpqEcTlpnKCugqZl/E/SiAU5osWkZGHINfxSwrgS3I4teNAA57ReZN6Zw+GlTW/XY3t0A4PHO5e2pzrX5DmK6IHtEAV3jAzXew70UuFeC6rhFtzLIhHNXAAhLCRfBDaXyjxwHE2I9Jz2rACDWBTHxrys/DPAN4YpPXyWy3BoAAAAASUVORK5CYII=" title="English" alt="English"> {{ ' عربي ' }} <i class="fa fa-globe"></i>
              </a>
            </li>
            @else
            <li class="nav-link">
              <a href="{{ url('/lang/en') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                {{ ' English ' }} <i class="fa fa-globe"></i>
              </a>
            </li>
            @endif
          </div>
          <div class="fx-menu-footer">
            <ul class="mg-header social-icons menu-social black">
              <li> <a href="https://www.facebook.com/DoctorsWithAMission/" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li> <a href="https://youtube.com/channel/UCPg_ihi25b6MBda2Obc0_qA" target="_blank"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- Header end -->
