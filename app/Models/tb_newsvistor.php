<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_newsvistor extends Model
{
    use HasFactory;
    protected $table='tb_newsvistor';
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
       'updateby',
       'vistorname',
       'email',
       'phone'
       

    ];
}
