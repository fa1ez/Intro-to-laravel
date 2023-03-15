<?php

namespace App\Http\Controllers;

use App\Http\Middleware\SuperAdmin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function loginV()
    {
        return view('login');
    }
    function signupV()
    {
        return view('signup');
    }
    function deleteV()
    {
        return view('delete');
    }
    function logoutV()
    {
        Auth::guard('Sup_admin')->logout();
        return view('login');
    }
    function user_insert(Request $req)
    {
        $sup = $req->input('is_super_admin');
        User::insert(
            ['name' => $req->input('name'), 'email' => $req->input('email'), 'password' => $req->input('password'), 'super_admin' => $sup]
        );

        $cred = User::where('name', $req->input('name'))->where('super_admin', 1)->first();
        if ($sup) {
            Auth::guard('Sup_admin')->login($cred);
            return redirect()->route("nav.delete");
        }
        return redirect()->route("user.login");
    }

    function user_delete(Request $req)
    {
        $check = User::where('name', $req->input('name'))->where('email', $req->input('email'))->where('super_admin', 0)->first();
        //dd($check);
        if ($check) {
            $check->delete();
            return redirect()->route("nav.delete");
        }
        return '<h1>Deletion Failed</h1>';
    }

    function homepage(Request $req)
    {
        $credentials = User::where('name', $req->input('name'))->where('password', $req->input('password'))->first();

        if ($credentials && $credentials->name == $req->input('name') && $credentials->password == $req->input('password')) {
            $is_admin = User::where('name', $req->input('name'))->where('super_admin', 1)->first();
            if ($is_admin) {
                Auth::guard('Sup_admin')->login($credentials);
                return redirect()->route('nav.delete');
            }

            $token = $credentials->createToken('UserToken')->accessToken;
            //logged in as user
            //return redirect()->route('user.retreive');
            dd($token);
            return $token;
        }
    }
    public function getAllUsers(Request $request)
    {
        dd($request);
        $user= Auth::user();
        return $user;
        $users = User::all();
        return response()->json(['users' => $users], 200);
    }
}