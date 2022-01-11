<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\admin;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $guard='adminMiddle';
    protected $redirectto='admin/index';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function guard()
    {
        return auth()->guard('adminMiddle');
    }
    public function loginForm(){
        if(auth()->guard('adminMiddle')->user()){
            return back();
        }

        return view("admin.auth.login");
        }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->guard('adminMiddle')->attempt(['email'=>$request->email, 'password'=> $request->password])){
            $admin=auth()->guard('adminMiddle')->user();

            return redirect()->route('admin.index');
        } else {
            return back()->with('error','email aatau pw salah');
        }
    }
    public function logout(Request $request)
    {
        auth()->guard('adminMiddle')->logout();
        return redirect(url('admin/login'));
    }
}
