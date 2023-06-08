<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class eWallet extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table ="eWallet";
    // protected $primaryKey ="id";
    // protected $primaryKey ="id";
    protected $guarded =[];
}
