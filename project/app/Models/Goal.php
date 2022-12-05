<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='goal_mission';

    protected $primaryKey='goal_mission_id';
    protected $dates=['deleted_at'];
    protected $fillable=[
        'media_name'
    ];

    public $timestamps=true;

    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }
}
