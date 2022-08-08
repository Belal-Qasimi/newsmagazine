<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_tageinfo extends Model
{
    use HasFactory;
    
    public $timestamps=false;
    use HasFactory;
    protected $table='tb_tageinfo';
    protected $fillable =[
       'id',
       'name_tages',
       'url_tags',
       'type',
       'id_user',
       'updateby',
       'nameicon'
      
       

    ];
}
