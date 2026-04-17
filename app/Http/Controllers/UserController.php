<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function testData() {
        // return DB::select('SELECT * FROM users');
        $data = User::all();
        return view('user', ['users' => $data]);
    }

    // public function index($username) {
    //     return view('user', ['username' => $username]);
    // }

    public function addNewUser(Request $req) {
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();

        return redirect('datatest');    
    }
}
