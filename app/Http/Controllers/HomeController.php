<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function index()
    {
        $u = Auth::user();

        if (!$u) {
            return redirect(route("login"));
        }

        $p = Post::all();

        return view("home", compact(["u", "p"]));
    }
}
