<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use Toastr;
class MenufectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menufectures =DB::table('tbl_menufecture')
                        ->orderBy('id','desc')
                        ->get();
        // return $menufectures;
        // exit();
        $menufec =  view('Backend.menufectures.index')
                        ->with('menufectures',$menufectures);
           return view('Backend.admin_master')
                ->with('menufec',$menufec);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $menufectures =  view('Backend.menufectures.create');
        return view('Backend.admin_master')
                ->with('menufectures',$menufectures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,[
                'brand_name'=>'required',
                'status'=>'required',
            ]);
        $data = array();
    $data['brand_name']=$request->brand_name;
    $data['status']=$request->status;
     DB::table('tbl_menufecture')->insert($data);

        Toastr::success('Menufecture Added', 'Info', ["positionClass" => "toast-top-right"]);
       return redirect()
            ->route('menufecture.index');
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
    public function productBymenufecture($id){
         $menufectures = DB::table('tbl_menufecture')
            ->join('tbl_product', 'tbl_menufecture.id', '=', 'tbl_product.menufecture_id')

            ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
            ->where('tbl_product_image.image_label',1)
            ->select('tbl_product.*', 'tbl_menufecture.brand_name','tbl_product_image.image_option')

             ->where('tbl_menufecture.id',$id)
            ->get();
            return view('Frontend.includes.menufecture-by-category')
        ->with('menufectures',$menufectures);
    }

    public function MenufectureSController($id)
    {
         $data = array();
        $data['status'] =0; 

        DB::table('tbl_menufecture')
        ->where('id', $id)
        ->update($data);
          $notification = array(
        'message' => 'Menufecture Unpublished!', 
        'alert-type' => 'info'
        );
    return redirect()->route('menufecture.index')
         ->with($notification);
    }

     public function BrandWiseProduct(Request $req){

         $id = $req->id;
         // return dd($id);

        $data = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                ->join('tbl_category','tbl_product.category_id','=','tbl_category.id')
                ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_category.id','tbl_category.category_name','tbl_product.*','tbl_product_image.image_option','tbl_product_image.product_id')
                ->where('tbl_product_image.image_label',1)
                ->where('tbl_product.menufecture_id',$id)
                ->get();
        $brandId = DB::table('tbl_menufecture')
                    ->where('id',$id)
                    ->first();

           return view('Frontend.Brand.brandWiseProduct',[
             'data' => $data,
             'brandId' => $brandId,
       ]);
    }
public function MenufectureSremoveController($id)
    {
         $data = array();
        $data['status'] =1; 

        DB::table('tbl_menufecture')
        ->where('id', $id)
        ->update($data);
          $notification = array(
        'message' => 'Menufecture Published!', 
        'alert-type' => 'warning'
        );
    return redirect()->route('menufecture.index')
         ->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $menufectureByid = DB::table('tbl_menufecture')
                            ->where('id',$id)
                            ->first();
        $menufectureByid =view('Backend.menufectures.edit')
        ->with('menufectureByid',$menufectureByid);
       return view('Backend.admin_master')
            ->with('menufectureByid',$menufectureByid);
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
        $this->validate($request,[
                'brand_name'=>'required',
                'status'=>'required',
               
            ]);
        $data = array();

    $data['brand_name']=$request->brand_name;
    $data['status']=$request->status;
     DB::table('tbl_menufecture')
     ->where('id',$id)
     ->update($data);
     Toastr::success('Menufecture Updated', 'Info', ["positionClass" => "toast-top-right"]);
      return redirect()->route('menufecture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_menufecture')
        ->where('id', $id)
        ->delete();
      
       return redirect()->route('menufecture.index')
       ->with('message','Menufecture Deleted');
    }
}
