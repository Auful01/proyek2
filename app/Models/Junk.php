<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Junk extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_junk_id',
        'name_junk',
        'weight',
        'price',
    ];
}
