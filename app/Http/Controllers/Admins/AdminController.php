<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function getSignin() {
      return view('admins.signin');
    }

    public function postSignin(Request $request) {
      // validasi data
      $this->validate($request, [
        'email' => 'email|required',
        'password' => 'required'
      ]);

      if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
        return view('admins.home');
      }
      // menampilkan notif kesalahan
      $request->session()->flash('status','Email atau Password Salah');
      return redirect()->back()->withInput();
    }

    public function getSignup() {
      return view('admins.signup');
    }

    public function postSignup(Request $request) {
      // validasi data
      $this->validate($request, [
        'username' => 'required|min:6',
        'email' => 'email|required',
        'password' => 'required|min:6'
      ]);

      // input data
      $admin = User::create([
        'name' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password'))
      ]);

      // save data
      $admin->save();

      return redirect()->route('AdminGetSignin');
    }

    public function getLogout() {
      Auth::logout();
      return redirect()->back();
    }

    public function getHome() {
      return view('admins.home');
    }
}
