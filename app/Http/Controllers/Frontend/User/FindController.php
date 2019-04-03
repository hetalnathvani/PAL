<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Project\Project;

class FindController extends Controller
{
    //
    public function index(DashboardViewRequest $request)
    {
        return view('frontend.user.dashboard');
    }

    public function search()
    {
        $q = Input::get('q');
        $project = Project::where('project_name', 'LIKE', '%'.$q.'%')->get();
        if(count($project) > 0)
            //return view('frontend.user.dashboard')->withDetails($project)->withQuery($q);
            return view('frontend.user.dashboard', array('project'=> $project));
        else
            return view('frontend.user.dashboard')->withMessage('No Details Found.'); 
    }
}
