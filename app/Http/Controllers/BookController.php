<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('delete',compact('books'));
    }

    public function destroy(Request $request){
        $ids = $request->get('ids');
        if(count($ids)){
            $book = Book::destroy($ids);
        }
        return redirect()->back();
    }



    /** sofDeletes() */

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
    }

    public function restore($id)
    {
        $book = Book::withTrasded()->find($id);
        $book->restore();
    }

}
