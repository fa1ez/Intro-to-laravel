<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use App\Models\Admin;
use SebastianBergmann\Environment\Console;

class AdminController extends Controller
{
    //
    function FirstFunc(){
        return view('Signup');
    }
    function Store(Request $request){
        return "abc";
        // $admin_data = Admin::insert(
        //     'name' => $request->get('name'),
        //     'password' => $request->get('password')
        //     'email' => $request->get('email')
        // );
        $admin_data = new Admin();
     
        $admin_data->name = $request->input('name');
        $admin_data->email = $request->input('email');
        $admin_data->password = $request->input('password');
        $admin_data->save();

        return redirect()->route('home');
    }
    function createAdmin(){
        $entry = Admin::insert(
            ['name' => 'faiez','email' => 'keval@example.com','password' => '123']
        );   
        if($entry){
            return 'Admin inserted';
        }
        else{
            return 'Admin insertion failed';
        }
    }
}
