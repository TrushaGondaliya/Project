<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MissionInvite extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='mission_invite';

    protected $primaryKey='mission_invite_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','from_user_id');
    }
}
