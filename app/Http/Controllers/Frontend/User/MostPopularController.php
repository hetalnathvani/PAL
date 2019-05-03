<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\MostPopularViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use DB;

class MostPopularController extends Controller
{
    protected $results;
    public function index(MostPopularViewRequest $request)
    {

        $results = Project::orderBy('count', 'desc')->take(10)->get();
     //     $id = $request->id;
     //    // $pid = $request->project_id;
    	// // dd($pid);
    	// $project=Project::where('id', $id)->update(['count' => DB::raw('count + 1')]);
       return view('frontend.user.MostPopular',array('results'=>$results));
    }
}
