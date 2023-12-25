<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class janrs_to_books extends Model
{
    protected $fillable = [
        'id',
        'id_book',
        'id_janr',

    ];
}
