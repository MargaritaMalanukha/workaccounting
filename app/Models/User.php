<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'email', 'password', 'companyId'];

    public static function validateLogin(Request $request) {
        $request->validate([
            'email' => 'required|max:55',
            'password' => 'required'
        ]);
    }

    public static function validateRegister(Request $request) {
        $request->validate([
            'name' => 'required|max:20',
            'surname' => 'required|max:20',
            'email' => 'required|unique:users|max:55',
            'password' => 'required',
            'companyName' => 'required|max:55'
        ]);
    }

    public static function findByEmail($email) {
        return DB::table('users')->where('email', '=', $email)->first();
    }

    public static function create(Request $request) {
        $companyName = $request->input('companyName');
        $companyId = Company::findByCompanyName($companyName);
        if ($companyId == null) {
            Company::create($companyName);
            $companyId = Company::findByCompanyName($companyName);
        }
        DB::table('users')->insert([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'companyId' => $companyId
        ]);
    }

    public static function isAuthorized(Request $request) {
        return !($request->session()->has('data.password') == null);
    }

    public static function logout(Request $request) {
        $request->session()->flush();
    }


}
