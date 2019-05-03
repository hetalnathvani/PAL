<?php
use Illuminate\Session\Store;

class ViewThrottleFilter
{
    private $session;

    public function __construct(Store $session)
    {
        // Let Laravel inject the session Store instance,
        // and assign it to our $session variable.
        $this->session = $session;
    }

    public function filter()
    {
        $projects = $this->getViewedProjects();

        if ( ! is_null($projects))
        {
            $projects = $this->cleanExpiredViews($projects);

            $this->storeProjects($projects);
        }
    }

    private function getViewedProjects()
    {
        // Get all the viewed posts from the session. If no
        // entry in the session exists, default to null.
        return $this->session->get('viewed_projects', null);
    }

    private function cleanExpiredViews($projects)
    {
        // ...
    }

    private function storeProjects($projects)
    {
        $this->session->put('viewed_projects', $projects);
    }
}
?>