<?php

namespace App\Models;
use App\Models\publishers;
use App\Models\janrs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'id',
        'description',
        'name',
        'author',
        'YearPublishing',
        'contPages',
        'imageBook',
        'bookNameDownload',
        'id_publisher',
        'cost',
    ];
    public function publisher()
    {
        return $this->belongsTo(publishers::class, 'id_publisher', 'id');
    }

    public function janrs()
    {
        return $this->belongsToMany(janrs::class, 'janrs_to_books', 'id_book', 'id_janr');
    }
}
