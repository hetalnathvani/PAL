<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\LaravelViewRequest;
use Illuminate\Http\Request;
use App\Models\Project\Project;


/** 
 * Class DashboardController.
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
       
        return view('frontend.user.Technology_Specific.Laravel')->with('projects',$projects);
    }
}
