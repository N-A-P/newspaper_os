<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TheLoai;
use App\TinTuc;
use DB;
use App\LoaiTin;

class CategoryController extends Controller
{
    public function index($id)
    {
        $model = TinTuc::where('idLoaiTin',$id)->paginate(4);
        return view('client.category',compact('model'));
    }
}
