<?php

namespace App\Http\Controllers\Frontend\User;

use Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\LaravelViewRequest;
use Illuminate\Http\Request;
use App\Models\Project\Project;


/** 
 * Class LaravelController.
 */
class LaravelController extends Controller 
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(LaravelViewRequest $request)
    {
        $id = $request->id;
        $projects = DB::table('projects')->select('id','technology_id','project_name','project_details','file')->where('technology_id','=' ,$id)->get();

        if(count($projects) > 0)
            return view('frontend.user.Technology_Specific.Laravel')->with('projects',$projects);
        else
            return Redirect::back()->withInput()->withErrors(array('Sorry...', 'No Projects Found.'));  
    }
}
