<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\mymodel;

class mycontroller extends Controller
{
    public function get_all_nhanvien(){
        $arr_nhanvien=mymodel::getall();
        return view('list_nhanvien',['arr_nhanvien'=>$arr_nhanvien]);   
    }
    public function form_update_nhanvien(Request $Request){

    	$nhanvien=new mymodel();
    	$nhanvien->ma=$Request->id;
    	$nhanvien->ten=$Request->ten;
    	$nhanvien->gioitinh=$Request->gioitinh;
    	$nhanvien->ngaysinh=$Request->ngaysinh;
    	return view('form_update_nhanvien',['obj'=>$nhanvien]);
    }
    public function prosess_update_nhanvien(Request $Request){

    	$nhanvien=new mymodel();
    	$nhanvien->ma=$Request->ma;
    	$nhanvien->ten=$Request->ten;
    	$nhanvien->gioitinh=$Request->gioitinh;
    	$nhanvien->ngaysinh=$Request->ngaysinh;
    	mymodel::update_nhanvien($nhanvien);
    	return redirect()->route('danh-sach-nhanvien');
    }	
}
