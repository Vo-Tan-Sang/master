<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Cart;
session_start();

class CartController extends Controller
{
        public function shoppingCart(Request $request){
            $productId = $request->productid_hidden;
            $quantity = $request->qty;
            $product_data = DB::table('product')->where('product_id',$productId)->first();
             //print_r($product);
            $cate_product = DB::table('product_categories')->orderby('category_id','desc')->get();
            $brand_product = DB::table('brand')->orderby('brand_id','desc')->get();
                $data['id'] =$product_data ->product_id;
                $data['qty'] =$quantity;
                $data['name'] = $product_data->product_name;
                $data['price'] = $product_data->product_price;
                $data['options']['image'] = $product_data->product_image;
                Cart::add($data);
             Redirect::to('/showcart');
        }
        public function showcart()
        {
                $cate_product = DB::table('product_categories')->orderby('category_id','desc')->get();
                $brand_product = DB::table('brand')->orderby('brand_id','desc')->get();
                return view('Frontend.shop.cart')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
        }
}
