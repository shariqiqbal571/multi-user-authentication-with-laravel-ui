<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to the desired route after logout
        // return redirect()->route('career.genie.login'); // Redirect to the desired route after logout
    }
}
