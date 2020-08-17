<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Category;

class ProductsController extends Controller
{
    public function home(){
      $categories = Category::all();
      return view('create',compact('categories'));
    }

    public function store(Request $request){
      $request -> validate([
        'product_name' => 'required|min:3|max:10',
        'price' => 'required',
        'stoct' => 'required'
      ]);
      product::create($request->all());
      return redirect('/products');
    }

    public function view_products(){
      $products = Product::all();
      return view('products',compact('products'));
    }

    public function edit($id){
      $products = Product::where('id', $id)->first();
      return view('edit',compact('products'));
    }

    public function update(Request $request, $id){
      product::findOrFail($id)->update($request->all());
      return redirect('/products');
    }

    public function delete($id){
      product::destroy($id);
      return back();
    }

    public function view_category(){
      $category = Category::all();
      return view('view_category',compact('category'));
    }

    public function create_category(){
      return view('create_category');
    }

    public function storeCategory(Request $request){
      $request->validate([
        'name' => 'required'
      ]);

      Category::create($request->all());
      return redirect('/view_category');
    }

    public function deleteCategory($id){
      Category::destroy($id);
      return back();
    }

    public function editCategory($id){
      $category = Category::where('id', $id)->first();
      return view('editCategory', compact('category'));
    }

    public function updateCategory(Request $request, $id){
      Category::where('id', $id)->update([
        'name' => $request->name
      ]);
      return redirect('/view_category');
    }

}
