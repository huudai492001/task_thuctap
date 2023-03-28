<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
//        $products = ProductController::get();
        $products = Product::get();
       return view('livewire.Product.product-index', compact('products'));
    }
    public function add(){
        $products = Product::get();
        $categories = Category::get();
        return view('livewire.Product.product-add', compact('categories', 'products'));
    }
    public function store(Request $request){
        $data = array(
          'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $request->image,
            'display' => $request->has('display'),
        );
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = date('dmY') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/upload"), $fileName);
            $data['image'] = $fileName;
        }
//        dd($data);
        $create = Product::create($data);
        return redirect()->back()->with('success', 'Add product complete');
    }

}
