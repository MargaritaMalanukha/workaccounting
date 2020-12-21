<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = ['hospitalID', 'hospitalDays', 'hospitalMonth', 'hospitalYear', 'employeeID'];

    public static function findAll(Request $request){
        $employees = Employee::findAll($request);
        for ($i = 0; $i < count($employees); $i++) {
            $arrayId[$i] = $employees[$i]->employeeID;
        }
        return DB::table('hospitals')->whereIn('employeeID', $arrayId)->get();
    }

    public static function create(Request $request){
        DB::table('hospitals')->insert([
            'hospitalDays' => $request->input('hospitalDays'),
            'hospitalMonth' => $request->input('hospitalMonth'),
            'hospitalYear' => $request->input('hospitalYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function updateH(Request $request, $id) {
        DB::table('hospitals')->where('hospitalID', '=', $id)->update([
            'hospitalDays' => $request->input('hospitalDays'),
            'hospitalMonth' => $request->input('hospitalMonth'),
            'hospitalYear' => $request->input('hospitalYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function deleteH($id) {
        DB::table('hospitals')->where('hospitalID', '=', $id)->delete();
    }

    public static function findById($id) {
        return DB::table('hospitals')->where('hospitalID', '=', $id)->first();
    }
}
