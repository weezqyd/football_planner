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
    protected $fillable = ['home_team', 'away_team', 'venue_id', 'result', 'status', 'outcome'];

    public function fixtures()
    {
        return $this->belongsToMany('App\Entities\Team', 'matches', 'home_team', 'away_team');
    }
}
