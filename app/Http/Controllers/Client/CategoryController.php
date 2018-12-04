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
        $data = TheLoai::all();
        $loaitin = array();
        $tintuc  = TinTuc::with('loaitin')->where('idLoaiTin',$id)->paginate(9);
        return $tintuc;
        foreach ($data as $item)
        {
            array_push($loaitin ,LoaiTin::with('theloai')->where('idTheLoai',$item->id)->get());
        }
        return view('client.category',compact(['data','loaitin','newpost']));
    }
}
