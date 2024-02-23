<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $u = Auth::user();

        if (!$u) {
            return redirect(route("login"));
        }

        return view("profile", compact("u"));
    }

    public function update(Request $req)
    {
        $u = Auth::user();

        if (!$u) {
            return redirect(route("login"));
        }

        $req->validate([
            "fullname"  => "required|string|min:1|max:255|regex:/^[a-zA-Z ]+$/",
            "gender"    => "required|string|in:M,F",
            "phone"     => "required|regex:/^\+?[0-9]{9,15}$/|unique:users,phone,{$u->id}",
            "username"  => "required|string|min:4|max:255|unique:users,username,{$u->id}|regex:/^[a-zA-Z0-9\.\_]+$/",
            "email"     => "required|email|max:255|unique:users,email,{$u->id}",
        ]);

        if (!password_verify($req->password, $u->password)) {
            add_error("Password is incorrect");
            return redirect(route("profile") . "?edit=1");
        }

        $u->fullname = $req->fullname;
        $u->gender = $req->gender;
        $u->phone = $req->phone;
        $u->username = $req->username;
        $u->email = $req->email;

        $u->save();

        return redirect(route("profile"));

    }
}
