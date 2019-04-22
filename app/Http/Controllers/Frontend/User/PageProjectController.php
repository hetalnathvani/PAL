<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\User;
use App\Http\Requests\Frontend\User\PageProjectViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use App\Models\Comment\Comment;
use DB;

class PageProjectController extends Controller
{
    
    public function index(PageProjectViewRequest $request)
    {       
        $pid = $request->project_id;
        $pageproject['pageproject'] = DB::table('projects')->select('id','technology_id','project_name','project_details','file')->where('id','=' ,$pid)->get();
        $comment['comment'] = DB::table('comments')->select('comment')->where('project_id','=',$pid)->get();       
        // $page=DB::table('projects')->views($pageproject)->count();
        // dd($page);
         return view('frontend.user.PageProject',$pageproject,$comment);
    }
	

	  public function store(StoreRequest $request)
    {
    	 $pid = $request->project_id;
        $pageproject = DB::table('projects')->select('id','technology_id','project_name','project_details','file')->where('id','=' ,$pid)->get();
    	$comment =  new Comment;
        $comment->comment = $request->get('comment');
       // dd($comment);
        $comment->save();
    	$pid->save();
        Comment::create($request->all());
    
        
        // dd($pageproject);
         return redirect()->route('frontend.user.PageProject',$pageproject);
    }
}
