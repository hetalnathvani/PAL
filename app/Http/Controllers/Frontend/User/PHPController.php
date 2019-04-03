<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\PHPViewRequest;

/**
 * Class DashboardController.
 */
class PHPController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(PHPViewRequest $request)
    {
        return view('frontend.user.Technology_Specific.php');
    }
}