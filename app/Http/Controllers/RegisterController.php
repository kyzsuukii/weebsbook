<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    //
    public function index()
    {
        $u = Auth::user();

        if ($u) {
            return redirect(route("home"));
        }
        return view("register");
    }

    public function action(Request $req)
    {
        $req->validate([
            "fullname"  => "required|string|min:1|max:255|regex:/^[a-zA-Z ]+$/",
            "gender"    => "required|string|in:M,F",
            "phone"     => "required|regex:/^\+?[0-9]{9,15}$/|unique:users,phone",
            "username"  => "required|string|min:4|max:255|unique:users,username|regex:/^[a-zA-Z0-9\.\_]+$/",
            "email"     => "required|email|max:255|unique:users,email",
            "password"  => "required|string|min:8|max:512",
            "password2" => "required|string|min:8|max:512"

        ]);

        if ($req->password !== $req->password2) {
            return redirect(route("register"))->withErrors(["Confirm password does not match with password"]);
        }

        User::create([
            "fullname" => $req->fullname,
            "gender" => $req->gender,
            "phone" => $req->phone,
            "username" => $req->username,
            "email" => $req->email,
            "password" => password_hash($req->password, PASSWORD_BCRYPT)
        ]);


        return redirect(route("login"));
    }
}
