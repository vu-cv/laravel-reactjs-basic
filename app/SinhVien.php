<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = "sinhvien";
    protected $fillable = ['id', 'name', 'email', 'phone'];

    public $timestampes = false;

    public function FunctionName()
    {
    	# code...
    }
}
