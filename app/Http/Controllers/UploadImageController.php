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
        // var_dump($upload_images);
        // var_dump($request->title);

		foreach($upload_images as $upload_image){
			$path = $upload_image->store('uploads',"public");
			$count_image ++ ;
			UploadImage::create([
				"file_name" => $upload_image->getClientOriginalName(),
				"file_path" => $path,
				"file_id" => $count_image,
                "title" => $request->title,
                "image_title" =>$request->image_title

			]);
		}
		
		return redirect("/list");
	}

    function contentview($id) {
        $createtimes = UploadImage::select("created_at")->where("id", $id)->get();
        // var_dump($createtimes);

        foreach($createtimes as $createtime)
            $time = $createtime->created_at;

        $id_image = UploadImage::where("created_at",$time )->get();
        // var_dump($id_image);
        return view('contents',['contents' => $id_image]);
    }

    function index() {
        $uploads = UploadImage::orderBy("id", "desc")->where("file_id", 1) ->get();

        return view('image_list',['images' => $uploads]);
    }

    function my(){
        return redirect('https://alu.jp/user/h1gNeWiSHYUAvj3JPYM8J4QDDA52/shelf/ULt2RM7nfGRvmSlIWRg4', 302);
    }

}