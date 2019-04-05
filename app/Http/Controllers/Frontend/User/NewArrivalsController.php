<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\NewArrivalsViewRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Project\Project;

class NewArrivalsController extends Controller
{
    protected $results;
    public function index(NewArrivalsViewRequest $request)
    {
        $results = Project::latest('created_at')->take(5)->get();
        return view('frontend.user.NewArrivals',array('results'=>$results));
    }
}
