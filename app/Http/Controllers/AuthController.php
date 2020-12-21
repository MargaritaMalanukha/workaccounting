<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        User::validateLogin($request);
        $user = self::auth($request);
        $data = (array) $user;
        $request->session()->put('data', $data);
        return redirect('/timesheets');
    }

    public function register(Request $request) {
        User::validateRegister($request);
        User::create($request);
        $user = self::auth($request);
        $data = (array) $user;
        $request->session()->put('data', $data);
        return redirect('/timesheets');
    }

    public function auth(Request $request){
        $user = User::findByEmail($request->input('email'));
        if ($user == null || $user->password != $request->input('password')) {
            return redirect('/register')->with('error', 'Wrong email or password!');
        }
        return $user;
    }

    public function logout(Request $request) {
        User::logout($request);
        return redirect('/login');
    }
}
