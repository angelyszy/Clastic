<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PickupOrder extends Model
{
    protected $table = 'pickup_order';
    protected $primaryKey = 'pickup_item_id';
    public $timestamps = false;

    public function user() { return $this->belongsTo(User::class, 'user_id', 'user_id'); }
    public function assignments() { return $this->hasMany(PickupAssignment::class, 'pickup_order_id', 'pickup_item_id'); }
}