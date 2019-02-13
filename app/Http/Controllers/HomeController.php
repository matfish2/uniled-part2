<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * load app view
     *
     * @return View
     */
    public function index()
    {
        return view('app');
    }
}
