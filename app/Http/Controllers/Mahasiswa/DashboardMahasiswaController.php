<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardMahasiswaController extends Controller
{

    public function index()
    {

        $mahasiswa = Auth::guard('mahasiswa')->user();

        return view('layout.dashboard-mahasiswa', compact('mahasiswa'));
    }
}
