<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    }
}
