<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class GroupTeam extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     **/
    protected $fillable = ['team_id', 'group_id'];
}
