<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    /**
     * Group Relation.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasManyRelation
     **/
    public function group()
    {
        return $this->belongsToMany('App\Entities\Group')->using('App\Entities\GroupTeam');
    }
}
