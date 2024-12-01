<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginMahasiswaController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.mahasiswa-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required|string',
            'password' => 'required|string',
        ]);

        // Login menggunakan guard mahasiswa
        if (Auth::guard('mahasiswa')->attempt($request->only('nim', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-mahasiswa');
        }

        return back()->withErrors([
            'message' => 'NIM atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('mahasiswa')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login-mahasiswa');
    }
}
