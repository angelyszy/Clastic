<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupAssignment extends Model
{
    use HasFactory;

    protected $table = 'pickup_assignment';

    protected $fillable = [
        'pickup_order_id',
        'driver_id',
        'status',
    ];

    // Relationships
    public function order()
    {
        return $this->belongsTo(PickupOrder::class, 'pickup_order_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }
}
