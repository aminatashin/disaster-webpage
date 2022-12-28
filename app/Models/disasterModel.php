<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disasterModel extends Model
{
   
    use HasFactory;
    protected $fillable=['name','user_id','picture','explanation','title','logo','address','significance','description','recomendation','email','fullname','keywords','link','number','use'];
    protected $table ='disaster';
  
   public function scopeFilter($query, array $filters){
    if($filters['keyword'] ?? false){
        $query->where('keywords', 'like', '%' . request('keyword') . '%');
        
    }

    if($filters['search'] ?? false){
        $query->where('title', 'like', '%' . request('search') . '%')
        ->orWhere('description', 'like', '%' . request('search') . '%')
        ->orWhere('keywords', 'like', '%' . request('search') . '%');
        
    }

   }
   public function user(){
    return $this->belongsTo(User::class,'user_id');
   }
}
