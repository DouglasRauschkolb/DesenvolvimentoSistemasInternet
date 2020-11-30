<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectTo = '/posts';

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
}

