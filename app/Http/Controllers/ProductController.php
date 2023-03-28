<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = ProductController::get();
        $categorie = Category::get();
       return view('livewire.Product.product-index', compact('products', 'categorie'));
    }
    public function add(){

    }
}
