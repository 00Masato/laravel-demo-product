<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class DetailController extends Controller
{
    //

    public function show($filename)
    {
        $disk = Storage::disk('s3');
        try{
            $contents = $disk->get($filename);
            $mimeType = $disk->mimeType($filename);
        } catch (\Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }

        return response($contents)->header('Content-Type', $mimeType);
    }

    public function index(Request $request)
    {
        $user = Auth::user();
        $id = $request->id;
        $item = DB::table('books')->where('id', $id)->first();

        $disk = Storage::disk('s3');
        $image = $disk->url($item->book . '.jpg');


        $param = [
            'user' => $user,
            'item' => $item,
            'image' => $image
        ];
        return view('detail.index', $param);
    }
}
