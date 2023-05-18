<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Front;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;
use Illuminate\Support\Facades\DB;


/*php
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'create'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// Route::get('listUser',[CustomAuthController::class,'listUser']);
 Route::resource('/student', StudentController::class);
// Route::get('/add',[FrontendController::class,'cart'])->name('cart');
// Route::get('/single',[FrontendController::class,'single'])->name('single');
// Route::get('/', function () {
//     return \App\Models\Product::find(1)->productImages;   
// });
// Route::get('/',function(){
//     return view('Frontend.index');
// });



//Frontend
Route::get('/',[Front\HomeController::class,'index']);
Route::get('/shop/product/{id}',[Front\ShopController::class,'show']);
// Route::get('/shop/sp/{id?}',function(String $id) {  
//     $product = DB::table('product')
//      -> where('product.brand_id','=',$id)
//     ->join('product_image','product_image.product_id','=', 'product.id')->get();
//      return view('Frontend\ds',compact('product'));
// });
//backend
//Route::get('/admin',[AdminController::class,'index']);
 Route::get('/ad/login_admin',[AdminController::class,'index']);
 //trang chu 
 Route::get('/ad/dashboard',[AdminController::class,'show']); 
 Route::post('/ad/admin-dashboard',[AdminController::class,'dashboard']);
 Route::get('/ad/logout',[AdminController::class,'logout']);
 //category_product_them
 Route::get('/ad/add_category_product',[CategoryProduct::class,'add_category_product']);
 Route::get('/ad/all_category_product',[CategoryProduct::class,'all_category_product']);
 Route::post('/ad/saveDM',[CategoryProduct::class,'save_category_product']);
//category_all_tick_hien thi
 Route::get('/ad/unactive-category-product/{category_product_id}',[CategoryProduct::class,'unactive_category_product']);
 Route::get('/ad/active-category-product/{category_product_id}',[CategoryProduct::class,'active_category_product']); 
 //category_update
 Route::get('/ad/edit_category_product/{category_product_id}',[CategoryProduct::class,'edit_category_product']);
 //xoa danh muc
 Route::get('/ad/delete_category_product/{category_product_id}',[CategoryProduct::class,'delete_category_product']);
 //save danh muc
 Route::post('/ad/updateDM/{category_product_id}',[CategoryProduct::class,'update_category_product']);

  //Admin
  Route::get('/ad/all_admin',[AdminController::class,'all_admin']);
    //xoa admin
    Route::get('/ad/delete_admin/{id}',[AdminController::class,'delete_admin']);
    //Tim kiem admin
    Route::post('/ad/timkiemAdmin',[AdminController::class,'searchAdmin']);


  //brand_product_them
  Route::get('/ad/add_brand_product',[BrandProduct::class,'add_brand_product']);
  Route::get('/ad/all_brand_product',[BrandProduct::class,'all_brand_product']);
  Route::post('/ad/saveTH',[BrandProduct::class,'save_brand_product']);
 //brand_all_tick_hien thi
  Route::get('/ad/unactive-brand-product/{brand_product_id}',[BrandProduct::class,'unactive_brand_product']);
  Route::get('/ad/active-brand-product/{brand_product_id}',[BrandProduct::class,'active_brand_product']); 
  //brand_update
  Route::get('/ad/edit_brand_product/{brand_product_id}',[BrandProduct::class,'edit_brand_product']);
  //xoa thuong hieu
  Route::get('/ad/delete_brand_product/{brand_product_id}',[BrandProduct::class,'delete_brand_product']);
  //save thuong hieu
  Route::post('/ad/updateTH/{brand_product_id}',[BrandProduct::class,'update_brand_product']);
  //Tim kiem thuong hieu
  Route::post('/ad/timkiemBR',[BrandProduct::class,'searchBrand']);

//Product
  Route::get('/ad/add_product',[ProductController::class,'add_product']);
  Route::get('/ad/all_product',[ProductController::class,'all_product']);
  Route::post('/ad/saveSP',[ProductController::class,'save_product']);
 //product_all_tick_hien thi
  Route::get('/ad/unactive-product/{product_id}',[ProductController::class,'unactive_product']);
  Route::get('/ad/active-product/{product_id}',[ProductController::class,'active_product']); 
  //product_update
  Route::get('/ad/edit_product/{product_id}',[ProductController::class,'edit_product']);
  //xoa san pham
  Route::get('/ad/delete_product/{product_id}',[ProductController::class,'delete_product']);
  //save san pham
  Route::post('/ad/updateSP/{product_id}',[ProductController::class,'update_product']);
  Route::post('/ad/timkiemSP',[ProductController::class,'search']);



  // login user :
  // Route::get('/login',[AuthManager::class,'login'])->name('login');
  // Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');
  // Route::get('/registration',[AuthManager::class,'registration'])->name('registration');
  // Route::post('/registration',[AuthManager::class,'registrationPost'])->name('registration.post');
  // Route::get('/logout',[AuthManager::class,'logout'])->name('logout');

  //Route::get('/product/{brand_id}',[Front\HomeController::class,'viewDM']);

  // view san phẩm theo DM :
  Route::get('/category/{brand_id}',[Front\HomeController::class,'category'])->name('category');

  //User
  Route::get('/ad/all_user',[UserController::class,'all_user']);
    //xoa user
    Route::get('/ad/delete_user/{id}',[UserController::class,'delete_user']);
    //Tim kiem user
    Route::post('/ad/timkiemUser',[UserController::class,'searchUser']);

