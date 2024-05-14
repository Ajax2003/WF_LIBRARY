<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AvailableBookController extends Controller
{
    public function viewAvailable(){
        $books = DB::table('books')
            ->where('is_borrowed',0 )
            ->get();
        return view('available', compact('books'));
    }
}
