<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\NewArrivalsViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use DB;

class NewArrivalsController extends Controller
{
    protected $results;
    public function index(NewArrivalsViewRequest $request)
    {
        $results = Project::latest('created_at')->take(10)->get();
        $pid = $request->project_id;
    	$project=Project::where('id', $pid)->update(['count' => DB::raw('count + 1')]);
        return view('frontend.user.NewArrivals',array('project'=>$project),array('results'=>$results));
    }
}
