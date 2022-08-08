<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information_magizan extends Model
{
    use HasFactory;
       
    protected $table='information_magizan';
    protected $fillable =[
          'id',
          'name_mag',
          'email',
          'name_owner',
          'our_logo',
          'vision',
          'target',
          'editorial',
          'logo',
          'share_artc',
          'copy_write',
          'dasing_by',
          'phone1',
          'phone2',
          'address'



    ];


}
