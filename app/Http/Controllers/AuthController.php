<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Roles;
use Auth;

class AuthController extends Controller
{
    public function register_auth()
    {
        return view('admin.custom_auth.register');
    }
    public function login_auth()
    {
        return view('admin.custom_auth.login_auth');
    }
    public function logout_auth()
    {
        Auth::logout();
        return redirect('/login-auth')->with('message', 'Đăng xuất authentication thành công');

    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',

        ]);
        $data = $request->all();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/login-auth')->with('message', 'Lỗi đăng nhập authentication');
        }

    }
    public function register(Request $request)
    {
        $this->validation($request);
        $data = $request->all();
        $admin = new Admin();
        $admin->name = $data['name'];
        $admin->phone = $data['phone'];
        $admin->email = $data['email'];
        $admin->password = $data['password'];
        $admin->save();
        return redirect('/register-auth')->with('massage', 'Đăng ký thành công');

    }
    public function validation($request)
    {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',

        ]);
    }
}
