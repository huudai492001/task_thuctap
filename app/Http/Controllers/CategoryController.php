<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('livewire.Category.category-index',compact('categories'));
    }
    public function add(){
        $categories = Category::get();
        return view('livewire.category.category-add', compact('categories'));
    }
    public function store(Request $request){

        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'display' => $request->has('display'),


        );
//        dd($data);
        $create = Category::create($data);
        return redirect()->back()->with('success', 'Update category complete');



    }
}
