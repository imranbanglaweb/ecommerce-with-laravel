<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use response;
use Validator;
use toastr;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
    $allcategory = DB::table('tbl_category')
                    ->get();
    $categorylist =  view('Backend.Category.categorylist')
                    ->with('allcategory',$allcategory);

        return view('Backend.admin_master')
                ->with('categorylist',$categorylist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category =  view('Backend.Category.addcategory');
        return view('Backend.admin_master')
                ->with('category',$category);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_dis']  = $request->category_dis;
        $data['category_slug'] = $request->category_slug;

        $category = DB::table('tbl_category')
                    ->insert($data);
        return response()->json($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
         $id = $request->id;
         return dd($id);
        $category =DB::table('tbl_category')
                        ->where('id',$id)
                        ->select('id','category_name','category_dis','category_slug')
                        ->get();
        // return dd($category);
        return response()->json($category);
    }

    public function CategoryWiseProduct(Request $req){
        $catid = $req->id;
        $menufecture_id = $req->id;
        // return dd($menufecture_id);

    $data = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                ->join('tbl_category','tbl_product.category_id','=','tbl_category.id')
                ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_category.id','tbl_category.category_name','tbl_product.*','tbl_product_image.image_option','tbl_product_image.product_id')
                ->where('tbl_product_image.image_label',1)
                ->where('category_id',$catid)
                // ->whereIn('tbl_product.menufecture_id',$menufecture_id)
                ->get();
    $catId = DB::table('tbl_category')
            ->where('id',$catid)
            ->first();            
   
         // return dd($data);
         
      
        return view('Frontend.Product.categoryWiseProduct',[
                 'data' => $data,
                 'catId' => $catId
       ]);

    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

         $id = $request->id;
         // return dd($id);
        $category =DB::table('tbl_category')
                        ->where('id',$id)
                        ->first();
        // return dd($category);
        return response()->json($category);
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
         // $this->validate($request,[
         //        'c_name'=>'required',
         //        'c_dis'=>'required',
         //        'slug'=>'required',
         //    ]);
        $data = array();

        $id=$request->id;
        $data['category_name']=$request->category_name;
        $data['category_dis']=$request->category_dis;
        $data['category_slug']=$request->category_slug;

      $category = DB::table('tbl_category')
                    ->where('id',$id)
                    ->update($data);
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $id=$request->id;
        $data = array();
        $category = DB::table('tbl_category')
                    ->where('id',$id)
                    ->delete();

        return response()->json($category);

    }
    
}
