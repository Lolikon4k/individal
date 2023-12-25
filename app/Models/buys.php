<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buys extends Model
{
    protected $fillable = [
        'id',
        'id_book',
        'id_user',
        'id_method_pays',
    ];
}
