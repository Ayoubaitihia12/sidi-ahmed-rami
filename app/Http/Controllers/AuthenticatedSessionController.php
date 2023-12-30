<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;


class AuthenticatedSessionController extends Controller
{
    public function login(){

        return view('auth.login');
    }

    public function store(Request $request)
    {

        $credentials = $request->only('code', 'password');



        if(Auth::attempt($credentials,$request->has('remember'))){
            
            $request->session()->regenerate();

            if(Auth::user()->isAdmin()){

                $route = '/admin';
    
            }else if (Auth::user()->isSchool()){
    
                $route = '/';
    
            }  

            return redirect()->intended($route);

        }else{

            return back()->withErrors([
                'code' => 'اسم المستخدم او كلمة المرور خاطئة'
            ])->onlyInput('code');

        }

        
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
