<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\FileViewRequest;

/**
 * Class DashboardController.
 */
class FileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(FileViewRequest $request)
    {
        return view('frontend.user.file');
    }

    public function download($file)
    {
      
        $url = Storage::url($file);
        $download=DB::table('files')->get();
        return Storage::download($url);
        // view("files.download", compact('$download'));
    }
    
    public function store(Request $request)
     {
  
        $files = Files::all();
        if($request->hasFile('file') && $request->file('file')->isValid()){
            //
            //storing the input field with the name "file" in $file.
            $file = $request->file('file');
            //using laravel method to get filename from the inputfield, in case we add a feature to allow the user to provide the name
            $originalName = $file->getClientOriginalName();

            //storing file in public/upload saving as $originalName
            $fileLoc =  $request->file->storeAs('public/upload', $originalName);
            //getting mimetype from the file stored with the class storage using method mimetype of the file above
            $mimeType = Storage::mimeType($fileLoc);

            //creating a new file entry
            $entry = new Files();
            //storing mimetype of file
            $entry->mime = $mimeType;
            //storing filename of file
            $entry->original_filename =  $originalName;
            //storing name as ogname, but may change to allow users to name file
            $entry->name = $originalName;
            //saving and making entry to the DB
            $entry->save();

        }else{
            //if statement checks if file is a file and is valid, otherwise no file to upload
            return "Failed to upload";

        }
        return back(); compact('files');
    }
}
