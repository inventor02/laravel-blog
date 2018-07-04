<?php

namespace Blog\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'user_id'
    ];

    /**
     * Comments made on this blog post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('Models/Blog/Comment');
    }

    /**
     * The user who posted this post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Models/User/User');
    }
}
