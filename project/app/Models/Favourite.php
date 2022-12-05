<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Rfc4122\TimeTrait;

class Favourite extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='favourite_mission';
    protected $primaryKey='favourite_mission_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;
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
