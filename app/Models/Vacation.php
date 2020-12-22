<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Vacation extends Model
{
    use HasFactory;

    private static $paginate = 10;
    protected $fillable = ['vacationID', 'vacationDays', 'vacationMonth', 'vacationYear', 'employeeID'];

    public static function findAll(Request $request){
        $employees = Employee::findAll($request);
        for ($i = 0; $i < count($employees); $i++) {
            $arrayId[$i] = $employees[$i]->employeeID;
        }
        return DB::table('vacations')->whereIn('employeeID', $arrayId)->get();
    }

    public static function create(Request $request){
        DB::table('vacations')->insert([
            'vacationDays' => $request->input('vacationDays'),
            'vacationMonth' => $request->input('vacationMonth'),
            'vacationYear' => $request->input('vacationYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function updateH(Request $request, $id) {
        DB::table('vacations')->where('vacationID', '=', $id)->update([
            'vacationDays' => $request->input('vacationDays'),
            'vacationMonth' => $request->input('vacationMonth'),
            'vacationYear' => $request->input('vacationYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function deleteH($id) {
        DB::table('vacations')->where('vacationID', '=', $id)->delete();
    }

    public static function findById($id) {
        return DB::table('vacations')->where('vacationID', '=', $id)->first();
    }
}
