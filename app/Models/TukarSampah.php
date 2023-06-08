<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TukarSampah extends Model
{
    use HasFactory;
    
    protected $table ="tukar_sampahs";
    // protected $primaryKey ="id";
    
    protected $guarded =['total'];
}
