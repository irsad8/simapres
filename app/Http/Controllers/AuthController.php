<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function ubah_password(Request $request)
    {
        $request->validate([
            'password' => ['required'],
            'password_confirmation' => ['required'],
        ]);

        if ($request->password !== $request->password_confirmation) {
            return back()->with('error', 'ubah password anda gagal');
        }

        $user = User::find($request->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password berhasil diubah');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->to('dashboard')->with('success', 'anda berhasil login');
        }

        return back()->with('error', 'anda gagal login input data yang benar')->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'anda berhasil logout');
    }
}
