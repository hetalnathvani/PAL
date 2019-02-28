<?php

namespace App\Http\Controllers\Backend\Technology;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Technology\TechnologyRepository;
use App\Http\Requests\Backend\Technology\ManageTechnologyRequest;

/**
 * Class TechnologiesTableController.
 */
class TechnologiesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var TechnologyRepository
     */
    protected $technology;

    /**
     * contructor to initialize repository object
     * @param TechnologyRepository $technology;
     */
    public function __construct(TechnologyRepository $technology)
    {
        $this->technology = $technology;
    }

    /**
     * This method return the data of the model
     * @param ManageTechnologyRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageTechnologyRequest $request)
    {
        return Datatables::of($this->technology->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($technology) {
                return Carbon::parse($technology->created_at)->toDateString();
            })
            ->addColumn('actions', function ($technology) {
                return $technology->action_buttons;
            })
            ->make(true);
    }
}
