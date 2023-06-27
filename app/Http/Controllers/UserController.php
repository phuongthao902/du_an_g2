<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Roles;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Session;
use Redirect;
use DB;


class UserController extends Controller
{
    // public function showProfile()
    // {
    //     $user = Auth::user();
    //     return view('profile', compact('user'));
    // }

    public function index()
    {
        $admin = Role::with('role')->orderBy('id', 'DESC')->paginate(5);
        return view('admin.users.all_users')->with(compact('admin'));
    }

    public function add_users()
    {
        return view('admin.users.add_users');
    }
    public function assign_roles(Request $request)
    {
        // $data=$request->all();

        $user = Admin::where('email', $request->email)->first();
        $user->roles()->detach();
        if ($request->author_role) {
            $user->roles()->attach(Roles::where('name', 'author')->first());
        }
        if ($request->user_role) {
            $user->roles()->attach(Roles::where('name', 'user')->first());
        }
        if ($request->admin_role) {
            $user->roles()->attach(Roles::where('name', 'admin')->first());
        }
        return redirect()->back()->with('message', 'Cấp quyền thành công');
    }
    public function store_users(Request $request)
    {
        $data = $request->all();
        $admin = new Admin();
        $admin->name = $data['name'];
        $admin->phone = $data['phone'];
        $admin->email = $data['email'];
        $admin->password = $data['password'];
        $admin->save();
        $admin->roles()->attach(Roles::where('name', 'user')->first());
        Session::put('message', 'Thêm users thành công');
        return Redirect::to('users');
    }

}
