<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Edit;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    function edit(Request $request) {
        $edits = Edit::where("created_at", $request->created_at) ->get();
    
        return view('edit_image',['images' => $edits]);
    
    }

    function edit_contents(Request $request){
        Edit::where('created_at', $request->created_at)->update(['subtitle'=> $request->title]);
        Edit::where('created_at', $request->created_at)->update(['title'=> $request->image_title]);

        $return_id =  Edit::where('created_at', $request->created_at)->first();
        // var_dump($return_id->id);
        return redirect(route('contents_view', ['id'=> $return_id->id,]));
        return redirect(route('user.index', ['user_id' => 1,]));
    }


    function delete(Request $request) {
        
        $delete_create_time  = $request->id;
        

        $delete = new Edit;
        // var_dump($delete_create_time);
        $values = $delete::where('created_at', $delete_create_time)->get();
        $cnt = count($values, COUNT_RECURSIVE);

        if($cnt <= 1) {
            $value = $delete::where('created_at', $delete_create_time)->first();
            $value->delete();
        }elseif($cnt>1){
            
            $values = $delete::where('created_at', $delete_create_time)->get();
            foreach($values as $value) {
                $value->delete();
            }
        }

        return redirect('/');

    }
}
