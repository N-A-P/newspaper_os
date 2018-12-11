@extends('admin.layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Người dùng
                        <small>danh sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Quyền</th>
                        <th>Ngày tạo</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                        <tr class="even gradeC" align="center">
                            <td>{{$item->id }}</td>
                            <td>{{$item->name }}</td>
                            <td>{{$item->quyen }}</td>
                            <td>{{$item->email }}</td>
                            <td>{{$item->created_at }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('user.destroy',$item->id)}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('user.edit',$item->id)}}">Edit</a></td>
                        </tr>   
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection