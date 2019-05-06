<?php

namespace App\Http\Controllers\Backend\Technology;

use App\Models\Technology\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Http\Responses\Backend\Technology\CreateResponse;
use App\Http\Responses\Backend\Technology\EditResponse;
use App\Repositories\Backend\Technology\TechnologyRepository;
use App\Http\Requests\Backend\Technology\ManageTechnologyRequest;
use App\Http\Requests\Backend\Technology\CreateTechnologyRequest;
use App\Http\Requests\Backend\Technology\StoreTechnologyRequest;
use App\Http\Requests\Backend\Technology\EditTechnologyRequest;
use App\Http\Requests\Backend\Technology\UpdateTechnologyRequest;
use App\Http\Requests\Backend\Technology\DeleteTechnologyRequest;

/**
 * TechnologiesController
 */
class TechnologiesController extends Controller
{
    /**
     * variable to store the repository object
     * @var TechnologyRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param TechnologyRepository $repository;
     */
    public function __construct(TechnologyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Technology\ManageTechnologyRequest  $request
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageTechnologyRequest $request)
    {
        return new ViewResponse('backend.technologies.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateTechnologyRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Technology\CreateResponse
     */
    public function create(CreateTechnologyRequest $request)
    {
        return new CreateResponse('backend.technologies.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTechnologyRequestNamespace  $request
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreTechnologyRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return new RedirectResponse(route('admin.technologies.index'), ['flash_success' => trans('alerts.backend.technologies.created')]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Technology\Technology  $technology
     * @param  EditTechnologyRequestNamespace  $request
     * @return \App\Http\Responses\Backend\Technology\EditResponse
     */
    public function edit(Technology $technology, EditTechnologyRequest $request)
    {
        // dd($technology);
        return new EditResponse($technology);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateTechnologyRequestNamespace  $request
     * @param  App\Models\Technology\Technology  $technology
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(UpdateTechnologyRequest $request, Technology $technology)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $technology, $input );
        //return with successfull message
        return new RedirectResponse(route('admin.technologies.index'), ['flash_success' => trans('alerts.backend.technologies.updated')]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteTechnologyRequestNamespace  $request
     * @param  App\Models\Technology\Technology  $technology
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Technology $technology, DeleteTechnologyRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($technology);
        //returning with successfull message
        return new RedirectResponse(route('admin.technologies.index'), ['flash_success' => trans('alerts.backend.technologies.deleted')]);
    }
    
}
