<?php

namespace App\Http\Controllers\member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function index()
    {
        return view('member_dashboard.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Redirect to the desired route after logout
    }

}
