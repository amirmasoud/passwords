<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'class', 'markup',
    ];

    /**
     * An icon has many category.
     *
     * @return \App\Category
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}