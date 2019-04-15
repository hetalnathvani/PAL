<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\User;
use App\Http\Requests\Frontend\User\NewArrivalsViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use DB;

class NAProjectsController extends Controller
{
    //
    public function index(NewArrivalsViewRequest $request)
    {
        $id = $request->id;
        $pageproject = Project::latest('created_at')->where('id','=' ,$id)->get();
        return view('frontend.user.PageProject',array('pageproject'=>$pageproject));
    }
}
