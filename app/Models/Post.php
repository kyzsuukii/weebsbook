<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "content"
    ];

    public function getMedia()
    {
        return Media::where("post_id", $this->id)->get();
    }
}
