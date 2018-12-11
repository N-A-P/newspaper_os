@extends('admin.layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tin tức
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12" style="padding-bottom:120px">
                <form action="{{route('tintuc.update')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <input type="text" hidden="hidden" name="id" value="{{$model->id}}">
                    <div class="row">
                        <div class="col col-md-4">
                        <div class="form-group">
                            <label>Loại tin</label>
                            <select class="form-control" name="idLoaiTin" id="idLoaiTin">
                                @foreach ($loaitin as $item)
                                <option value="{{$item->id}}">{{$item->Ten}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                        <input class="form-control" value="{{$model->TieuDe}}" name="TieuDe" required />
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" value="{{$model->TomTat}}" name="TomTat" required/>
                        </div>
                        <div class="form-group">
                            <label>Hình</label>
                            <input type="file" class="form-control" name="Hinh"/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                    <div class="col col-md-8">
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="editor" class="form-control" name="NoiDung" rows="12" required> {{$model->NoiDung}}</textarea>
                        </div>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection