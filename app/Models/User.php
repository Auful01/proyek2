<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nik',
        'name',
        'phone',
        'email',
        'address',
        'place_of_birth',
        'date_of_birth',
        'password',
        'status',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        /**
     * Get all of the junk_user for the Junk
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function junk_user()
    {
        return $this->hasMany(JunkUser::class, 'user_id', 'id');
    }

    public function scopeAdmin($query)
    {
        return $query->where('role', 'adm');
    }

    public function scopePenjual($query)
    {
        return $query->where('role', 'slr');
    }

    public function scopePengepul($query)
    {
        return $query->where('role', 'pgl');
    }
}
