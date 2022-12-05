<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='skill';

    protected $primaryKey='skill_id';
    protected $dates=['deleted_at'];
    public $timestamps=true;

}
