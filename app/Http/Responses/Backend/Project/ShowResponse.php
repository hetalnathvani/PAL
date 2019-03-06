<?php

namespace App\Http\Responses\Backend\Project;

use Illuminate\Contracts\Support\Responsable;

class ShowResponse implements Responsable
{
    /**
     * @var \App\Models\Access\User\User
     */
    protected $project;

    /**
     * @param \App\Models\Access\User\User $user
     */
    public function __construct($project)
    {
        $this->project = $project;
    }

    /**
     * In Response.
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.projects.show')->withProject($this->project);
    }
}
