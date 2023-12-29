<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomepageController extends Controller
{
    public function home(){
        $products = Product::latest()->paginate();
        $categories = Category::latest()->paginate();
        return view('Users.home',compact('products','categories'));
    }
    public function products($id){
        $cat_id = decrypt($id);
        $products = Product::where('category_id','=',$cat_id)->latest()->paginate();
        $categories = Category::latest()->paginate();
        return view('Users.product',compact('products','categories'));
    }
}
