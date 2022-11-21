<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;

    protected $table='cms_page';

    protected $fillable=[
        'cms_page_id',
        'title'
       ];
}
