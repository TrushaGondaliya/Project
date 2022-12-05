<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Mission extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;
    protected $table='missions';
    protected $primaryKey='mission_id';
    protected $dates=['deleted_at'];
  protected $fillable=[
  'availability','mission_type'];

 
 
    public $timestamps=true;

    
    public function media()
    {
        return $this->hasMany(Media::class,'mission_id');
    }
    public function city(){
        return $this->belongsTo(City::class,'city_id','city_id');
    }
    public function theme(){
        return $this->belongsTo(Theme::class,'theme_id','mission_theme_id');
    }

    public function favourites()
    {
        return $this->belongsToMany(Favourite::class);
    }

    
}
