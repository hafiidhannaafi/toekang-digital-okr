<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
                $credentials = $request->validate([
                    'email' => 'required',
                    'password' => 'required',
                ]);

                if (Auth::attempt($credentials)) {
                    $user =Auth::user();
                    if ($user->level == 'manager') {
                        return redirect()->intended('manager');
                    }elseif ($user->level == 'pegawai'){
                        return redirect()->intended('pegawai');
                    }
                    return redirect()->intended('/');
                    // $request->session()->regenerate();
                    // return redirect()->intended('/dashboard');
                }
                return redirect('login');
                // return back()->with('loginError', 'Login Failed!');

        // $user=User::where('email',$request->email)->first();
        // if($user)
        // {
        //     if(Hash::check($request->password, $user->password))
        //     {
        //         Auth::login($user);
        //         return redirect('/okrdashboard');
        //     }
        // }
        // return redirect()->back()->with('loginError', 'Login Failed!');

        
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

