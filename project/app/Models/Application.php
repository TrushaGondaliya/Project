<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table='mission_application';

    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }
}
