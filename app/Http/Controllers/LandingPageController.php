<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index()
    {
        if (Auth::guard('mahasiswa')->check()) {
            return redirect('/dashboard-mahasiswa');
        }
        return view('layout.landing');
    }
}
