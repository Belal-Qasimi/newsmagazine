<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_tags extends Model
{
    use HasFactory;
    public $timestamps=false;
   
    protected $table='tb_tags';
    protected $fillable =[
       'id',
       'url_Tag',
       'type_Tag',
       'title',
       'date_top',
       'id_user',
       'updateby'

    ];
}
