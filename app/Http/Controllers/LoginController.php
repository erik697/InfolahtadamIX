<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {if (Auth::check()) {
        $previous = url()->previous();
            if ($previous && $previous !== url('/login')) {
                // return redirect($previous);
            return redirect()->route('dashboards.index');

            }

            // Default ke dashboard jika tidak ada halaman sebelumnya
            return redirect()->route('dashboards.index');
    }
        return view('login.index');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ]);
        $remember = $request->remember ? true : false;
        // dd($request->all());
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            // false
        ];
        // dd($remember);

        if (Auth::attempt($data, $remember )) {
            $request->session()->regenerate();

            return redirect()->route('dashboards.index');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

public function reloadChaptcha(){
    return response()->json(['captcha' => captcha_img()]);
}
}
