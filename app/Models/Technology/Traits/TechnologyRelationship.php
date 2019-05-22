<?php

namespace App\Models\Technology\Traits;

/**
 * Class TechnologyRelationship
 */
trait TechnologyRelationship
{
    /*
    * put you model relationships here
    * Take below example for reference
    */
    public function projects()
    {
        return $this->belongsToMany(config('auth.providers.projects.model'), config('access.projects'), 'id','technology_name');
    }

}
