<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsmodel extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = "users";
    protected $primaryKey='id';

    protected $fillable =[
          'id',
          'created_at',
          'name',
          'email',
          'password',
          'typeuser',
          'phone',
          'image',
          'updateby'
    ];


}

