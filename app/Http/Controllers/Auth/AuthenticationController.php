<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    /**
     * @return View
     */
    public function loginIndex():View
    {
        return view('Auth.login');
    }

    /**
     * @return View
     */
    public function registerIndex():View
    {
        return view('Auth.register');
    }

    /**
     * @return View
     */
    public function logout(): View
    {
        Auth::logout();

        return view('Auth.login');
    }
}
