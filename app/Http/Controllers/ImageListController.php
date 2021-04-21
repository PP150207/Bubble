<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UploadImage;

class ImageListController extends Controller
{
    function index() {
        $uploads = UploadImage::orderBy("id", "desc")->where("file_id", 1) ->get();

        return view('image_list',['images' => $uploads]);
    }

    function home() {
        $uploadslist = UploadImage::orderBy("id", "desc")->where("file_id", 1) ->get();

        return view('home',['images' => $uploadslist]);
    }
}
