<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JunkUser extends Model
{
    use HasFactory;

    protected $table = 'junk_user';

    protected $fillable = [
        'user_id',
        'junk_id',
        'weight',
        'village',
        'district',
        'city',
        'province',
        'address',
    ];

    /**
     * Get the user that owns the JunkUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the user that owns the JunkUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function junk()
    {
        return $this->belongsTo(Junk::class);
    }
}
