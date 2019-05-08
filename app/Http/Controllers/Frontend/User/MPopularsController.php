<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\MostPopularViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use DB;

class MPopularsController extends Controller
{
    protected $results; 
    public function index(MostPopularViewRequest $request)
    {
        $id = $request->id;
        $pageproject = Project::orderBy('count', 'desc')->where('id','=' ,$id)->get();
        $project=Project::where('id', $id)->update(['count' => DB::raw('count + 1')]);
       return view('frontend.user.PageProject',array('pageproject'=>$pageproject,'project'=>$project));
    }
}
