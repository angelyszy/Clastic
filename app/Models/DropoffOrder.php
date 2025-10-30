<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropoffOrder extends Model
{
    use HasFactory;

    protected $table = 'dropoff_order';

    protected $fillable = [
        'user_id',
        'status',
        'scheduled_time',
        'transaction_details',
        'plastic_type',
        'dropoff_address',
        'order_details',
        'points',
    ];

    protected $casts = [
        'scheduled_time' => 'datetime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'dropoff_order_id');
    }
}