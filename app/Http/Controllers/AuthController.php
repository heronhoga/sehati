<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   
    //NO LOGIN
    function index(){
        return view('auth.index');
    }

    //LOGIN
    function homepage() {
        return view('auth.home');
    }

    //LOGIN
    function loginpage() {
        return view('auth.login');
    }

    function login(Request $request) {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            $dataSession = [
                'email' => $user->email,
                'username' => $user->username,
                'id' => $user->id
            ];
    
            $request->session()->put('user_data', $dataSession);

            return redirect('home')->with('message', 'Anda berhasil masuk');
            } else {
            return redirect('login')->with('message', 'Mohon masukkan data yang benar');
        }

    }

    //REGISTER
    function registerpage() {
        return view('auth.register');
    }

    function register(Request $request){
        // dd($request->all());
        $user = new User();
        $request->validate([
            'email' => 'required|unique:users|email',
            'username' => 'required|unique:users',
            'password' => 'required',
            'confirm' => 'required'
        ]);
        
        if ($request->password !== $request->confirm) {
            return redirect()->route('register')->with('message', 'Konfirmasi password tidak sesuai!');
        }

        $dataReg = [
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        ];

        $user->create($dataReg);

        $dataSession = [
            'email' => $request->email,
            'username' => $request->username,
            'id' => $user->id
        ];

        $request->session()->put('user_data', $dataSession);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($credentials)) {
            return redirect('home')->with('message', 'Anda berhasil masuk');
        } else {
            return redirect('register')->with('message', 'Mohon masukkan data yang benar');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('index');
    }
}
