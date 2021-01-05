<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('dashboard');
        }
        alert()->error('Error', 'Email atau Password salah!');
        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function registration()
    {
        return view('register');
    }

    public function registrationStore(Request $request)
    {
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'level' => 'user',
            'email' => $request->email,
            'nrp' => $request->nrp,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);

        return redirect('login')->with('success', 'Akun berhasil didaftarkan!');
    }
}