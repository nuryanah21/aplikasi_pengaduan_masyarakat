<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function FormLoginMasyarakat()
    {
        return view('auth.login');
    }

    public function LoginMasyarakat()
    {
        $auth = request()->only('username','password');
        if(Auth()->attempt($auth))
        {
            return redirect()->to('/');
        }
    }
}
