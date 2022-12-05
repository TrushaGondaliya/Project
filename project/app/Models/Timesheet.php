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
    protected $dates=['deleted_at'];

    public $timestamps=true;

    public function mission(){
        return $this->belongsToMany(Mission::class);
    }
}
