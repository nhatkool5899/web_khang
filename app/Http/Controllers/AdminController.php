<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        // $user = new User();
        // $user->name = 'admin_khang';
        // $user->email = 'admin_khang@gmail.com';
        // $user->password = Hash::make('123456789');

        // $user->save();
        return view('admin.dangnhap');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required', 'password' => 'required'
        ], 
        [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập password'
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/auth/khang/admin')->with('thongbao', 'Đăng nhập không thành công');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/khang/admin');
    }
}
