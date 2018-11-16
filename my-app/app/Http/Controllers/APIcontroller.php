<?php

namespace App\Http\Controllers;

use App\modeltest;
use Illuminate\Http\Request;
use App\mymodel;
use Validator;
class APIcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr_nhanvien=modeltest::all();
        return Response()->json($arr_nhanvien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr_json=$request->all();
        $messages = [
            'required' => 'Truong :attribute bi trong du lieu.',
            'string'=>'Truong :attribute khong phai la string',
            'numeric'=>'Truong :attribute khong phai la boolean',
            'date'=>'Truong :attribute khong phai la kieu date',
        ];
        $validation = Validator::make(
            $arr_json,
            [
                '*.ten' => 'required|string',
                '*.gioitinh'=>'required|numeric',
                '*.ngaysinh'=>'required|date',
            ], $messages
        );
        if ($validation->fails()) {
            return Response()->json($validation->getMessageBag()->all());
        }
        if(empty($arr_json)) {
            return Response()->json(['err'=>'02','message'=>'json sai dinh dang hoac khong ton tai yeu cau json !']);
        }
        //
        foreach ($arr_json as $key => $value) {
            modeltest::create($value);
        }
        return Response()->json(['err'=>'00','message'=>'insert success !']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
       $nhanvien=modeltest::where('ten',$id)->get();
       if($nhanvien=="[]") {
        return Response()->json(['err'=>'04','message'=>'khong co doi tuong trong CSDL !']);
        }
        return Response()->json($nhanvien);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $arr_json=$request->all();
        if(empty($arr_json)) {
            return Response()->json(['err'=>'02','message'=>'json sai dinh dang hoac khong ton tai yeu cau json !']);
        }
        $messages = [
            'required' => 'Truong :attribute bi trong du lieu.',
            'string'=>'Truong :attribute khong phai la string',
            'numeric'=>'Truong :attribute khong phai la boolean',
            'date'=>'Truong :attribute khong phai la kieu date',
        ];
        $validation = Validator::make(
            $arr_json,
            [
                'ten' => 'required|string',
                'gioitinh'=>'required|numeric',
                'ngaysinh'=>'required|date',
            ],$messages
        );
        if ($validation->fails()) {
             return Response()->json($validation->getMessageBag()->all());
        }
         if(!is_numeric($id)){
            return Response()->json(['err'=>'06','message'=>'Id khong dung dinh dang nuber']);
        }
        
       

        $nhanvien=modeltest::find($id);
        $nhanvien->update($arr_json);
        return Response()->json(['err'=>'00','message'=>'update success !']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(is_numeric($id)){
        modeltest::destroy($id);
        return Response()->json(['err'=>'00','message'=>'delete success !']);
        }
        return Response()->json(['err'=>'06','message'=>'Id khong dung dinh dang number']);
    }
    
}
