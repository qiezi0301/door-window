<?php

namespace App\Http\Controllers;

use App\NewType;
use App\Product;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index() {

        $input = Input::except('_token');
        $keywords=$input['keywords'];

        $products = Product:: orderBy('id','desc')->where('name','like','%'.$keywords.'%')->paginate(10);

//        dd($keywords);

        $newTypes = NewType::all();
        $types = Type::all();
        return view('product.index',compact('products', 'newTypes', 'types'));
    }
}
