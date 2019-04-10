<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NAProjectsController extends Controller
{
    //
    protected $results;
    public function index(NewArrivalsViewRequest $request)
    {
        return view('frontend.user.PageProject');
    }
}
