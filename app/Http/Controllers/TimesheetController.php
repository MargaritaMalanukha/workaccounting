<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    public function index(Request $request) {
        if (!User::isAuthorized($request)) return redirect('/login');
        return view('timesheets');
    }
}
