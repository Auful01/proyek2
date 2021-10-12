<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Junk extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_junk_id',
        'junk_name',
        'weight',
        'price',
    ];

    public function category_junk()
    {
        return $this->belongsTo(CategoryJunk::class, 'category_junk_id');
    }
}
