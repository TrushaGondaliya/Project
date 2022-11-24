<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    protected $table='favourite_mission';
    protected $primaryKey='favourite_mission_id';

    protected $fillable=[
        'user_id',
        'mission_id',   
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mission(){
        return $this->belongsToMany(Mission::class);
    }
}
