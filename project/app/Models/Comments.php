<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comments extends Model
{
    
    use HasFactory;
    use SoftDeletes;

    protected $table='comment';
    protected $primaryKey='comment_id';
    protected $dates=['deleted_at'];
    protected $fillable=['approval_status'];

    public $timestamps=true;

    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }
}
