<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route_header = route('customers.index');
        $events_route = route('events.index');
        $branch_id = Auth::user()->branch_id;
        return view('home', compact('branch_id', 'events_route', 'route_header'));
    }
}
