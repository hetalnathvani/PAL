<?php

namespace App\Repositories\Backend\Project;

use DB;
use Carbon\Carbon;
use App\Models\Project\Project;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Backend\Project\ProjectRepository;
use Illuminate\Contracts\Filesystem\Filesystem;

/**
 * Class ProjectRepository.
 */
class ProjectRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Project::class;

    protected $storage;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */

    public function __construct()
    {
        $this->upload_path = 'zip'.DIRECTORY_SEPARATOR.'projects'.DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }
    
    public function getForDataTable()
    {
        return $this->query()
        ->leftJoin('technologies', 'projects.technology_id', '=', 'technologies.id')
            ->select([
                config('module.projects.table').'.id',
                config('module.projects.table').'.project_name',
                config('module.projects.table').'.project_details',
                // config('module.projects.table').'.tech_id', 
                config('module.projects.table').'.file',
                config('module.projects.table').'.created_at',
                config('module.projects.table').'.updated_at',
                DB::raw('GROUP_CONCAT(technologies.technology_name) as technology'),
            ])
            ->groupBy('projects.id');

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
        // $this->validate($request, [
        //     'file' => 'required'
        // ])
         $input = $this->uploadImage($input);
            if(Project::create($input)){
                return true;
            }
            throw new GeneralException("Error Processing Request", 1);
            
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Project $project
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Project $project, array $input)
    {
    	if ($project->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.projects.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Project $project
     * @throws GeneralException
     * @return bool
     */
    public function delete(Project $project)
    {
        if ($project->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.projects.delete_error'));
    }

    public function uploadImage($input)
    {
        $avatar = $input['file'];

        if (isset($input['file']) && !empty($input['file'])) {
            
            $fileName = time().$avatar->getClientOriginalName();
            
            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getrealpath()));

            $input = array_merge($input, ['file' => $fileName]);

            return $input;
        }
    }
}
