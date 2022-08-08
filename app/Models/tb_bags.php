<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_bags extends Model
{
    use HasFactory;
    
    public $timestamps=false;
    use HasFactory;
    protected $table='tb_bags';
    protected $fillable =[
          'id',
          'name_bags',
          'text_bags',
          'date_bags',
          'id_category',
          'id_type',
          'id_user',
          'updateby'
         

    ];
}
