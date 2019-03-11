<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\Technology_SpecificViewRequest;

/**
 * Class DashboardController.
 */
class Technology_SpecificController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Technology_SpecificViewRequest $request)
    {
        return view('frontend.user.Technology_Specific');
    }
     public function aboutus(Technology_SpecificViewRequest $request)
    {
        return view('frontend.auth.aboutus');
    }
} 