<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UploadImage;
class UploadImageController extends Controller
{
   function show(){
		return view("upload_form");
	}

	function upload(Request $request){
		
		$upload_images = $request->file('image');
		$count_image = 0;
        var_dump($upload_images);
        var_dump($request->title);

		foreach($upload_images as $upload_image){
			$path = $upload_image->store('uploads',"public");
			$count_image ++ ;
			UploadImage::create([
				"file_name" => $upload_image->getClientOriginalName(),
				"file_path" => $path,
				"file_id" => $count_image,
                "title" => $request->title
			]);
		}
		
		return redirect("/list");
	}

    function contentview($id) {
        $id_image = UploadImage::where("id",$id )->get();
        return view('contents',['contents' => $id_image]);
    }

    function index() {
        $uploads = UploadImage::orderBy("id", "desc")->where("file_id", 1) ->get();

        return view('image_list',['images' => $uploads]);
    }

}