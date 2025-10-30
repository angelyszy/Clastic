<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $fillable = [
        'title',
        'content',
        'summary',
        'featured_image_url',
    ];

    // Relationships
    public function views()
    {
        return $this->hasMany(UserArticleView::class, 'article_id');
    }
}