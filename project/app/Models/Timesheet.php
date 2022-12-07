<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timesheet extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='timesheet';
    protected $primaryKey='timesheet_id';
    protected $dates=['deleted_at','date_volunteered'];

    public $timestamps=true;

    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }
}
