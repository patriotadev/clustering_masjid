<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate(
            [
                'username' => 'required|unique:users,username',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6',
            ],
            [
                'username.required' => 'Masukkan username!',
                'username.unique' => 'Username sudah terdaftar, masukkan username lain!',
                'email.required' => 'Masukkan email!',
                'email.unique' => 'Email sudah terdaftar, masukkan email lain!',
                'password.required' => 'Masukkan password!',
                'password.min' => 'Password tidak boleh kurang dari 6 karakter!'
            ]
        );

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s')
        ];

        UserModel::create($data);
        return redirect('/login');
    }

    public function login(Request $request)
    {

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Masukkan email!',
                'password.required' => 'Masukkan password!',
            ]
        );


        $getUser = UserModel::where('email', $request->email)->first();
        if ($getUser) {
            if (Hash::check($request->password, $getUser->password)) {
                session([
                    'hasLogin' => true,
                    'user_id' => $getUser->id,
                    'user_name' => $getUser->username,
                    'user_email' => $getUser->email
                ]);
                $request->session()->flash('login_success', 'Berhasil Login!');
                return redirect('/dashboard');
            } else {
                $request->session()->flash('login_fail_pass', 'Password salah!');
                return redirect('/login');
            }
        } else {
            $request->session()->flash('login_fail', 'Gagal Login!');
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');

        // print_r(session('user_id'));
    }
}
