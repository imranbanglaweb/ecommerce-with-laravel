<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;

class CheckoutController extends Controller
{
    public function Checkout(Request $request){
    	 $this->validate($request,[
                'customer_name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);

    	$data = array();
    	$data['customer_name'] = $request->customer_name;
    	$data['email']    = $request->email;
    	$data['password'] = md5($request->password);
    	$data['mobile']   = $request->mobile;
    	$customer_id = DB::table('tbl_customer')
    					->insertGetId($data);
    	Session::put('customer_id',$customer_id);
    	Session::put('customer_name',$request->customer_name);
    	return redirect('/billing');

    }
    public function Billing(){
    	$customer_id   = Session::get('customer_id');
     	$customer_info = DB::table('tbl_customer')
    					->where('customer_id',$customer_id)
    					->first();
 
    $menu          =  DB::table('tbl_category')->take(5)->get();
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu);
    $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);
    $billing =  view('Frontend.page.billing')
                    ->with('customer_info',$customer_info);

    return  view('Frontend.home')
            ->with('header_menu',$header_menu)
            ->with('footer_bottom',$footer_bottom)
            ->with('billing',$billing);            

    }
    public function SaveBilling(Request $request){
    	
    	 $this->validate($request,[
                'customer_name'=>'required',
                'email'=>'required',
                'mobile'=>'required',
                'customer_address'=>'required',
                'customer_city'=>'required',
                'country'=>'required',
                'zip_code'=>'required',
                'fax_number'=>'required',
            ]);

    	$data = array();
    	$id = $request->customer_id;
    	$data['customer_name'] = $request->customer_name;
    	$data['email']    = $request->email;
    	$data['mobile']   = $request->mobile;
    $data['customer_address']   = $request->customer_address;
    $data['customer_city']   = $request->customer_city;
    	$data['country']   = $request->country;
    	$data['zip_code']   = $request->zip_code;
    	$data['fax_number']   = $request->fax_number;

    	 DB::table('tbl_customer')
    					->where('customer_id',$id)
    					->update($data);
    	return redirect('/shipping');
    }
    public function Shipping(){

    $menu          =  DB::table('tbl_category')->take(5)->get();
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu);
    $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);    
    $shipping =  view('Frontend.page.shipping');
    return  view('Frontend.home')
            ->with('header_menu',$header_menu)
            ->with('footer_bottom',$footer_bottom)
            ->with('shipping',$shipping); 
    }
    public function SaveShipping(Request $request){
    	$this->validate($request,[
                'shipping_name'=>'required',
                'company_name'=>'required',
                'email'=>'required',
                'mobile'=>'required',
                'address'=>'required',
                'city'=>'required',
                'country'=>'required',
                'zip_code'=>'required',
                'phone_number'=>'required',
            ]);

    	$data = array();
    	$data['shipping_name'] = $request->shipping_name;
    	$data['company_name']    = $request->company_name;
    	$data['email']    = $request->email;
    	$data['mobile']   = $request->mobile;
    	$data['address']   = $request->address;
    	$data['city']   = $request->city;
    	$data['country']   = $request->country;
    	$data['zip_code']   = $request->zip_code;
    	$data['phone_number']   = $request->phone_number;

    	$shipping_id = DB::table('tbl_shipping')
    					->insertGetId($data);
    	Session::put('shipping_id',$shipping_id);
    	return redirect('/payment');
    }

    public function Payment(){

    $menu          =  DB::table('tbl_category')->take(5)->get();
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu);
    $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);    
    $payment =  view('Frontend.page.payment');
    return  view('Frontend.home')
            ->with('header_menu',$header_menu)
            ->with('footer_bottom',$footer_bottom)
            ->with('payment',$payment); 

        
    }


    public function PlaceOrder(Request $request){
    	
        $payment_type = $request->payment_type;

        $pdata= array();
        $pdata['payment_type'] = $payment_type;
        $pdata['payment_status'] = 'pending';
        $payment_id = DB::table('tbl_payment')
                    ->insertGetId($pdata);
        $odata = array();
        $odata['customer_id'] = Session::get('customer_id');
        $odata['shipping_id'] = Session::get('shipping_id');
        $odata['payment_id'] =$payment_id;
    $odata['order_total'] =Session::get('total');
        $odata['order_status'] ='pending';

        $order_id = DB::table('tbl_order')
                ->insertGetId($odata);

        $contents = Cart::content();
        $oddata = array();
        foreach ($contents as $content) {
             $oddata['order_id'] = $order_id; 
             $oddata['product_id'] = $content->id; 
        $oddata['product_name'] = $content->name; 
        $oddata['product_price'] = $content->price;
    $oddata['product_quantity'] = $content->qty; 
            DB::table('tbl_order_details')
             ->insert($oddata);
        }

        if ($payment_type == 'Cash_On_delivery') {
            Cart::destroy();
    return redirect('/OrderSuccess');
        }

        if ($payment_type == 'SSL_Commerze') {
            Cart::destroy();
            echo "SSL_Commerze";
        }
        if ($payment_type == 'Paypal') {
            Cart::destroy();
           return view('Frontend.htmlWebsiteStandardPayment.htmlWebsiteStandardPayment');
        }
        
    }
    public function OrderSuccess(){

    $menu          =  DB::table('tbl_category')->take(5)->get();
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu);
    $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);    
    $order_complete =  view('Frontend.page.ordercomplete');
    return  view('Frontend.home')
            ->with('header_menu',$header_menu)
            ->with('footer_bottom',$footer_bottom)
            ->with('order_complete',$order_complete); 

    }
}
