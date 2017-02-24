<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::whereHas('books',function($query){
            $query->where('status','public');
        })->get();
        return view('categories',compact('categories'));
    }
}
