<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day_id',
        'date',
        'type_id',
        'reference'
    ];

    public function recipes()
    {
        return $this->belongsToMany('App\Models\Recipe');
    }

    /**
     * Get the meal's type
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    /**
     * Get the meal's day
     */
    public function day()
    {
        return $this->belongsTo('App\Models\Day');
    }
}
