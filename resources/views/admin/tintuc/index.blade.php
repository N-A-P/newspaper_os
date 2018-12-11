@extends('admin.layouts.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Tóm tắt</th>
                        <th>Hình</th>
                        <th>Số lượt xem</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($model as $item)
                        <tr class="even gradeC" align="center">
                            <td>{{$item->id }}</td>
                            <td>{{$item->TieuDe }}</td>
                            <td>{{$item->TomTat }}</td>
                            <td><img style="width:100px;height: 100px;" src="{{asset('/upload/tintuc/'.$item->Hinh)}}" /> </td>
                            <td>{{$item->SoLuotXem }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/tintuc/delete/{{$item->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('tintuc.edit',$item->id)}}">Edit</a></td>
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