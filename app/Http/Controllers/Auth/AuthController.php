<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'kata_sandi' => 'required|string'
        ]);

        $attempt = [
            'email' => $credentials['email'],
            'password' => $credentials['kata_sandi'] # password = nama field di tabel users
        ];

        if (Auth::attempt($attempt)) {
            $request->session()->regenerate();
            $user = Auth::user();

            return redirect()->route('beranda.index'); # nama route mengikuti name di web.php
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda telah keluar dari SIM-Surat.'); # karena ingin mengarahkan ke URL, jangan gunakan route()
    }
}
