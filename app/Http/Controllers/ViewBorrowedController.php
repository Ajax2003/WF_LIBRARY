<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ViewBorrowedController extends Controller
{
    public function viewBorrowed(){
        $books = DB::table('books')
            ->where('is_borrowed',1)
            ->get();
        return view('borrowed', compact('books'));
    }
}
