<?php

namespace App\Http\Controllers\Admin;

use App\LoaiTin;
use App\TheLoai;
use App\TinTuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Vmorozov\FileUploads\Uploader;
use DB;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = TinTuc::all();
        return view('admin.tintuc.index',compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaitin = LoaiTin::all('id','Ten');
        return view('admin.tintuc.create',compact('loaitin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  return $request;
        $model = new TinTuc;
        // if($request->hasFile('Hinh')){
        //     if($request->file('Hinh')->isValid()){
        //         $extd = strtoupper($request->file('Hinh')->getClientOriginalExtension());
        //         if($extd == 'JPG' || $extd == 'PNG' || $extd == 'JPEG' || $extd == 'GIF' )
        //         {
        //             $file_name = rand(0,999999).$request->file('Hinh');
        //             $request->file('Hinh')->move('/upload/tintuc',$file_name);
        //             $model->Hinh = $file_name;
        //         }
        //         else
        //             return back()->with('error','Chỉ chấp nhận các file ảnh có định dạng jpg, png và gif');
        //     }
        // }
        $model->Hinh = Uploader::uploadFile($request->file('Hinh'), 'upload/tintuc');
        $model->Hinh = substr($model->Hinh,14);
        $model->TieuDe = $request->TieuDe;
        $model->TieuDeKhongDau = $model->TieuDe;
        $model->TomTat = $request->TomTat;
        $model->Noidung = $request->NoiDung;
        $model->NoiBat = 1;
        $model->SoLuotXem = 0;
        $model->idLoaiTin = $request->idLoaiTin;
        $model->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = TinTuc::find($id);
        $loaitin = LoaiTin::all('id','Ten');
        return view('admin.tintuc.edit',compact('model','loaitin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $model =  TinTuc::find($request->id);
        if($request->hasFile('Hinh'))
        {
            $model->Hinh = Uploader::uploadFile($request->file('Hinh'), 'upload/tintuc');
            $model->Hinh = substr($model->Hinh,14);
        }
        $model->TieuDe = $request->TieuDe;
        $model->TieuDeKhongDau = $model->TieuDe;
        $model->TomTat = $request->TomTat;
        $model->Noidung = $request->NoiDung;
        $model->NoiBat = 1;
        $model->SoLuotXem = 0;
        $model->idLoaiTin = $request->idLoaiTin;
        $model->save();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tintuc')->where('id',$id)->delete();
        
        return back();
    }
}
