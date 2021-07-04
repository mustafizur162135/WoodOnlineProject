<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'categorie_id', 'description', 'unit_price', 'sale_price', 'fileProductPath'
    ];

    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
}
