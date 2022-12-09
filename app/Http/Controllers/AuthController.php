<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login()
  {
    return view('login');
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'string', 'email'],
      'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect()->intended('/');
    } else {
      return redirect('/login')->with('error', 'Akun tidak terdaftar');
    }
  }
}
