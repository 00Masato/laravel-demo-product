<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use Illuminate\Support\Facades\DB;


class DeleteController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = Auth::user();
        $id = $request->id;
        $item = DB::table('books')->where('id', $id)->first();
        $param = [
            'user' => $user,
            'item' => $item,
        ];
        return view('delete.index', $param);
    }

    public function delete(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/list');
    }

}
