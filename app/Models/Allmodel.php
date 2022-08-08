<?php
use Illuminate\Support\Facades\DB;
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allmodel extends Model
{

    public $timestamps=false;
   
    protected $table = "tb_category";
    protected $primaryKey='id_Category';
    protected $fillable =[
          'id_Category',
          'name_Categorycol',
          
          
    ];    
}

