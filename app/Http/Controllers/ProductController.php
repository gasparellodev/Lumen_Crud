<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(){
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id){
        $product = Product::find($id);
        return response()->json($product);
    }

    public function create(Request $request){

        $product = new Product();

         $product -> name = $request -> name;
         $product -> category = $request -> category;
         $product -> price = $request -> price;
         

         $product ->save();

         return response()->json("Product Sucessfully Created!🧑‍💻");
    }

    //
}
