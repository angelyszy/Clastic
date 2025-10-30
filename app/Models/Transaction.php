<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transaction';

    protected $fillable = [
        'user_id',
        'plastic_waste_id',
        'pickup_order_id',
        'dropoff_order_id',
        'transaction_type',
        'points_earned',
        'transaction_date',
        'invoice_number',
        'status',
    ];

    protected $casts = [
        'transaction_date' => 'datetime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pickupOrder()
    {
        return $this->belongsTo(PickupOrder::class, 'pickup_order_id');
    }

    public function dropoffOrder()
    {
        return $this->belongsTo(DropoffOrder::class, 'dropoff_order_id');
    }
}