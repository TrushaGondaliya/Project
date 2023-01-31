<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theme extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='mission_theme';

    protected $primaryKey='mission_theme_id';

  
    protected $dates=['deleted_at'];

    public $timestamps=true;

    
}
