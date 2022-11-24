<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Traits\GetIdByNameTrait;


class City extends Model
{
    use HasFactory;
    protected $table='city';

    protected $primaryKey='city_id';

    public function country(){
        return $this->belongsTo(Country::class,'country_id','country_id');
    }

    public function getId($model,$table,$value)
    {
        return $model::where($table,$value)->first()->id();
    }
}
