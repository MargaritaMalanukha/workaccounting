<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Absent extends Model
{
    use HasFactory;

    private static $paginate = 10;
    protected $fillable = ['absentID', 'absentDays', 'absentMonth', 'absentYear', 'employeeID'];

    public static function findAll(Request $request){
        $employees = Employee::findAll($request);
        for ($i = 0; $i < count($employees); $i++) {
            $arrayId[$i] = $employees[$i]->employeeID;
        }
        return DB::table('absents')->whereIn('employeeID', $arrayId)->paginate(self::$paginate);
    }

    public static function create(Request $request){
        DB::table('absents')->insert([
            'absentDays' => $request->input('absentDays'),
            'absentMonth' => $request->input('absentMonth'),
            'absentYear' => $request->input('absentYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function updateH(Request $request, $id) {
        DB::table('absents')->where('absentID', '=', $id)->update([
            'absentDays' => $request->input('absentDays'),
            'absentMonth' => $request->input('absentMonth'),
            'absentYear' => $request->input('absentYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function deleteH($id) {
        DB::table('absents')->where('absentID', '=', $id)->delete();
    }

    public static function findById($id) {
        return DB::table('absents')->where('absentID', '=', $id)->first();
    }
}
