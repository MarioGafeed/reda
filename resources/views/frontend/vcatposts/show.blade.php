/@extends('frontend.layout.app')

@section('content')

<!-- Inner start -->
<section class="inner-banner bg-cover" style="background-image: url('{{ asset("uploads/{$vcatfirst->image}") }} ');">
</section>
</section>
<section class="bnr-pagination pt-sm-20 pb-sm-20 bg-light-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <h2 class="f-700">
                  @if(Getlanguage() == 'en')
                    {{json_decode($vcatfirst->title)->en}}
                  @else
                    {{json_decode($vcatfirst->title)->ar}}
                  @endif
                </h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <ul class="pagination-inner">
                    <li><a href="/" class="yellow">{{ trans('main.home') }} </a>
                    </li>
                    <li>
                      @if(Getlanguage() == 'en')
                        {{json_decode($vcatposts->title)->en}}
                      @else
                        {{json_decode($vcatposts->title)->ar}}
                      @endif
                    </li>
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
          @foreach($vcatposts->vposts As $vcatpost)
            <div class="col-md-6 col-xl-3">
                <div class="each-album shadow-1">
                    <img src="{{ asset('uploads/'.$vcatpost->image) }}" alt="">
                    <div class="album-text">
                        <h3><a href=" {{ url("/vpost/show/{$vcatpost->id}") }} " class="f-700">
                          @if(Getlanguage() == 'en')
                          {{ json_decode($vcatpost->title)->en }}
                          @else
                          {{ json_decode($vcatpost->title)->ar }}
                          @endif
                        </a></h3>
                        <a href="{{ url("/vpost/show/{$vcatpost->id}") }}" class="white f-700 mt-10 fs-12">{{ trans('main.readMore') }}<i class="fas fa-long-arrow-alt-right ml-10"></i></a>
                    </div>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</section>
<!-- Album gallery end -->

@endsection
