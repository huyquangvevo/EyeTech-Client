<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $logout_route = route('custom-logout');
        return view('employees.index', compact('logout_route'));
    }

    public function show($id) {
        $logout_route = route('custom-logout');
        return view('employees.show',compact('logout_route'));
    }

    public function create() {
        $logout_route = route('custom-logout');
        return view('employees.create', compact('logout_route'));
    }
}
