<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $logout_route  = route('custom-logout');
        return view('analysis', compact('logout_route'));
    }
}
