<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImage extends Model
{
    use HasFactory;

    //このモデルで扱うテーブルを指定
    protected $table = "upload_image";

    //fillable で指定したカラムのみ扱えるようになる。
    //create() update() fill() などが使えるようになる。
    
    protected $fillable = ["file_name", "file_path", "file_id", "title", "file_id", "created_at"];
}
