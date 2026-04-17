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
        $data = User::paginate(5);
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

    public function deleteUser($id) {
        // $user = User::destroy($id);
        $user = User::find($id);
        $user->delete();
        return redirect('datatest');
    }

    public function getUser($id) {
        $user = User::find($id);

        return view('editUser', compact('user'));
    }

    public function updateUser(Request $req) {
        $user = User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();

        return redirect('datatest');
    }
}
