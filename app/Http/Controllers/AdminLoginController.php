<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function verifyAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'

        ]);

        $user = DB::table('employees')->where('name', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password) && $user->role == "Admin") {
            Session::regenerate();
            
            Session::put('is_logged_in', true);
            Session::put('user_id', $user->id);
            Session::put('username', $user->name);
            

            return redirect()->route('admin.dashboard'); 
        } else {
        return back()->withErrors(['username' => "Username or password was incorrect"]);
        }
    }
}
