<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointExchange extends Model
{
    use HasFactory;

    protected $table = 'point_exchange';

    protected $fillable = [
        'user_id',
        'points_exchanged',
        'cash_amount',
        'payment_method',
        'payment_account_number',
        'payment_phone_number',
    ];

    protected $casts = [
        'cash_amount' => 'decimal:2',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}