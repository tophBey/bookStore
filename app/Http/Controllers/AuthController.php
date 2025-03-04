<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => ['required', 'string','email', 'max:255', 'unique:'. User::class],
            'password' => ['required', 'comfirmed', 'max:255']
        ]);

    }

    public function show(){
        return view('auth.register');
    }

    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required','string', 'max:18'],
            'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'email' => ['required', 'string','email', 'max:255', 'unique:'. User::class],
            'password' => ['required', 'confirmed', 'max:255']
        ]);

        if($request->hasFile('avatar')){
            $avatarPath = $request->file('avatar')->store('avatar','public');
   
        }

        $user = User::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'avatar' => $avatarPath,
            'email' => $request->input( 'email'),
            'password' => Hash::make($request->input('password'))
        ]);

        $user->assignRole('customer');

        return redirect(route('login'))->with('register', 'Berhasil Registrasi Silahkan Login');


    }
}
