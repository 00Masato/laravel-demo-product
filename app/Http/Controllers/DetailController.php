<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;


class DetailController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $param = [
            'user' => $user
        ];
        return view('detail.index', $param);
    }
}
