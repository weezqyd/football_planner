<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     **/
    protected $fillable = ['stadium', 'city', 'capacity'];

    /**
     * Disable timestamps.
     *
     * @var bool
     **/
    public $timestamps = false;
}
