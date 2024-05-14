<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //This method will show the login page for all users
    public function index(){
        return view('auth.login');
    }

    //This method will authenticate the users
    public function authenticate(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
               
                return redirect()->route('account.dashboard');

            } else {
                return redirect()->route('account.login')->with('error','Either email or password is incorrect.');
            }

        } else {
            return redirect()->route('account.login')
            ->withInput()
            ->withErrors($validator);
        }

    }


    //This function will show the register page
    public function register(Request $request) {

        return view('auth.register');
    }


    public function processRegister(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'password' => 'required|confirmed:password_confirmation|min:8',
            'password_confirmation' => 'required', 
        ]);

        if ($validator->passes()) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->password = Hash::make($request->password);
            $user->role ="student";
            $user->save();

            return redirect()->route('account.login')->with('Success!', 'You have registered successfully.');

        } else {
            return redirect()->route('account.register')
            ->withInput()
            ->withErrors($validator);
        }
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('account.login');
    }

}
