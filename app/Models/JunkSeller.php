<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunkSeller extends Model
{
    use HasFactory;

    protected $fillable = ([
        // 'id',
        'category_junk_id',
        'user_id',
        'name',
        'weight',
        'price',
        'province',
        'regency',
        'district',
        'village',
        'address',
    ]);

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categoryJunk()
    {
        return $this->belongsTo(CategoryJunk::class, 'category_junk_id');
    }
}
