<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\DB;
session_start();


class AdminController extends Controller
{
     public function AuthLogin(){
         $admin_id = Session::get('admin_id');
         if($admin_id){
            return Redirect::to('admin.dashboard');
         }
         else{
            return Redirect::to('/ad/login_admin')->send();
         }
     }
    public function index(){
        return view ('admin.login');
    }
    public function show(){
        $this->AuthLogin();
        return view ('admin.dashboard');
    }
    public function dashboard(Request $request){
        
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
      
       
        //$result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
         if($result){
            Session::put('admin_name',$result->admin_name); 
            Session::put('admin_id',$result->admin_id);
             return Redirect::to('/ad/dashboard');
         }else{
             Session::put('message','Tài khoản hoặc mật khẩu không đúng.Xin nhập lại');
             return Redirect::to('/ad/login_admin');
         }
       
    }
    public function logout(Request $request){       
        Session::put('admin_name',null); 
        Session::put('admin_id',null);   
        return Redirect::to('/ad/login_admin');     
    }
}
