<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\TechnologySpecificViewRequest;

/**
 * Class DashboardController.
 */
class TechnologySpecificController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(TechnologySpecificViewRequest $request)
    {
        $technologies = DB::table('technologies')->select('id','technology_name')->get();
        return view('frontend.user.Technology_Specific.TechnologySpecific')->with('technologies',$technologies);
    }
     public function aboutus(TechnologySpecificViewRequest $request)
    {
        return view('frontend.auth.aboutus');
    }
     public function show(TechnologySpecificViewRequest $request)
    {
        return view('frontend.user.Technology_Specific.PHP')->with('project',$project);
    }
    /*public function get()
    {
        
        $projects = DB::select('select * from projects');

        return view('frontend.user.Technology_Specific',['projects'=>$projects]);
    }*/
} 