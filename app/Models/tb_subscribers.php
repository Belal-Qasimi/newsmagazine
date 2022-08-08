<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_subscribers extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $table='tb_subscribers';
    protected $fillable =[
       'id',
       'email_subs'
      
       

    ];


}
