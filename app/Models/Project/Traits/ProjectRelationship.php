<?php

namespace App\Models\Project\Traits;

/**
 * Class ProjectRelationship
 */
trait ProjectRelationship
{
    /*
    * put you model relationships here
    * Take below example for reference
    */
    /*
     */
    public function technologies()
    {
        return $this->belongsToMany(config('access.technology'), config('access.technologies'), 'id', 'technology_id');
        return $this->hasMany('comments');
    }

}
