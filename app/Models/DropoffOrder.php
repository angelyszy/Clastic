<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DropoffOrder extends Model
{
    protected $table = 'dropoff_order';
    protected $primaryKey = 'dropoff_order_id';
    public $timestamps = false;
}