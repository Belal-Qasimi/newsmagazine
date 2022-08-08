<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_cattype extends Model
{
    use HasFactory;
    protected $table='tb_cattype';
    protected $primaryKey='id_CatType';

    protected $fillable =[
       'id_CatType',
       'name_CatType',
       'name_Categorycol'

    ];
}
