<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddTocart(Request $request)
    {
        // $qty=$request->product_quantity;
        $product_id=$request->product_id;
        // return dd($product_id);
        $product_info=DB::table('tbl_product')
       ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
       ->where('tbl_product_image.image_label',1)
         ->where('tbl_product.product_id',$product_id)
        ->select('tbl_product.*','tbl_product_image.image_option')
        ->first();
        // return dd($product_info);

        $data = array();
        $data['id'] =$product_info->product_id; 
        $data['name'] =$product_info->product_name; 
        $data['qty'] =1; 
        $data['price'] =$product_info->product_price; 
        $data['options']['image'] =$product_info->image_option; 

       Cart::add($data);

    $menu  =  DB::table('tbl_category')->take(5)->get();

    $footer_bottom = view('Frontend.footer_bottom')
                    ->with('menu',$menu);

   $data = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                 ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_product.*','tbl_product_image.image_label','tbl_product_image.image_option')
                ->where('tbl_product_image.image_label',1)
                ->get();
    $card = view('Frontend.show_card')
                ->with('data',$data);
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu)
                    ->with('card',$card );               
    return  view('Frontend.home')
            ->with('card',$card);


    }

    public function AddTocartHomepage(Request $request)
    {
        $qty=$request->qty;
        $product_id=$request->product_id;
        $product_info=DB::table('tbl_product')
       ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
       ->where('tbl_product_image.image_label',1)
         ->where('tbl_product.product_id',$product_id)
        ->select('tbl_product.*','tbl_product_image.image_option')
        ->first();
        Cart::add(['id' =>$product_info->product_id,
        'name' => $product_info->product_name,
        'qty' => $qty, 
        'price' => $product_info->product_price,
        'options' => ['image' => $product_info->image_option]]);
        // return Redirect::to('show-cart');

          $notification = array(
            'message' => 'Cart Added Successfully.', 
            'alert-type' => 'info'
            );

    return redirect('/')
    ->with($notification);

    }

    public function Checkout(){
        return view('Frontend.includes.checkout');

    }
    public function Showcart(){

    $menu          =  DB::table('tbl_category')->take(5)->get();

    $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);

   $data = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                 ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_product.*','tbl_product_image.image_label','tbl_product_image.image_option')
                ->where('tbl_product_image.image_label',1)
                ->get();
    $card = view('Frontend.show_card')
                ->with('data',$data);
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu)
                    ->with('card',$card );               
    return  view('Frontend.home')
            ->with('header_menu',$header_menu)
            ->with('footer_bottom',$footer_bottom)
            ->with('card',$card);
            



    }
    public function update(Request $request){
      $rowId = $request->rowId;
      $qty = $request->qty;
      Cart::update($rowId, $qty);
      // return response()->json();
      return redirect('/show_cart');

    }
    public function DeleteCart($id){
          Cart::update($id,0);
         return redirect('/show_cart');

    }
   
}
