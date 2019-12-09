<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function verify(Request $request)
    {
        $user = DB::table('users')
        ->where('username', $request->username)
        ->where('password', $request->password)
        ->first();

        if($user)
        {
            if($user->type == 1)
            {
                return redirect()->route('teacher.index');
            }else{
                return redirect()->route('student.index');
            }
        }
    }
}


