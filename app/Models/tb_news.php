<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_news extends Model
{
    use HasFactory;
    protected $table='tb_news';
    protected $primaryKey='id_news';

    protected $fillable =[
       'id_news',
       'textpost',
       'titelpost',
       'author',
       'publishdate',
       'id_type',
       'id_category',
       'state_new',
       'image',
       'updateby'
       

    ];
}
