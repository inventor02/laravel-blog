<?php

namespace Blog\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'post_id', 'user_id'
    ];

    /**
     * The post this comment was made on.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('Models/Blog/Post');
    }

    /**
     * The user that made this comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('Models/User/User');
    }
}
