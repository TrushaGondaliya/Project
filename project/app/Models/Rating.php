<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='mission_rating';

    protected $primaryKey='mission_rating_id';
    protected $fillable=[
        'user_id',
        'mission_id',
        'rating'
    ];
    protected $dates=['deleted_at'];
    

    public $timestamps=true;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
   
    public function mission()
    {
        return $this->belongsToMany(Mission::class,'missions','mission_id','mission_id');
    }
}
