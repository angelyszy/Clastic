<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';

    protected $fillable = [
        'name',
        'email',
        'password_hash',
    ];

    protected $hidden = [
        'password_hash',
    ];

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    // ✅ CORRECTED RELATIONSHIPS
    public function driver()
    {
        return $this->hasOne(Driver::class);
    }

    public function pickupOrders()
    {
        return $this->hasMany(PickupOrder::class);
    }

    public function dropoffOrders()
    {
        return $this->hasMany(DropoffOrder::class);
    }

    public function classifications()
    {
        return $this->hasMany(PlasticClassification::class);
    }

    public function missions()
    {
        return $this->hasMany(UserMission::class);
    }

    public function pointExchanges()
    {
        return $this->hasMany(PointExchange::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function articleViews()
    {
        return $this->hasMany(UserArticleView::class);
    }
}