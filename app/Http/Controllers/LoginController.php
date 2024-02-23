<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view("login");
    }

    public function action(Request $req)
    {
        $req->validate([
            "username" => "required|string",
            "password" => "required|string|min:8"
        ]);

        if (filter_var($req->username, FILTER_VALIDATE_EMAIL)) {
            $u = User::where("email", $req->username);
        } else {
            $u = User::where("username", $req->username);
        }

        $u = $u->first();

        if (!$u || !password_verify($req->password, $u->password)) {
            add_error("Login error");
            return redirect(route("login"));
        }

        Auth::login($u);
    }
}
