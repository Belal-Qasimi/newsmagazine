<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_Ades extends Model
{
    public $timestamps=false;
    use HasFactory;
    protected $table='tb_Ads';
    
    protected $fillable =[
          'id',
          'text_Ads',
          'imageAds',
          'type_Ads',
          'date_Ads',
          'enddate',
          'id_user',
          'updateby'
         

    ];
}
