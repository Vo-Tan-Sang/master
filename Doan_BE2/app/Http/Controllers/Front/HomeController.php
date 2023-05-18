<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        //view sp theo danh muc
        $category = DB::table('product_categories')->where('category_status',0)->orderBy('category_name','ASC')->get();
        //end
        $all_product = DB::table('product')->where('product_status','0')->orderby('category_id','desc')->limit(12)->get();

        return view('Frontend.index')->with('all_product',$all_product)->with('category',$category);
    }
    public function category($brand_id){
        $category = DB::table('product')->where('brand_id',$brand_id)->get();
        $category1 = DB::table('product_categories')->where('category_status',0)->orderBy('category_name','ASC')->get();
        $product = DB::table('product')->where('product_status','0')->orderby('brand_id','desc')->get();
        return view('Frontend.category')->with('category',$category)->with('category1',$category1);
    }
}
