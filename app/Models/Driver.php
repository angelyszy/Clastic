<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = 'driver';
    protected $primaryKey = 'driver_id';
    public $timestamps = false;

    public function assignments() { return $this->hasMany(PickupAssignment::class, 'driver_id', 'driver_id'); }
}