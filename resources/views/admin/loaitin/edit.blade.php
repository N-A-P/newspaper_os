@extends('admin.layouts.index')
@section('content')
    @extends('admin.layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại tin
                        <small>Sửa</small>
                    </h1>
                </div>


                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                    <form action="{{route('loaitin.update',$model->id)}}" method="POST">
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $er)
                                        {{$er}}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('thongbao'))
                                <div class=" alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên loại tin</label>
                            <input class="form-control" name="Ten" value="{{$model->Ten}}" placeholder="Nhập tên loại tin" />
                        </div>
                        <div class="form-group">
                            <label>Tên không dấu</label>
                            <input class="form-control" name="TenKhongDau"  value="{{$model->TenKhongDau}}"  placeholder="Nhập tên không dấu" />
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label>ID thể loại</label>--}}
                            {{--<input class="form-control" name="idTheLoai"  value="{{$model->idTheLoai}}"  placeholder="Nhập id thể loại" />--}}
                        {{--</div>--}}
                        <button type="submit" class="btn btn-default">Sửa loại tin</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
@endsection