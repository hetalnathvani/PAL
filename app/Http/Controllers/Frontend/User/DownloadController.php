<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\Frontend\User\LaravelViewRequest;
use App\Http\Requests\Frontend\User\PageProjectViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;
use Illuminate\Support\Collection;
use App\Http\Controllers\Frontend\User\DownloadController;


class DownloadController extends Controller
{
    // DownloadController
    public function index(LaravelViewRequest $request)
    {
        return view('frontend.user.Technology_Specific.Laravel');
    }
    public function download(LaravelViewRequest $request)
    {
        $id = $request->project_id;
        $pageproject = DB::table('projects')->select('file')->where('id','=' ,$id)->get()->first();
        $url = Storage::disk('public')->url("app/public/zip/projects/$pageproject->file");
        return response()->download(storage_path("app/public/zip/projects/$pageproject->file"));
    }
}
