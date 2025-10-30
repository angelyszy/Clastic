<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PickupAssignment extends Model
{
    protected $table = 'pickup_assignment';
    protected $primaryKey = 'assignment_id';
    public $timestamps = false;

    public function pickupOrder() { return $this->belongsTo(PickupOrder::class, 'pickup_order_id', 'pickup_item_id'); }
    public function driver() { return $this->belongsTo(Driver::class, 'driver_id', 'driver_id'); }
}
