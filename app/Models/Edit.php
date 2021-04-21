<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    use HasFactory;

    protected $table = "upload_image";

    protected $fillable = ["created_at", "title", "image_title"];
}
