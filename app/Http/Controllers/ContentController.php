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
        $value = $delete::where('created_at', $delete_create_time)->first();

        DBからデータを削除
        $value->delete();

        // 作られた日にちに該当するfaile_pathを読み込んでstorageフォルダから画像を削除
        $delete_file_path = $value->file_path;
        var_dump($delete_file_path);

        Storage::delete("public/$delete_file_path");

        return redirect('/home');
    }
}
