<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('hello',function(){
    echo "say hello";
});
route::group(['prefix'=>'math'],function(){
	route::get('tinhtoan',function(){

    	return view('formtinhtoan');
	})->name('tinhtoan');
	route::get('xuly',function(){
		$a=$_GET['a'];
		$b=$_GET['b'];
		if(is_numeric($a)&&is_numeric($b))
		{
			echo $a+$b;	
		}else
		{
			return redirect()->route('tinhtoan')->with('err','phai nhap vao dang so');
		}	
	})->name('xuly');
});
route::get('danh-sach-nhanvien','mycontroller@get_all_nhanvien')->name('danh-sach-nhanvien');
route::get('view-update-nhanvien','mycontroller@form_update_nhanvien')->name('view-update-nhanvien');
route::post('process-update-nhanvien','mycontroller@prosess_update_nhanvien')->name('process-update-nhanvien');

route::resource('nhanvien','APIcontroller')->middleware('validateAPI'); 
route::fallback(function(){
	return ['err'=>'404','message'=>'Not found !'];
});
