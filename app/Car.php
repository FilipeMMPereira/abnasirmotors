<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;
use App\CarImage;
class Car extends Model
{
    protected $guarded=[];


    public function province(){
        return $this->belongsTo(Province::class,'province_id');
    }

    public function images(){
        return $this->hasMany(CarImage::class,'car_id');
    }
}
