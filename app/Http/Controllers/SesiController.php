<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class SesiController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function reqLogin(Request $request)
    {
        Session::flash('email', $request->email);
        //validation
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi',
        ]);
        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            if (Auth::user()->role == 'user') {
                return redirect('/user/dashboard');
            }
        } else {
            return to_route('login')->withErrors('Email atau password salah');
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function reqRegister(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', '']
        ], [
            'email.required' => 'Email wajib di isi',
            'name.required' => 'Nama wajib di isi',
            'password.required' => 'Anda belum mengisi password',
            'password.confirmed' => 'Konfirmasi password anda salah'
        ]);

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password)
        ]);
        event(new Registered($data));
        return to_route('login')->with('success', 'Berhasil Membuat Akun');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
