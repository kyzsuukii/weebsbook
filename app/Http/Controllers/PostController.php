<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index()
    {
        $u = Auth::user();

        if (!$u) {
            return redirect(route("login"));
        }

        return view("posts.new");
    }

    public function create(Request $req)
    {

        $u = Auth::user();

        $req->validate([
            "caption" => "string|nullable",
            "media.*" => "file|mimes:png,jpg,jpeg,mp4",
        ]);

        $p = Post::create([
            "user_id" => $u->id,
            "content" => $req->caption,
        ]);

        if ($req->hasFile("media")) {
            $media = $req->file("media");

            foreach ($media as $item) {

                $type = strtoupper(substr($item->getMimeType(), 0, 5));

                if (!$item->isValid()) {
                    add_error("Invalid Media");
                    return redirect(route("home"));
                };

                $file_ext = $item->extension();
                $hash = hash_file("sha256", $item->getPathName(), true);
                $filename = bin2hex($hash) . "." . $file_ext;
                $user_uploads = public_path("assets/img/user_uploads/" . $u->username);

                if (!is_dir($user_uploads)) {
                    if (!mkdir($user_uploads)) {
                        add_error("Something wrong!");
                        return redirect(route("home"));
                    }
                }

                if (!move_uploaded_file($item->getPathname(), $user_uploads . "/" . $filename)) {
                    add_error("Failed to move upload file");
                    return redirect(route("home"));
                }

                Media::create([
                    "post_id" => $p->id,
                    "filename" => $hash,
                    "file_ext" => $file_ext,
                    "type" => $type,
                ]);
            }
        }
        return redirect(route("home"))->with(["success" => true, "message" => "
A post has been created"]);
    }
}
