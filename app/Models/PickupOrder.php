<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupOrder extends Model
{
    use HasFactory;

    protected $table = 'pickup_order';

    protected $fillable = [
        'user_id',
        'points',
        'order_detail',
        'transaction_detail',
        'driver_detail',
        'plastic_type',
        'schedule_making',
        'address',
    ];

    protected $casts = [
        'schedule_making' => 'datetime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignment()
    {
        return $this->hasOne(PickupAssignment::class, 'pickup_order_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'pickup_order_id');
    }
}