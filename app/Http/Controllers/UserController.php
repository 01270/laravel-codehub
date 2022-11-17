<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(){return view('users.register');}
    public function login(){return view('users.login');}

    public function register_user(Request $req){
        $ff = ($req->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required|Confirmed|min:6',
        ]));

        $ff['password'] = bcrypt($ff['password']);
        auth()->login(User::create($ff));
        return redirect('/')->with('message', 'Welcome ' . $ff['name']);
    }

    public function logout_user(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/')->with('message', 'See You Soon :(');
    }

    public function login_user(Request $req){
        $ff = ($req->validate([
            'email' => ['required', 'email'],
            'password' => 'required']));

        if(auth()->attempt($ff)){
            $req->session()->regenerate();
            return redirect('/')->with('message', 'Welcome Back!');
        }

        return back()
        ->withErrors(['email' => 'Invalid email or password'])
        ->onlyInput('email');
    }
}
