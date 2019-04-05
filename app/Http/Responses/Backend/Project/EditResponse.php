<?php

namespace App\Http\Responses\Backend\Project;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Project\Project
     */
    protected $projects;
    protected $technology;
    /**
     * @param App\Models\Project\Project $projects
     */
    public function __construct($projects,$technology)
    {
        $this->projects = $projects;
         $this->technology = $technology;

    }

    /**
     * To Response
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.projects.edit')->with([
            'projects' => $this->projects,
           'technology' => $this->technology

        ]);
    }
}