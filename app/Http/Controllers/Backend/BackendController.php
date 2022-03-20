<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index');
    }

    public function upload(Request $request) {
        foreach ($request->file as $photo) {
            $filename = str_replace("public/", "", $photo->store('public/files'));;
         }
        
        return response()->json(['file_name' => "$filename"]);
    }
}
