<?php

namespace App\Repositories\Backend\Technology;

use DB;
use Carbon\Carbon;
use App\Models\Technology\Technology;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TechnologyRepository.
 */
class TechnologyRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Technology::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.technologies.table').'.tech_id',
                config('module.technologies.table').'.tech_name',
                config('module.technologies.table').'.created_at',
                config('module.technologies.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        if (Technology::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.technologies.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Technology $technology
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Technology $technology, array $input)
    {
    	if ($technology->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.technologies.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Technology $technology
     * @throws GeneralException
     * @return bool
     */
    public function delete(Technology $technology)
    {
        if ($technology->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.technologies.delete_error'));
    }
}
