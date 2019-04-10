<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\User;
use App\Http\Requests\Frontend\User\PageProjectViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use DB;

class PageProjectController extends Controller
{
    public function index(PageProjectViewRequest $request)
    {       
        $pid = $request->project_id;
        $pageproject = DB::table('projects')->select('id','technology_id','project_name','project_details','file')->where('id','=' ,$pid)->get();
        return view('frontend.user.PageProject')->with('pageproject',$pageproject);
    }
}
