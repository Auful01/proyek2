<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Junk extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'junk_category_id',
        'weight',
        'price',
    ];

    /**
     * Get the junk_category that owns the Junk
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function junk_category()
    {
        return $this->belongsTo(JunkCategory::class);
    }

    /**
     * Get all of the junk_user for the Junk
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function junk_user()
    {
        return $this->hasMany(JunkUser::class, 'junk_id', 'id');
    }

}
