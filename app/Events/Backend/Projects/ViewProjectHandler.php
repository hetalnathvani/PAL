<?php
namespace Events;

use Models\Project\Project;

class ViewProjectHandler
{
	private $session;
    // public function handle(Project $project)
    // {
    //     // Increment the view counter by one...
    //     $project->increment('count');

    //     // Then increment the value on the model so that we can
    //     // display it. This is because the increment method
    //     // doesn't increment the value on the model.
    //     $project->count += 1; 
    // }


    public function __construct(Store $session)
    {
        // Let Laravel inject the session Store instance,
        // and assign it to our $session variable.
        $this->session = $session;
    }
		    public function handle(Project $project)
		{
		    if ( ! $this->isProjectViewed($project))
		    {
		        $project->increment('count');
		        $project->count += 1;
		        dd($project);
		        $this->storeProject($project);
		    }
		}

		private function isProjectViewed($project)
		{
		    // Get all the viewed posts from the session. If no
		    // entry in the session exists, default to an
		    // empty array.
		    $viewed = $this->session->get('viewed_projects', []);

		    // Check the viewed posts array for the existance
		    // of the id of the post
		    return array_key_exists($project->id, $viewed);
		}

		private function storePost($project)
		{    
			    $key = 'viewed_projects.' . $project->id;

		    // Push the post id onto the viewed_posts session array.
		    // $this->session->push('viewed_projects', $project->id);
		    $this->session->put($key, time());
		}
}

?>