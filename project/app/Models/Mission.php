<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;
    protected $table='missions';

    

    public function city(){
        return $this->belongsTo(City::class,'city_id','city_id');
    }
}
