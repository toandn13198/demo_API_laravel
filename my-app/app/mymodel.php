<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class mymodel extends Model
{
     static function getall(){
        $sql="select * from nhanvien";
        $result=DB::select($sql);
        return $result;
    }
    static function update_nhanvien($obj){
    	$sql="update nhanvien set ten='$obj->ten',gioitinh=$obj->gioitinh,ngaysinh='$obj->ngaysinh' where ma=$obj->ma";
    	DB::update($sql);
    }

    static function apiget_nhanvien_name($id){
    	$sql="select * from nhanvien where ten='$id'";
    	$result=DB::select($sql);
    	return $result;
    }
    static function insert_multi_nhanvien($sql)
    {
    	DB::insert($sql);
    }
    static function delete_nhanvien($id)
    {	
    	$sql="delete from nhanvien where ma=$id";
    	DB::delete($sql);
    }

    
}
