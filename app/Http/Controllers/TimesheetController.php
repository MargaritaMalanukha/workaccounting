<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Subdivision;
use App\Models\Timesheet;
use App\Models\User;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{

    public function index(Request $request) {
        if (!User::isAuthorized($request)) return redirect('/login');
        return view('timesheets');
    }

    public function listOfAllEmployees(Request $request) {
        $employees = Employee::findAll($request);
        $hospitals = Timesheet::findHospitalsInLastMonth($employees);
        $vacations = Timesheet::findVacationsInLastMonth($employees);
        $trips = Timesheet::findTripsInLastMonth($employees);
        $absents = Timesheet::findAbsentsInLastMonth($employees);
        return view('timesheet1')
            ->with('employees', $employees)
            ->with('hospitals', $hospitals)
            ->with('vacations', $vacations)
            ->with('trips', $trips)
            ->with('absents', $absents);
    }

    public function listBySubdivision(Request $request, $subdivisionID) {
        $subdivisions = Subdivision::findAll($request);
        $employees = Employee::findBySubdivisionID($subdivisionID);
        $hospitals = Timesheet::findHospitalsInLastMonth($employees);
        $vacations = Timesheet::findVacationsInLastMonth($employees);
        $trips = Timesheet::findTripsInLastMonth($employees);
        $absents = Timesheet::findAbsentsInLastMonth($employees);
        return view('timesheet2')
            ->with('subdivisions', $subdivisions)
            ->with('employees', $employees)
            ->with('hospitals', $hospitals)
            ->with('vacations', $vacations)
            ->with('trips', $trips)
            ->with('absents', $absents)
            ->with('subdivisionID', $subdivisionID);
    }

    public function listOfAbsentsBySubdivision(Request $request, $subdivisionID) {
        $subdivisions = Subdivision::findAll($request);
        $employees = Employee::findBySubdivisionID($subdivisionID);
        $absents = Timesheet::findAbsents($employees);
        return view('timesheet3')
            ->with('subdivisions', $subdivisions)
            ->with('employees', $employees)
            ->with('absents', $absents)
            ->with('subdivisionID', $subdivisionID);
    }

    public function listOfRecentlyIll(Request $request) {
        $employees = Employee::findAll($request);
        $hospitals = Timesheet::findHospitalsInLastMonth($employees);
        $vacations = Timesheet::findVacationsInLastMonth($employees);
        $trips = Timesheet::findTripsInLastMonth($employees);
        $absents = Timesheet::findAbsentsInLastMonth($employees);
        return view('timesheet4')
            ->with('employees', $employees)
            ->with('hospitals', $hospitals)
            ->with('vacations', $vacations)
            ->with('trips', $trips)
            ->with('absents', $absents);
    }
}
