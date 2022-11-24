<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $table='timesheet';
    protected $primaryKey='timesheet_id';

    public function mission(){
        return $this->belongsToMany(Mission::class);
    }
}
