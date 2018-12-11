@extends('client.layouts.index')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="blog-posts-area">
        <!-- Single Featured Post -->
        <div class="single-blog-post featured-post single-post" style="float:left;clear:both">
            <div class="post-thumb">
            <a href="#"><img src="{{asset('/upload/tintuc/'.$news->Hinh)}}" alt=""></a>
            </div>
            <div class="post-data">
                <a class="post-title">
                    <h6>{{$news->TieuDe}}</h6>
                </a>
                <div class="post-meta">
                <p style="font-size:16px">{{$news->TomTat}}</p>
                <div style="float:left; with:30%;">
                      {!!$news->NoiDung!!}
                </div>
                </div>
            </div>
        </div>
        <div class="fb-comments" data-href="https://localhost:8000/tintuc/{{$news->id}}" data-width="700" data-numposts="5"></div>       
    </div>
@endsection