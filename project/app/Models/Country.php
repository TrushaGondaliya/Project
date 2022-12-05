<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table='country';

    protected $primaryKey='country_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;
}
