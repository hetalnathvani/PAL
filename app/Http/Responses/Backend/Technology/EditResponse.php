<?php

namespace App\Http\Responses\Backend\Technology;

use Illuminate\Contracts\Support\Responsable;

class EditResponse implements Responsable
{
    /**
     * @var App\Models\Technology\Technology
     */
    protected $technologies;

    /**
     * @param App\Models\Technology\Technology $technologies
     */
    public function __construct($technologies)
    {
        $this->technologies = $technologies;
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
        return view('backend.technologies.edit')->with([
            'technologies' => $this->technologies
        ]);
    }
}