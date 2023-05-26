<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class CartController extends Controller
{
        public function shoppingCart(Request $request){
            $cate_product = DB::table('product_categories')->orderby('category_id','desc')->get();
            $brand_product = DB::table('brand')->orderby('brand_id','desc')->get();

            $productID = $request->productid_hidden;

            $data = DB::table('product')->where('product_id',$productID)->get();
            
            return view('Frontend.shop.cart')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
        }
}
