<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate
        ([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:4', 'max:50'],
            'password'=>['required','confirmed']
        ]);
        $user = User::create
        ([
            'name' => $request->input('name'),
            'email' =>  $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect()->route('dashboard');
    }
}
