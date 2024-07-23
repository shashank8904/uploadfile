<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpmController extends Controller
{
    function upload()
    {
        return view("upload");
    }

    function uploadPost(Request $request)
    {
        $file = $request->file("file");
        
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $file->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $file->getMimeType();
        echo '<br>';

        $destinationPath = 'uploads';

        if ($file->move($destinationPath, $file->getClientOriginalName())) {
            echo 'File uploaded successfully!';
        } else {
            echo 'File upload NOT successful!';
        }
    }
}
