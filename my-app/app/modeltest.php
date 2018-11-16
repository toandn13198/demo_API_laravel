<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeltest extends Model
{
    protected $table="nhanvien";
    protected $primaryKey='ma';
    public $timestamps=false;
    protected $fillable=['ten','gioitinh','ngaysinh'];
}
