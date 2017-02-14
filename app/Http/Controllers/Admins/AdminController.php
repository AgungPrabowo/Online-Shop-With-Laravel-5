<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
<<<<<<< HEAD
use Auth;
=======
>>>>>>> master
use Sentinel;

class AdminController extends Controller
{
    public function getSignin() {
      return view('admins.signin');
    }

    public function postSignin(Request $request) {
      // validasi data
    //   $this->validate($request, [
    //     'email' => 'email|required',
    //     'password' => 'required'
    //   ]);

    //   if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
    //     return redirect()->route('AdminGetHome');
    //   }
    //   // menampilkan notif kesalahan
    //   $request->session()->flash('status','Email atau Password Salah');
    //   return redirect()->back()->withInput();
    // }

    // public function getSignup() {
    //   return view('admins.signup');
      Sentinel::authenticate($request->all());

      return Sentinel::check();
      // dd($request->all());
    }

    public function getSignup() {
      return view('admins.signup');
    }

    public function postSignup(Request $request) {
      // // validasi data
      // $this->validate($request, [
      //   'username' => 'required|min:6',
      //   'email' => 'email|required',
      //   'password' => 'required|min:6'
      // ]);

      // // input data
      // $admin = User::create([
      //   'name' => $request->input('username'),
      //   'email' => $request->input('email'),
      //   'password' => bcrypt($request->input('password'))
      // ]);

      // // save data
      // $admin->save();

      // return redirect()->route('AdminGetSignin');
      $user = Sentinel::registerAndActivate($request->all());
      return Sentinel::check();
    }

    public function getLogout() {
      Sentinel::logout();
      return redirect()->route('AdminGetSignin');
    }

    public function getHome() {
      return view('admins.home');
    }
}
