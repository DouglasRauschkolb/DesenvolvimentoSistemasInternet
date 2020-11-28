<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Http\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectTo = '/jogos';

    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
}

