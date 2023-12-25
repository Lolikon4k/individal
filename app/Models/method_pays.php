<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class method_pays extends Model
{
    protected $fillable = [
        'id',
        'title',
        'imgPay',
        'id_typePay'
    ];
}
