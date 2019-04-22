<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\LaravelViewRequest;
use Illuminate\Support\Facades\Storage;


class DownloadController extends Controller
{
    //
    public function index(LaravelViewRequest $request)
    {
        return view('frontend.user.Technology_Specific.Laravel');
    }
    public function download(LaravelViewRequest $request)
    {
        
        $url = $request->file;
        $url = Storage::disk('public')->url();

        
        return response()->download(storage_path('public/'),['flash_success' => trans('alerts.backend.projects.downloaded')]);
         
    }
    public function myNotification($type)
    {
        switch ($type) {
            case 'message':
                alert()->message('Sweet Alert with message.');
                break;
            case 'basic':
                alert()->basic('Sweet Alert with basic.','Basic');
                break;
            case 'info':
                alert()->info('Sweet Alert with info.');
                break;
            case 'success':
                alert()->success('Sweet Alert with success.','Welcome to ItSolutionStuff.com')->autoclose(3500);
                break;
            case 'error':
                alert()->error('Sweet Alert with error.');
                break;
            case 'warning':
                alert()->warning('Sweet Alert with warning.');
                break;
            default:
                # code...
                break;
        }


        return view('my-notification');
    }
}
