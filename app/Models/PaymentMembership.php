<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMembership extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_date',
        'evidance_of_transfer'
    ];
}
