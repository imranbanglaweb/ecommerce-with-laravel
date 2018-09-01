<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Redirect;
use Illuminate\Http\Request;

class FrontContrtoller extends Controller
{
  // public function index(){
  //   return view('Frontend.home.index');
  // }
  public function login(){
  	$user_login =  view('Frontend.frontendlogin.login');
    $menu          =  DB::table('tbl_category')->take(5)->get();
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu);
    $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);
   
        return  view('Frontend.home')
            ->with('header_menu',$header_menu)
            ->with('footer_bottom',$footer_bottom)
            ->with('user_login',$user_login);
  }

  
 public function Homeview(){
  
$categories = DB::table('tbl_category')->get();
    $menu          =  DB::table('tbl_category')->take(4)->get();
    $categoryView = view('Frontend.Category.category')
                    ->with('categories',$categories);

    $hslider = DB::table('tbl_slider')->get();
  $slider  = view('Frontend.includes.banner')
                ->with('hslider',$hslider);

  

  $coupons = view('Frontend.includes.coupons');
    $we_offer = view('Frontend.includes.we_offer');
  $category = view('Frontend.Category.category');
  $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);
 $id = DB::table('tbl_category')->pluck('id');
 $brandId = DB::table('tbl_menufecture')->pluck('id');
    // return dd($brandId);
 $catId = DB::table('tbl_category')->pluck('id');
 // $tbl_product_image = DB::table('tbl_product_image')->pluck('product_image_id');
    // return dd($brandId);
     $data = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                ->join('tbl_category','tbl_product.category_id','=','tbl_category.id')
                ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_category.id','tbl_category.category_name','tbl_product.*','tbl_product_image.*')
                ->whereIn('category_id',$catId)
                 ->where('tbl_product_image.image_label',1)
                // ->take(9)
                ->orderBy('tbl_product.product_id','desc')
                ->get();

    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu)
                    ->with('data',$data);

    // $data = DB::table('tbl_product')
    //             ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_image_id')
    //             ->select('tbl_product.*','tbl_product_image.*')
    //             ->get();
    // $products = DB::table('tbl_product')
    //             // ->select('tbl_product.*','tbl_product_image.*')
    //             ->get();

    $new_arivals = view('Frontend.includes.new_arivals')
                   ->with('data',$data)          
                   ->with('menu',$menu);           
    $productView = view('Frontend.Product.productView')
                    ->with('data',$data);

    $brands   =DB::table('tbl_menufecture')->get();
      
    $brand = view('Frontend.Brand.brand')
                    ->with('brands',$brands);

    return  view('Frontend.frontend_master')
            ->with('productView',$productView)
            ->with('brand',$brand)
            ->with('new_arivals',$new_arivals)
        ->with('categoryView',$categoryView)
        ->with('header_menu',$header_menu)
        ->with('slider',$slider)
        ->with('we_offer',$we_offer)
            ->with('coupons',$coupons)
        ->with('footer_bottom',$footer_bottom);

 }

  public function UserLogin(Request $request){

     $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            
        ]);
     $email  = $request->email;
     $password  = md5($request->password);
     $userlogin = DB::table('tbl_customer')
                    ->select('*')
                    ->where('email',$email)
                    ->where('password',$password)
                    ->first();

    if($userlogin)
        {
            Session::put('customer_id',$userlogin->customer_id);
            Session::put('customer_name',$userlogin->customer_name);
            return Redirect::to('/');
        }
        else
        {
            Session::flash('message', 'Your email or password is invalid');
            return Redirect::to('/');
        }
  }

  public function UserPage(){


   $categories = DB::table('tbl_category')->get();
    $menu          =  DB::table('tbl_category')->take(4)->get();
    $categoryView = view('Frontend.Category.category')
                    ->with('categories',$categories);

    $hslider = DB::table('tbl_slider')->get();
    $slider  = view('Frontend.includes.banner')
                ->with('hslider',$hslider);
  $coupons = view('Frontend.includes.coupons');
    $we_offer = view('Frontend.includes.we_offer');
  $category = view('Frontend.Category.category');
  $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);
 $id = DB::table('tbl_category')->pluck('id');
 $brandId = DB::table('tbl_menufecture')->pluck('id');
    // return dd($brandId);
 $catId = DB::table('tbl_category')->pluck('id');
 // $tbl_product_image = DB::table('tbl_product_image')->pluck('product_image_id');
    // return dd($brandId);
     $data = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                ->join('tbl_category','tbl_product.category_id','=','tbl_category.id')
                ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_category.id','tbl_category.category_name','tbl_product.*','tbl_product_image.*')
                ->whereIn('category_id',$catId)
                 ->where('tbl_product_image.image_label',1)
                // ->take(9)
                ->orderBy('tbl_product.product_id','desc')
                ->get();

    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu)
                    ->with('data',$data);

    // $data = DB::table('tbl_product')
    //             ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_image_id')
    //             ->select('tbl_product.*','tbl_product_image.*')
    //             ->get();
    // $products = DB::table('tbl_product')
    //             // ->select('tbl_product.*','tbl_product_image.*')
    //             ->get();

    $new_arivals = view('Frontend.includes.new_arivals')
                   ->with('data',$data)          
                   ->with('menu',$menu);           
    $productView = view('Frontend.Product.productView')
                    ->with('data',$data);

    $brands   =DB::table('tbl_menufecture')->get();
      
    $brand = view('Frontend.Brand.brand')
                    ->with('brands',$brands);

    return  view('Frontend.frontend_master')
            ->with('productView',$productView)
            ->with('brand',$brand)
            ->with('new_arivals',$new_arivals)
        ->with('categoryView',$categoryView)
        ->with('header_menu',$header_menu)
        ->with('slider',$slider)
        ->with('we_offer',$we_offer)
            ->with('coupons',$coupons)
        ->with('footer_bottom',$footer_bottom);

  }
     public function Logout() {
        Session::put('customer_id', '');
        Session::put('customer_name', '');
        Session::flash('message', "You are successfully logout");
        return Redirect::to('/');
    }


}
