<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;
use Illuminate\Support\Facades\Storage;

class ListController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Book::all()
            ->where('user_id', '=', Auth::id());
        $param = ['user' => $user,
            'items' => $items,
            'keyword' => ''
            ];
        return view('list.index', $param);

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $user = Auth::user();
        $items = Book::all()
            ->where('user_id', '=', Auth::id());
        if ($keyword)
        {
            $items = Book::categorySearch($keyword)
                ->where('user_id', '=', Auth::id())
                ->get();
        }

        $param = ['keyword' => $keyword,
            'user' => $user,
            'items' => $items];
        return view('list.index', $param);
    }


}
