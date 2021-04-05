<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function add_pro(){
        return view('add_pro');
    }
    public function save_pro(){
        request()->validate(['image'=>'required|max:2045|mimes:jpg,png,jpeg']);
        $file=(request()->file('image'));
        $file_name=$file->getClientOriginalName();
        $file_path='image/';
        $file->move(public_path($file_path),$file_name);
        Product::create([
            'image'=>$file_name,
            'name'=>  request('name'),
            'price'=>  request('price'),
            'old_price'=>  request('old_price'),
            'nop'=>  request('nop')
        ]);
        return back()->with('success','ok');
    }
    public function shop(){
         $product=product::all();
         return view('shop',compact('product'));
	}
}
