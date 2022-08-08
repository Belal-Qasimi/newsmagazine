<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_eventads extends Model
{
    use HasFactory;
    public $timestamps=false;
   
    protected $table='tb_eventads';
    protected $primaryKey='id_eventads';

    protected $fillable =[
       'id_eventads',
       'text_eventads',
       'titel',
       'start_dete',
       'end_dete',
       'image',
       'id_type',
       'id_category',
       'show_ev',
       'user_id',
       'update_by'
    ];
}
