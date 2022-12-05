<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Missionskill extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='mission_skill';

    protected $primaryKey='mission_skill_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;

    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }
    public function skill(){
        return $this->belongsTo(Skill::class,'skill_id','skill_id');
    }
}
