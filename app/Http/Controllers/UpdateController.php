<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\DB;



class UpdateController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = Auth::user();
        $id = $request->id;
        $item = DB::table('books')->where('id', $id)->first();
        $param = [
            'user' => $user,
            'item' => $item
        ];

        return view('update.index', $param);
    }

    public function update(UpdateRequest $request)
    {
        $updateBook = Book::find($request->id);
        $updateBook->book = $request->book;
        $updateBook->category = $request->category;
        $updateBook->pageNumber = $request->pageNumber;
        $updateBook->icon = $request->icon;
        $updateBook->user_id = Auth::id();
        $updateBook->image = basename($request->image->storeAs('public/book_images', $request->book . '.jpg'));
        $updateBook->review = $request->review;
        $updateBook->save();

        return redirect('/list');

    }
}
