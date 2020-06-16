<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImageController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image-view');
    }


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);

//        return response()->json(['uploaded' => '/upload/'.$imageName]);
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
//    public function imageUploadPost()
//
//    {
//        request()->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//
//        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
//
//        request()->image->move(public_path('images'), $imageName);
//
//        return back()
//            ->with('success', 'You have successfully upload image.')
//            ->with('image', $imageName);
//    }
}