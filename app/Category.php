<?php

namespace App;

use App\Icon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'icon_id',
    ];

    /**
     * A category belongs to an icon.
     *
     * @return \App\Icon
     */
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}