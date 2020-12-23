<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;

    private static $paginate = 10;
    protected $fillable = ['employeeID', 'employeeData', 'employeeWorkingDays', 'subdivisionID'];

    public static function findAll(Request $request) {
        $subdivisions = Subdivision::findAll($request);
        for ($i = 0; $i < count($subdivisions); $i++) {
            $arrayId[$i] = $subdivisions[$i]->subdivisionID;
        }
        return DB::table('employees')->whereIn('subdivisionID', $arrayId)->get();
    }

    public static function create(Request $request) {
        DB::table('employees')->insert([
            'employeeData' => $request->input('employeeData'),
            'subdivisionID' => $request->input('subdivisionID'),
            'employeeWorkingDays' => $request->input('employeeWorkingDays')
        ]);
    }

    public static function updateE(Request $request, $id) {
        DB::table('employees')->where('employeeID', '=', $id)->update([
            'employeeData' => $request->input('employeeData'),
            'subdivisionID' => $request->input('subdivisionID'),
            'employeeWorkingDays' => $request->input('employeeWorkingDays')
        ]);
    }

    public static function findById(int $id)
    {
        return DB::table('employees')->where('employeeID', '=', $id)->first();
    }

    public static function deleteE($id) {
        DB::table('employees')->where('employeeID', '=', $id)->delete();
    }

    public static function findBySubdivisionID($subdivisionID) {
        return DB::table('employees')->where('subdivisionID', '=', $subdivisionID)->get();
    }

    public static function findBySurname($employeeSurname)
    {
        return DB::table('employees')->where('employeeData', 'like', $employeeSurname . '%')->first();
    }
}
