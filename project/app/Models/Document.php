<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='mission_document';

    protected $primaryKey='mission_document_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;
    public function mission(){
        return $this->belongsTo(Mission::class,'mission_id','mission_id');
    }
}

