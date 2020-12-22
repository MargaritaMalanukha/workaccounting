<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Timesheet extends Model
{
    use HasFactory;

    private static $lastMonth = 11;

    public static function findHospitalsInLastMonth($employees){
        for ($i = 0; $i < count($employees); $i++) {
            $sum[$i] = DB::table('hospitals')
                ->where('employeeID', '=', $employees[$i]->employeeID)
                ->where('hospitalMonth', '=', self::$lastMonth)->sum('hospitalDays');
        }
        return $sum;
    }

    public static function findVacationsInLastMonth($employees){
        for ($i = 0; $i < count($employees); $i++) {
            $sum[$i] = DB::table('vacations')
                ->where('employeeID', '=', $employees[$i]->employeeID)
                ->where('vacationMonth', '=', self::$lastMonth)->sum('vacationDays');
        }
        return $sum;
    }

    public static function findTripsInLastMonth($employees)
    {
        for ($i = 0; $i < count($employees); $i++) {
            $sum[$i] = DB::table('businesstrips')
                ->where('employeeID', '=', $employees[$i]->employeeID)
                ->where('businessTripMonth', '=', self::$lastMonth)->sum('businessTripDays');
        }
        return $sum;
    }

    public static function findAbsentsInLastMonth($employees)
    {
        for ($i = 0; $i < count($employees); $i++) {
            $sum[$i] = DB::table('absents')
                ->where('employeeID', '=', $employees[$i]->employeeID)
                ->where('absentMonth', '=', self::$lastMonth)->sum('absentDays');
        }
        return $sum;
    }

    public static function findAbsents($employees) {
        for ($i = 0; $i < count($employees); $i++) {
            $sum[$i] = DB::table('absents')
                ->where('employeeID', '=', $employees[$i]->employeeID)->sum('absentDays');
        }
        return $sum;
    }
}
