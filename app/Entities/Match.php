<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'mathes';
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     **/
    protected $fillable = ['home_team', 'away_team', 'kick_off', 'venue_id', 'result', 'status', 'outcome'];
     /**
      * Date fields.
      *
      * @var array
      **/
     protected $dates = ['kick_off', 'created_at', 'udated_at'];

    public function fixtures()
    {
        return $this->belongsToMany('App\Entities\Team', 'matches', 'home_team', 'away_team');
    }

    /**
     * Get the home team relation.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToRelation
     **/
    public function hometeam()
    {
        return $this->belongsTo('App\Entities\Team', 'home_team');
    }

    /**
     * Get the away team relation.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToRelation
     **/
    public function awayteam()
    {
        return $this->belongsTo('App\Entities\Team', 'away_team');
    }

    /**
     * Get the Match Venue relation.
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToRelation
     **/
    public function venue()
    {
        return $this->belongsTo('App\Entities\Venue');
    }
}
