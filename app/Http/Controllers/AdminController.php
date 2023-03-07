<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use App\Models\Admin;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    //
    function FirstFunc()
    {
        return view('Signup');
    }
    function Loginscreen()
    {   
        Auth::guard('admin')->logout();
        return view('login');
    }
    function resetpassscreen(){
        return view('pass');
    }
    function delscreen(){
        return view('delete');
    }
    function sstore(Request $request)
    {

        /////////////////////////method 1
        // $admin_data = new Admin();
        // $admin_data->name = $request->input('name');
        // $admin_data->email = $request->input('email');
        // $admin_data->password = $request->input('password');
        // $admin_data->save();

        /////////////////////////method 2
        Admin::insert(
            ['name' => $request->input('name'), 'email' => $request->input('email'), 'password' => $request->input('password')]
        );

        return '<h1>Successfully inserted</h1>';
    }
    function admincheck(Request $req){
        $credentials = Admin::where('name',$req->input('name'))->first();

        Auth::guard('admin')->login($credentials);
       
        return redirect()->route('myadmin.del');
        // if($credentials && $credentials[0]->name == $req->input('name') && $credentials[0]->password == $req->input('password')){
        //     //auth()->user() = $req->input('name');
        // }
        // return '<h1>Login Failed</h1>';
    }
    
    function resetpass(Request $req){
        
        if(Admin::where('name',$req->input('name'))->update(['password' => $req->input('npassword')]) ){
            return '<h1>Successfully updated password</h1>';
        }
        return '<h1>Update Failed</h1>';
    }

    function del_acc(Request $req){
        if(Admin::where('name',$req->input('name'))->delete() ){
            return '<h1>Successfully deleted user</h1>';
        }
        return '<h1>Deletion Failed</h1>';
    }


    function createAdmin()
    {
        $entry = Admin::insert(
            ['name' => 'faiez', 'email' => 'keval@example.com', 'password' => '123']
        );
        if ($entry) {
            return 'Admin inserted';
        } else {
            return 'Admin insertion failed';
        }
    }
}