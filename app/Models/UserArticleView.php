<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserArticleView extends Pivot
{
    protected $table = 'user_article_view';

    protected $fillable = [
        'user_id',
        'article_id',
    ];

    // Optional: if you want to treat it as a model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}