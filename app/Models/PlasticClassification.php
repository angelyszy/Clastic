<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlasticClassification extends Model
{
    protected $table = 'plastic_classification';
    protected $primaryKey = 'classification_id';
    public $timestamps = false;

    public function user() { return $this->belongsTo(User::class, 'user_id', 'user_id'); }
}