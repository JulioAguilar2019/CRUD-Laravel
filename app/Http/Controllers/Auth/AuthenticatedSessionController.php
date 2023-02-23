<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request){

       $credentials =  $request->validate([
            'email'=>['required', 'string', 'email', 'max:255'],
            'password'=>['required', 'string']
        ]);

        if(!auth()->attempt($credentials, $request->boolean('remember'))){
            throw ValidationException::withMessages([
                'email'=>__('auth.failed')
            ]);
        }
        $request->session()->regenerate();

        return redirect()->intended(route('home'))->with('status', 'You are logged in.');
    }

    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'You are logged out.');
    }
}
