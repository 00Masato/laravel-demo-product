<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Http\Requests\CreateRequest;
use Illuminate\Support\Facades\Storage;


class CreateController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $param = [
            'user' => $user
        ];
        return view('create.index', $param);
    }

    public function create(CreateRequest $request)
    {

        $book = new Book;
        $book->book = $request->book;
        $book->category = $request->category;
        $book->pageNumber = $request->pageNumber;
        $book->icon = $request->icon;
        $book->user_id = Auth::id();

        $image = $request->image;
        $imageContents = file_get_contents($image->getRealPath());
        $disk = Storage::disk('s3');
        $disk->put($request->book . '.jpg', $imageContents, 'public');

        $book->image = basename($disk->put($request->book . '.jpg', $imageContents, 'public'));



        //$book->image = basename($request->image->storeAs('public/book_images', $request->book . '.jpg'));

        $book->review = $request->review;
        $book->save();

        return redirect('/list');
    }
}


