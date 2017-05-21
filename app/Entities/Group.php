<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     **/
    protected $fillable = ['title'];

    /**
     * Group teams Relation.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasManyRelation
     **/
    public function teams()
    {
        return $this->belongsToMany('App\Entities\Team', 'group_teams');
    }
}
