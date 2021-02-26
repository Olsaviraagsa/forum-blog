<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $guarded = [];

    protected $with = [
        'category',
        'replies',
    ];

    /**
     * Return replies for this forum
     */
    public function replies()
    {
        return $this->hasMany(\App\Reply::class);
    }

    /**
     * Return category for this forum
     */
    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }

    /**
     * Return the post owner
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}