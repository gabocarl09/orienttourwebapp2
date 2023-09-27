<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PremiumPlans extends Model
{
    protected $table= 'premium_plans';

    protected $fillable = [
        'id','plan_name','price','characteristics','status'
    ];

    protected $guarded = [
        // Lista para proteger todos os campos
    ];
}
