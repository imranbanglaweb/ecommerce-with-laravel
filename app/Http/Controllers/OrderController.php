<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;
use HTML;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  

     $order_info = DB::table('tbl_order')
                        ->join('tbl_customer',
                            'tbl_order.customer_id','=',
                            'tbl_customer.customer_id')
                        ->select('tbl_order.*',
                            'tbl_customer.customer_name')
                        ->latest()
                        ->get();

       $oder =  view('Backend.oder.index')
              ->with('order_info',$order_info);

        return view('Backend.admin_master')
                ->with('oder',$oder);
    }

    public function Invoice(Request $request,$id){

        $payment = DB::table('tbl_payment')
                    ->join('tbl_order','tbl_payment.payment_id','=','tbl_order.payment_id')
                    ->select('tbl_payment.*','tbl_order.order_id')
                    ->where('tbl_order.order_id',$id)
                    ->first();
        $customer_info = DB::table('tbl_customer')
                        ->join('tbl_order',
                        'tbl_customer.customer_id','=',
                        'tbl_order.customer_id')
                        ->select('tbl_customer.*',
                            'tbl_order.*')
                        ->where('order_id',$id)
                        ->first();

        $shipping_info = DB::table('tbl_shipping')
                        ->join('tbl_order','tbl_shipping.shipping_id','=','tbl_order.shipping_id')
                        ->select('tbl_shipping.*','tbl_order.order_id')
                        ->where('order_id',$id)
                        ->first(); 
    $product_info = DB::table('tbl_order_details')
                        ->join('tbl_order','tbl_order_details.order_id','=','tbl_order.order_id')
                        ->join('tbl_product_image','tbl_order_details.product_id','=','tbl_product_image.product_id')
                    ->select('tbl_order_details.*'
                        ,'tbl_order.order_id',
                'tbl_product_image.image_option')
                ->where('tbl_order.order_id',$id)
            ->where('tbl_product_image.image_label',1)
                ->get(); 

        $invoice =  view('Backend.oder.invoice')
                    ->with('customer_info',$customer_info)
                    ->with('shipping_info',$shipping_info)
                    ->with('product_info',$product_info)
                    ->with('payment',$payment);

        return view('Backend.admin_master')
                    ->with('invoice',$invoice);
          
    }

 
     public function Pdfview(Request $request,$id){

        $data =array();

        $payment = DB::table('tbl_payment')
                    ->join('tbl_order','tbl_payment.payment_id','=','tbl_order.payment_id')
                    ->select('tbl_payment.*','tbl_order.order_id')
                    ->where('tbl_order.order_id',$id)
                    ->first();
        $customer_info = DB::table('tbl_customer')
                        ->join('tbl_order',
                        'tbl_customer.customer_id','=',
                        'tbl_order.customer_id')
                        ->select('tbl_customer.*',
                            'tbl_order.*')
                        ->where('order_id',$id)
                        ->first();

        $shipping_info = DB::table('tbl_shipping')
                        ->join('tbl_order','tbl_shipping.shipping_id','=','tbl_order.shipping_id')
                        ->select('tbl_shipping.*','tbl_order.order_id')
                        ->where('order_id',$id)
                        ->first(); 
    $product_info = DB::table('tbl_order_details')
                        ->join('tbl_order','tbl_order_details.order_id','=','tbl_order.order_id')
                        ->join('tbl_product_image','tbl_order_details.product_id','=','tbl_product_image.product_id')
                    ->select('tbl_order_details.*'
                        ,'tbl_order.order_id',
                'tbl_product_image.image_option')
                ->where('tbl_order.order_id',$id)
            ->where('tbl_product_image.image_label',1)
                ->get(); 

            $pdf = PDF::loadView('Admin.order.invoicedown',
                ['customer_info'=>$customer_info,
                'payment'=>$payment,
                'shipping_info'=>$shipping_info,
                'product_info'=>$product_info]);
            return $pdf->stream('Admin.order.invoicedown.pdf');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
