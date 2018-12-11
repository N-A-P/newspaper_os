@extends('admin.layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nguời dùng
                        <small>Show</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12" style="padding-bottom:120px">
                <form action="{{route('user.update',$m->id)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col col-md-8">
                        
                        <div class="form-group">
                            <label>Tên</label>
                        <input class="form-control" type="text" value="{{$m->name}}" name="name" required />
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="{{$m->email}}" name="email" required/>
                        </div>
                        <div class="form-group">
                                <label>Ngày tạo</label>
                                <input class="form-control"  value="{{$m->created_at}}"  name="password" required/>
                            </div>
                        <a href="/admin" class="btn btn-primary">Quay lại</a>
                        
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