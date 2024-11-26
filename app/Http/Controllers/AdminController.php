<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    public function index() {
        return view('admin.admin_login');
    }

    public function showdashboard() {
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request) {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        $credentials = $request->only('Email', 'Password');

        if (Auth::attempt(['email' => $credentials['Email'], 'password' => $credentials['Password']])) {
            $admin = Auth::user();
            Session::put('admin_name', $admin->name);
            Session::put('admin_id', $admin->id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Mật khẩu hoặc email không đúng, nhập lại nhé');
            return Redirect::to('/admin');
        }
    }

    public function login(Request $request) {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        $credentials = $request->only('Email', 'Password');

        if (Auth::attempt(['email' => $credentials['Email'], 'password' => $credentials['Password']])) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'Email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout() {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }

    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
}
