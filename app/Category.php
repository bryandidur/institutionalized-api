<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'description',
    ];

    /**
     * Has-many user categories relationship.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * Many-to-many articles categories relationship.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function articles()
    {
        return $this->belongsToMany(\App\Article::class, 'articles_categories')->withTimestamps();
    }
}
