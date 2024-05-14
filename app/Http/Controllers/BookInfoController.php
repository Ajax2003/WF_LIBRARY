<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookInfoController extends Controller
{
    public function clickableCard($id)
    {
        
        $books = DB::table('books')->where('id', $id)->first();

        if (!$books) {
            // If the pet doesn't exist, return a 404 Not Found response
            abort(404);
        }
        return view('clickable', ['books' => $books]);
    }
}
