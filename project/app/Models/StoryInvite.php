<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoryInvite extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='story_invite';

    protected $primaryKey='story_invite_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function story(){
        return $this->belongsTo(Story::class,'story_id','story_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','from_user_id');
    }
}
