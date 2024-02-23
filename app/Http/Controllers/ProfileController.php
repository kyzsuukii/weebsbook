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

    public function update_profile(Request $req)
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
            return redirect(route("profile") . "?edit_profile=1");
        }

        $u->fullname = $req->fullname;
        $u->gender = $req->gender;
        $u->phone = $req->phone;
        $u->username = $req->username;
        $u->email = $req->email;

        $u->save();

        return redirect(route("profile"));
    }

    public function update_password(Request $req)
    {
        $u = Auth::user();

        if (!$u) {
            return redirect(route("login"));
        }

        $req->validate([
            "old_password" => "required|string|min:8",
            "new_password" => "required|string|min:8",
            "new_password2" => "required|string|min:8"
        ]);

        if (!password_verify($req->old_password, $u->password)) {
            add_error("Old password is incorrect");
            return redirect(route("profile") . "?change_password=1");
        }

        if ($req->new_password !== $req->new_password2) {
            add_error("Confirm new password does not match with new password");
            return redirect(route("profile") . "?change_password=1");
        }

        $u->password = password_hash($req->new_password, PASSWORD_BCRYPT);

        $u->save();

        return redirect(route("profile"));
    }
}
