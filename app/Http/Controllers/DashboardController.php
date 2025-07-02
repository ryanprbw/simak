<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {
        // Ambil semua data user dari database
        $users = User::with('leader')->get();

        // Kirim ke view 'users.index'
        return view('dashboard', compact('users'));
    }


}
