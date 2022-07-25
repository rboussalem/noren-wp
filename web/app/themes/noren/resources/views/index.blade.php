@extends('layouts.app')

@section('content')

  @include('partials.noren-mark')
  
  @include('partials.noren-services')

  @include('partials.noren-posts')
  

  @include('partials.noren-our-number')
  

  <!-- Start blog Content -->
  <div class="blog">
    <div class="container">
        <h3>From Blog</h3>
        <div class="row">
          @while (have_posts())
            @php the_post() @endphp
            @include('partials.content-'.get_post_type())
          @endwhile
        </div>
    </div>
</div>
<!-- End blog Content -->
  
  @include('partials.noren-testmonials')

  @include('partials.noren-contact-us')

@endsection
