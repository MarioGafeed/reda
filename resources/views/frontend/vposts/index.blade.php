@extends('frontend.layout.app')

@section('content')


<!-- Inner start -->
<!-- Inner start -->
<section class="inner-banner bg-cover" style="background-image: url('/frontend/assets/img/bg/post-back.jpg');">
</section>
<section class="bnr-pagination pt-sm-20 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">{{ trans('main.videos') }}</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="/" class="yellow">{{trans('main.home')}} </a>
                    </li>
                    <li>{{trans('main.videos')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Inner end -->
<!-- Album gallery start -->
<section class="albums pt-80 pb-80">
    <div class="container">
        <div class="row">
            @foreach($vcats As $vcat)
            <div class="col-md-6 col-xl-3">
                <div class="each-album shadow-1">
                    <img src="{{ asset('uploads/'.$vcat->image) }}" alt="">
                    <div class="album-text">
                        <h3><a href="{{ url("/vcatposts/show/$vcat->id") }}" class="f-700">
                          @if(GetLanguage() == 'en')
                            {{ json_decode($vcat->title)->en }}
                          @else
                            {{ json_decode($vcat->title)->ar }}
                          @endif
                        </a></h3>
                        <a href="{{ url("/vcatposts/show/$vcat->id") }}" class="white f-700 mt-10 fs-12">{{ trans('main.readMore') }}<i class="fas fa-long-arrow-alt-right ml-10"></i></a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Album gallery end -->


@endsection
