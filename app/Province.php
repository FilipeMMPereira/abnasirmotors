<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;
class Province extends Model
{
    protected $guarded=[];

    public function cars(){
        return $this->hasMany(Car::class,'province_id');
    }
}
