<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;

class UserController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:60',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|min:8'
        ]);

        $user = new User();
        $user->name = $validateData['name'];
        $user->email = $validateData['email'];
        $user->password = Hash::make($validateData['password']);
        $user->password_confirmation = Hash::make($validateData['password_confirmation']);
        $user->save();

        return redirect('login');
    }

    public function loginUser(Request $request) {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return redirect(route('login'))->with("error", "Login details are not valid.");
    }

    public function home() {
        return view('homeAuth');
    }

    public function login() {
        return view('login');
    }
}
