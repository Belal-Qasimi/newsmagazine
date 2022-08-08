<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConatctEmail extends Model
{
    use HasFactory;
    public $timestamps=false;
     protected $appends = ['name','email','phone','subject','message']; 



    
        
     
        
        
        
   

}
