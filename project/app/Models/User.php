<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='users';
    protected $primaryKey = 'user_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;


    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function city(){
        return $this->belongsTo(City::class,'city_id','city_id');
    }

    

    protected function fullName():Attribute
    {
        return Attribute::make(
            get:fn($value)=>"{$this->first_name} {$this->last_name}"
        );
    }
}
