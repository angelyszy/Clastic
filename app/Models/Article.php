<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'article_id';
    public $timestamps = false;

    public function views() { return $this->hasMany(UserArticleView::class, 'article_id', 'article_id'); }
}