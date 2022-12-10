<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disasterModel extends Model
{
    use HasFactory;
    protected $fillable=['title','logo','address'];
    protected $table ='disaster';
}
