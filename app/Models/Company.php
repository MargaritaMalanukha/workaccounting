<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['companyID', 'companyName'];


    public static function findByCompanyName($companyName){
        $company = DB::table('companies')->where('companyName', '=', $companyName)->first();
        if ($company == null) return null;
        return $company->companyID;
    }

    public static function create($companyName){
        DB::table('companies')->insert([
            'companyName' => $companyName
        ]);
    }
}
