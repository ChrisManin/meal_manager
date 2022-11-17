<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'comment',
        'source_id',
        'source_page',
        'calories',
        'category_id',
        'slug'
    ];

    /**
     * Get the source where the recipe comes from
     */
    public function source()
    {
        return $this->belongsTo('App\Models\Source');
    }

    /**
     * Get the recipe's category
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function meals()
    {
        return $this->belongsToMany('App\Models\Meals');
    }
}
