<?php

namespace App\Http\Controllers;

use App\NewType;
use App\Product;
use App\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tid = request('tid');
        if($tid){
            $products = Product:: orderBy('id','desc')->where('tid',$tid)->paginate(10);
        }else{
            $products = Product:: orderBy('id','desc')->paginate(10);
        }

        $newTypes = NewType::all();
        $types = Type::all();
        return view('product.index',compact('products', 'newTypes', 'types'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $id = request('id');
        $newTypes = NewType::all();
        $types = Type::all();
        $product = Product::find($id);

//        dd($product->pictures);

        // 获取 “上一篇” 的 ID
        $prePID = Product::where('id', '<', $id)->max('id');
        $pre_product = Product::find($prePID);

        // 同理，获取 “下一篇” 的 ID
        $nextPId = Product::where('id', '>', $id)->min('id');
        $next_product = Product::find($nextPId);
        return view('product.detail', compact('product', 'newTypes','types', 'pre_product','next_product'));
    }
}
