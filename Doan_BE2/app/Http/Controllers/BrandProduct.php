<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
session_start();

class BrandProduct extends Controller
{
    public function add_brand_product(){
        return view('admin.add_brand_product');
    }
    public function all_brand_product(){
       $all_brand_product = DB::table('brand')->get();
       $manager_brand_product = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
        return view('admin.index')->with('admin.all_brand_product',$manager_brand_product);
    }
    public function save_brand_product(Request $request){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_decs'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;       
        
         DB::table('brand')->insert($data);
         Session::put('message','Thêm Thương Hiệu Thành Công');
        return Redirect::to('/ad/all_brand_product');
       
    }
    public function unactive_brand_product($brand_product_id){
     DB::table('brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]); 
     Session::put('message','Không kích hoạt thương hiệu sản phẩm thành công');
     return Redirect::to('/ad/all_brand_product');
    }
    public function active_brand_product($brand_product_id){
        DB::table('brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]); 
        Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
        return Redirect::to('/ad/all_brand_product');
       
    }
    public function edit_brand_product($brand_product_id){
        $edit_brand_product = DB::table('brand')->where('brand_id',$brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
        return view('admin.index')->with('admin.edit_brand_product',$manager_brand_product);
    } 
    public function update_brand_product(Request $request,$brand_product_id){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_decs'] = $request->category_product_desc;
        DB::table('brand')->where('brand_id',$brand_product_id)->update($data);
        Session::put('message','Update Thành Công');
        return Redirect::to('/ad/all_brand_product');
    }
    public function delete_brand_product($brand_product_id){
        DB::table('brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Xóa Thương Hiệu Thành Công');
        return Redirect::to('/ad/all_brand_product');
    } 
}
