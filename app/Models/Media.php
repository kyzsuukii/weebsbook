<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        "post_id",
        "filename",
        "file_ext",
        "type"
    ];

    public function getFilename()
    {
        return bin2hex($this->filename) . "." . $this->file_ext;
    }
}
