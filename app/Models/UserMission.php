<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMission extends Model
{
    protected $table = 'user_mission';
    protected $primaryKey = 'user_mission_id';
    public $timestamps = false;

    public function user() { return $this->belongsTo(User::class, 'user_id', 'user_id'); }
}