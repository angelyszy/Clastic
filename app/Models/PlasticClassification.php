<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasticClassification extends Model
{
    use HasFactory;

    protected $table = 'plastic_classification';

    protected $fillable = [
        'classification_result',
        'take_image',
        'clear_image',
        'upload_image',
        'user_id',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}