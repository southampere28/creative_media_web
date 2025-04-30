<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('form.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // Ambil kredensial
        $credentials = $request->only('email', 'password');

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Untuk menghindari session fixation
            return redirect()->route('dashboard.index')->with('success', 'Login Berhasil!'); // Ganti 'dashboard' dengan halaman setelah login
        }

        // Jika gagal
        return back()->with('error', 'Email atau password salah.')->withInput();

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
