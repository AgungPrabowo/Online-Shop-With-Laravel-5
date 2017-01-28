<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

class AdminController extends Controller
{
    public function getSignin() {
      return view('admins.signin');
    }

    public function postSignin(Request $request) {

    }

    public function getSignup() {
      return view('admins.signup');
    }

    public function postSignup(Request $request) {
      // validasi data
      $this->validate($request, [
        'email' => 'email|required',
        'password' => 'required|min:6'
      ]);

      // input data
      $admin = Admin::create([
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password'))
      ]);

      // save data
      $admin->save();

      return view('admins.signin');
    }
}
