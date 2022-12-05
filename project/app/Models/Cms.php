<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cms extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='cms_page';
    protected $primaryKey='cms_page_id';
    protected $dates=['deleted_at'];

    public $timestamps=true;

    protected $fillable=[
        'cms_page_id',
        'title'
       ];
}
