<?php

namespace App\Http\Controllers\guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GuruController extends Controller
{
    public function index ()
    {
        return view('guru_dashboard.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        // return redirect()->route('career.genie.login'); // Redirect to the desired route after logout
        return redirect('/login'); // Redirect to the desired route after logout
    }


}
