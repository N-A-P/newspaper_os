@extends('client.layouts.index')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-12">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    @foreach ($model as $item)
                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                            <a href="/tintuc/{{$item->id}}"><img src="{{asset('/upload/tintuc/'.$item->Hinh)}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-title">
                                <h6>{{$item->TieuDe}}</h6>
                                </a>
                                <div class="post-meta">
                                <p class="post-excerp">{{$item->TomTat}}</p>
                                    <!-- Post Like & Post Comment -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$model->links()}}
            </div>
    </div>
@endsection