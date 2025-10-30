<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    public function pickupOrders() { return $this->hasMany(PickupOrder::class, 'user_id', 'user_id'); }
    public function classifications() { return $this->hasMany(PlasticClassification::class, 'user_id', 'user_id'); }
    public function missions() { return $this->hasMany(UserMission::class, 'user_id', 'user_id'); }
    public function transactions() { return $this->hasMany(Transaction::class, 'user_id', 'user_id'); }
    public function views() { return $this->hasMany(UserArticleView::class, 'user_id', 'user_id'); }
    public function exchanges() { return $this->hasMany(PointExchange::class, 'user_id', 'user_id'); }
}