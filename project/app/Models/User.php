<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    
    protected $table='users';
    protected $primaryKey = 'user_id';
    public $timestamps=true;

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    protected function fullName():Attribute
    {
        return Attribute::make(
            get:fn($value)=>"{$this->first_name} {$this->last_name}"
        );
    }
}
