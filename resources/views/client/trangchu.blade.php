@extends('client.layouts.index')
@section('content')
    <div class="row">

        <!-- Single Featured Post -->
        <div class="col-12 col-lg-7">
            <div class="single-blog-post featured-post">
                <div class="post-thumb">
                    <a href="/tintuc/{{$newpost[0]->id}}"><img src="{{asset('upload/tintuc/'.$newpost[0]->Hinh)}}" style="height: 300px;width: 400px" alt=""></a>
                </div>
                <div class="post-data">
                <a href="/tintuc/{{$newpost[0]->id}}" class="post-title">
                        <h6>{{$newpost[0]->TieuDe}}</h6>
                    </a>
                    <div class="post-meta">
                        <p class="post-excerp">{{$newpost[0]->TomTat}} </p>
                        <!-- Post Like & Post Comment -->
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-5">
            <!-- Single Featured Post -->
            <div class="single-blog-post featured-post-2">
                <div class="post-thumb">
                    <a href="/tintuc/{{$newpost[1]->id}}"><img src="{{asset('upload/tintuc/'.$newpost[1]->Hinh)}}" alt=""></a>
                </div>
                <div class="post-data">

                    <div class="post-meta">
                        <a href="/tintuc/{{$newpost[1]->id}}" class="post-title">
                            <h6>{{$newpost[1]->TieuDe}}</h6>
                        </a>
                        <!-- Post Like & Post Comment -->
                       
                    </div>
                </div>
            </div>

            <!-- Single Featured Post -->
            <div class="single-blog-post featured-post-2">
                <div class="post-thumb">
                    <a href="/tintuc/{{$newpost[2]->id}}"><img src="{{asset('upload/tintuc/'.$newpost[2]->Hinh)}}" alt=""></a>
                </div>
                <div class="post-data">

                    <div class="post-meta">
                        <a href="/tintuc/{{$newpost[2]->id}}" class="post-title">
                            <h6>{{$newpost[2]->TieuDe}}</h6>
                        </a>
                        <!-- Post Like & Post Comment -->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection