<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddBookController extends Controller
{
    public function viewAdd(){
        return view ('add');
    }
    public function addBook(Request $request){


        $inserted = DB::table('books')->insert([
            'book_name' => $request->input('bname'), // Assuming the application date should be set to the current date and time
            'category' => $request->input('cate'),
            'published_date' => $request->input('pdate'),
            'is_borrowed' => 0,
            'updated_at' => now(),
        ]);
       /* naka comment out to ah wala pa tayong homepage para sa admin if ($inserted) {
            return redirect('/homepage');->route('home.view')->with('success', 'Adoption application submitted successfully!');
        } else {
            return redirect('/register');
        }*/
    }
}
