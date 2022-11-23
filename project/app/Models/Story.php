<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $table='story';
    protected $primaryKey='story_id';
    protected $fillable=[
        'status',
        'published_at'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }
}
