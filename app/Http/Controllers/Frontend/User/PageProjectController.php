<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Backend\Projects\ViewProjectHandler;
use App\Http\Controllers\Frontend\User;
use App\Http\Requests\Frontend\User\PageProjectViewRequest;
use App\Http\Requests\Frontend\User\StoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use App\Models\Comment\Comment;
use Event;
use DB;

class PageProjectController extends Controller
{
    
    public function index(PageProjectViewRequest $request,$id)
    {      
        $pid = $request->project_id;          
        $project=Project::where('id', $pid)->update(['count' => DB::raw('count + 1')]);
        $pageproject['pageproject'] = DB::table('projects')->select('id','technology_id','project_name','project_details','file')->where('id','=' ,$pid)->get();
        return view('frontend.user.PageProject',$pageproject,['project'=>$project]);
    }
	public function store(PageProjectViewRequest $request)
    {
    	$pid = $request->project_id;
        $pageproject = DB::table('projects')->select('id','technology_id','project_name','project_details','file')->where('id','=' ,$pid)->get();
    
    	$comment =  new Comment;
        $comment->comment = $request->get('comment');

        $comment->project_id = $request->get('project_id');
        $comment->save();
    	
        Comment::create($request->all());

        return redirect()->route('frontend.user.PageProject',$pageproject);
    }
       
}
