<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

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

      if(Sentinel::authenticate($request->all()))
        return redirect()->route('AdminGetHome');

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
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'email|required',
        'password' => 'required|min:6'
      ]);

      // input data and activate
      $user = Sentinel::registerAndActivate($request->all());

      return redirect()->route('AdminGetSignin');
    }

    public function getLogout() {
      Sentinel::logout();
      return redirect('/');
    }

    public function getHome() {
      return view('admins.home');
    }
}
