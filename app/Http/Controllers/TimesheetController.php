<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    public function index(Request $request) {
        return view('timesheets');
    }
}
