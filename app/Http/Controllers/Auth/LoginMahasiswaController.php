<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;

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

        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();

        if (!$mahasiswa) {
            return response()->json([
                'success' => false,
                'message' => 'NIM tidak ditemukan.',
            ], 401);
        }

        // if (!$mahasiswa || !Hash::check($request->password, $mahasiswa->password)) {
        if (!Hash::check($request->password, $mahasiswa->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Password salah.',
            ], 401);
        }

        // dd('ok');
        // Login mahasiswa
        try {
            Auth::guard('mahasiswa')->login($mahasiswa);
            $request->session()->regenerate();
            return response()->json([
                'success' => true,
                'message' => 'Login berhasil.',
                'redirect_url' => '/dashboard-mahasiswa'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat login. Silakan coba lagi.',
            ], 500);
        }

        // Login mahasiswa
        // Auth::guard('mahasiswa')->login($mahasiswa);
        // $request->session()->regenerate();

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Login berhasil!',
        //     'redirect_url' => url('/dashboard-mahasiswa'), // URL untuk redirect
        // ]);
    }


    public function logout(Request $request)
    {
        Auth::guard('mahasiswa')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login-mahasiswa');
    }
}
