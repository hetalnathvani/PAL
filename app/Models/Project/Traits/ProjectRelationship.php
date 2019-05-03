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
    public function users() {
        //Note that the below will only work if user is represented as user_id in your table
        //otherwise you have to provide the column name as a parameter
        //see the documentation here : https://laravel.com/docs/5.4/eloquent-relationships
        $this->belongsTo(User::class);
    }
     */
    public function technologies()
    {
        return $this->belongsToMany(config('access.technology'), config('access.technologies'), 'id', 'technology_id');
        return $this->hasMany('comments');
    }

}
