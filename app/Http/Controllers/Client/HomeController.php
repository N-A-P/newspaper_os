<?php

namespace App\Http\Controllers\Client;

use App\LoaiTin;
use App\TheLoai;
use App\TinTuc;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newpost = TinTuc::orderBy('id','desc')->take(3)->get();
        return view('client.trangchu',compact('newpost'));
    }

    public function ajax_load()
    {
        $data = TheLoai::all('id');
        $loaitin = array();
        foreach ($data as $item)
        {
            array_push($loaitin ,LoaiTin::with('theloai')->where('idTheLoai',$item->id)->get());
        }
        return Response::json(json_encode($loaitin),200);
    }
    public function hotnews(){
        $news = TinTuc::orderBy('NoiBat','desc')->take(6)->get();
        return Response::json(json_encode($news),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = TinTuc::find($id);
        $news->NoiBat = $news->NoiBat + 1;
        $news->SoLuotXem = $news->SoLuotXem + 1;
        $news->save();
        return view('client.detail')->with('news',$news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
