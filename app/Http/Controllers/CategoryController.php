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
        return redirect()->back()->with('success', 'Add category complete');
    }
    public function edit(Request $request){
        $id = $request->id;
        $category = Category::find($id);
        $categories = Category::where('category_id')->get();
        return view('livewire.category.category-edit',compact('categories','category'));
    }
    public function update(Request $request){
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id,
            'display' => $request->has('display'),
        );
//        dd($data);
        $category = Category::find($id);
        $category -> update($data);
        return redirect()->back()->with('success', 'Update category complete');
    }
    public function delete(Request $request){
        $id = $request->id;
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->back()->with('success', 'Delete category complete');

    }
}
