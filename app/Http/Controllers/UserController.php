<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index($username) {
        return view('user', ['username' => $username]);
    }
}
