<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Businesstrip extends Model
{
    use HasFactory;

    private static $paginate = 10;
    protected $fillable = ['businessTripID', 'businessTripDays', 'businessTripMonth', 'businessTripYear', 'employeeID'];

    public static function findAll(Request $request){
        $employees = Employee::findAll($request);
        for ($i = 0; $i < count($employees); $i++) {
            $arrayId[$i] = $employees[$i]->employeeID;
        }
        return DB::table('businesstrips')->whereIn('employeeID', $arrayId)->get();
    }

    public static function create(Request $request){
        DB::table('businesstrips')->insert([
            'businessTripDays' => $request->input('businessTripDays'),
            'businessTripMonth' => $request->input('businessTripMonth'),
            'businessTripYear' => $request->input('businessTripYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function updateH(Request $request, $id) {
        DB::table('businesstrips')->where('businessTripID', '=', $id)->update([
            'businessTripDays' => $request->input('businessTripDays'),
            'businessTripMonth' => $request->input('businessTripMonth'),
            'businessTripYear' => $request->input('businessTripYear'),
            'employeeID' => $request->input('employeeID')
        ]);
    }

    public static function deleteH($id) {
        DB::table('businesstrips')->where('businessTripID', '=', $id)->delete();
    }

    public static function findById($id) {
        return DB::table('businesstrips')->where('businessTripID', '=', $id)->first();
    }
}
