<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Storymedia extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='story_media';
    protected $primaryKey='story_media_id';
    protected $dates=['deleted_at'];

    public function story(){
        return $this->belongsTo(Story::class,'story_id','story_id');
    }
}
