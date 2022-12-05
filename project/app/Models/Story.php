<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Story extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='story';
    protected $primaryKey='story_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;
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
