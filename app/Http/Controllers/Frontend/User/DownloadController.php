<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\LaravelViewRequest;
use Illuminate\Support\Facades\Storage;


class DownloadController extends Controller
{
    //
    // public function index(LaravelViewRequest $request)
    // {
    //     return view('frontend.user.Technology_Specific.Laravel'); 
    // }
    public function download(LaravelViewRequest $request)
    {
        $url = $request->file;
        $url = Storage::disk('public')->url("ch1.pdf");
        return response()->download(storage_path('app/public/ch1.pdf'));
    }
}
 