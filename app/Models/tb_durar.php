<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_durar extends Model
{
    use HasFactory;
    protected $table='tb_durar';
    protected $fillable =[
       'id',
       'text_Durar',
       'author',
       'datee',
       'titel_durar',
       'update_by'
       

    ];
}
