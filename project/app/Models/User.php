<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    

    protected $primaryKey = 'user_id';
    public $timestamps=false;
}
