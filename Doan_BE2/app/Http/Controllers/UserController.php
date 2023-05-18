<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class UserController extends Controller
{
    public function all_user(){
        $all_user = DB::table('users')->get();
        $manager_user = view('admin.all_user')->with('all_user',$all_user);
        return view('admin.index')->with('admin.all_user',$manager_user);
    }
    public function delete_user($id){
        DB::table('users')->where('id',$id)->delete();
        Session::put('message','Xóa Người Dùng Thành Công');
        return Redirect::to('/ad/all_user');
    } 
}
