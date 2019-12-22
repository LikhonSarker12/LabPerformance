<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Requests\RegistrationRequest;
use App\user;
use App\employee;
use App\Admin;



class RegistrationController extends Controller
{
    function index(Request $request){
        return view('registration.index');
    }
    function getRegistrationAdmin(Request $request)
    {
        return view('registration.admin');

    }
    function getRegistrationEmployee(Request $request)
    {
       return view('registration.employee');
    }
    function postRegistrationEmlpoyee(Request $request)
    {
        $user = new employee();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->address = $request->Emailaddress;
        $user->contract = $request->username;
        $user->username = $request->username;
        $user->password = $request->password;
       
        if($user->save()){
            $user = new user();
        $user->userName = $request->username;
        $user->userPassword = $request->password;
        $user->type = 'employee';
        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.employee');
        }
        }else{
            return redirect()->route('registration.employee');
        }
        
    }
    
    function postRegistrationAdmin(Request $request)
    {
        $user = new Admin();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->address = $request->Emailaddress;
        $user->contract = $request->username;
        $user->username = $request->username;
        $user->password = $request->password;
       
        if($user->save()){
            $user = new user();
        $user->userName = $request->username;
        $user->userPassword = $request->password;
        $user->type = 'admin';
        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.admin');
        }
        }else{
            return redirect()->route('registration.admin');
        }
    }
}
