<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct(){
        $products = Product::paginate(30);
        return view('product.list')->with(compact('products'));
    }

    public function createProductView(){
        return view('product.create');
    }

    public function createProduct(Request $request){
        $data = $request->all();
        $data['price'] = str_replace(',', '.', $data['price']);
        Product::create($data);
        return redirect()->route('product_list');
    }

    public function enableProduct(Request $request){
        $product = Product::find($request['product_id']);
        $product->enable = 1;
        $product->save();
        return back()->with('success', 'Empresa ativada com sucesso!');
    } 

    public function disableProduct(Request $request){
        $product = Product::find($request['product_id']);
        $product->enable = 0;
        $product->save();
        return back()->with('success', 'Empresa desativada com sucesso!');
    }

    public function editProduct(Request $request){
        $product = Product::find($request['product_id']);
        return view('product.edit')->with(compact('product'));
    }

    public function updateProduct(Request $request){
        $product = Product::find($request['product_id']);
        $product->name = $request['name'];
        $product->voucher = $request['voucher'];
        $product->price = str_replace(',', '.', $request['price']);
        $product->installment = $request['installment'];
        $product->installment_free = $request['installment_free'];
        $product->limit = $request['limit'];
        
        $product->save();
        return redirect()->route('product_list');
    }
}
