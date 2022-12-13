<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disasterModel extends Model
{
   
    use HasFactory;
    protected $fillable=['name','picture','explanation','title','logo','address','significance','description','recomendation','email','fullname','keywords','link','number','use'];
    protected $table ='disaster';
  
   
    
}
