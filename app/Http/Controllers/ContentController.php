<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Edit;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    function delete(Request $request) {
        
        $delete_create_time  = $request->id;
        

        $delete = new Edit;
        var_dump($delete_create_time);
        $values = $delete::where('created_at', $delete_create_time)->get();
        $cnt = count($values, COUNT_RECURSIVE);

        if($cnt <= 1) {
            $value = $delete::where('created_at', $delete_create_time)->first();
            $value->delete();
            $delete_file_path = $value->file_path;
            Storage::delete("public/$delete_file_path");
        }elseif($cnt>1){
            
            $values = $delete::where('created_at', $delete_create_time)->get();
            foreach($values as $value) {
                $delete_file_path = $value->file_path;
                var_dump($delete_file_path);
                Storage::delete("public/$delete_file_path");
                $value->delete();
            }
        }

        return redirect('/home');

    }
}
