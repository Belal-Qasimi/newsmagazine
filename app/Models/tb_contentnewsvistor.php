<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_contentnewsvistor extends Model
{
    use HasFactory;
    protected $table='tb_contentnewsvistor';
    protected $primaryKey='id';

    protected $fillable =[
       'id',
       'Imagepost',
       'id_news',
       
       

    ];
}
