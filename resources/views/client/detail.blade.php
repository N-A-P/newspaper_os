@extends('client.layouts.index')
@section('content')
<div class="">
    <h2>{{$news->TieuDe}}</h2>
    <h3>{{$news->TomTat}}</h3>
    {!!$news->NoiDung!!}
</div>

@endsection