<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='mission_application';
    protected $primaryKey='mission_application';
    protected $dates=['deleted_at','applied_at'];
    public $timestamps=true;

    protected $fillable=[
        'approval_status'
    ];


    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }
}
