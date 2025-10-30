<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;

    public function user() { return $this->belongsTo(User::class, 'user_id', 'user_id'); }
    public function pickupOrder() { return $this->belongsTo(PickupOrder::class, 'pickup_order_id', 'pickup_item_id'); }
    public function dropoffOrder() { return $this->belongsTo(DropoffOrder::class, 'dropoff_order_id', 'dropoff_order_id'); }
}