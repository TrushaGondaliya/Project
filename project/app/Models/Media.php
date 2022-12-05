<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Media extends Model
{
    use HasFactory;

    use SoftDeletes;
    use Notifiable;
    protected $table='mission_media';

    protected $primaryKey='mission_media_id';
    protected $dates=['deleted_at'];
    protected $fillable=[
        'media_name'
    ];

    public $timestamps=true;

    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }
}
