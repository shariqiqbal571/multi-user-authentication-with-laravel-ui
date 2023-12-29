<?php

namespace App\Http\Controllers\genie;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\EducationQualification;
use Illuminate\Support\Facades\Validator;

class GenieController extends Controller
{
    public function index()
    {
        return view('genie_dashboard.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Redirect to the desired route after logout
        // return redirect()->route('career.genie.login'); // Redirect to the desired route after logout
    }

}
