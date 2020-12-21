<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Subdivision extends Model
{
    use HasFactory;

    private static $paginate = 10;
    protected $fillable = ['subdivisionID', 'subdivisionName', 'companyId'];

    public static function create(Request $request) {
        DB::table('subdivisions')->insert([
            'subdivisionName' => $request->input('title'),
            'companyId' => $request->session()->get('data.companyId')
        ]);
    }

    public static function updateS(Request $request, $oldId) {
        DB::table('subdivisions')->where('subdivisionId', '=', $oldId)->update([
            'subdivisionName' => $request->input('title')
        ]);
    }

    public static function findById($id) {
        return DB::table('subdivisions')->where('subdivisionID', '=', $id)->first();
    }

    public static function deleteS($id) {
        DB::table('subdivisions')->where('subdivisionID', '=', $id)->delete();
    }

    public static function findAll(Request $request)
    {
        $companyId = $request->session()->get('data.companyId');
       return DB::table('subdivisions')->where('companyId', '=', $companyId)->paginate(self::$paginate);
    }

}
