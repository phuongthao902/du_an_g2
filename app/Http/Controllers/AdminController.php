<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Session;
session_start();
class AdminController extends Controller
{
    public function AuthLogin(){
        $id = Auth::id();
        if($id){
           return Redirect::to('dashboard');
        }else{
           return Redirect::to('admin')->send();
        }
    }

    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
         //$this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
         $email = $request->email;
        $password = $request->password;

        $result = DB::table('users')->where('email',$email)->where('password',$password)->first();
        if($result){
            Session::put('name',$result->name);
            Session::put('id',$result->id);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message','Wrong email or password please re-enter');
            return Redirect::to('/admin');
    }
}
    public function logout(){
    //     $this->AuthLogin();
        Session::put('name',null);
        Session::put('id',null);
        return Redirect::to('/admin');
    }
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
'email'=>'required',
                'password' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->back();
            }


            $newAccount = new Users();
            $newAccount->name = $request->name;
            $newAccount->email = $request->email;
            $newAccount->password = $request->password;

            $newAccount->save();


            return redirect()->intended('/admin');
        }

    }
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [

                'name' => 'required',
                'password' => 'required',
                'email' => 'required',
            ]);

            if ($validator->fails()) {

                return redirect()->back()

                    ->withErrors($validator)

                    ->withInput();
            }


            $newAccount = new \App\Models\User();

            $newAccount->name = $request->name;
            $newAccount->password = $request->password;
            $newAccount->email = $request->email;


            $newAccount->save();

            return redirect()->intended('/admin')

            ->with('success', 'Congratulations on your successful account registration!!');

        }
    }
}
