<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SearchText(Request $req)
   {

    $search = $req->search;
    $catid = DB::table('tbl_category')->pluck('id');
    $menufecture_id = DB::table('tbl_menufecture')->pluck('id');
        // return dd($menufecture_id);

    // $catid = $req->id;
    // $menufecture_id = $req->id;
        // return dd($menufecture_id);

  $searchdata = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                ->join('tbl_category','tbl_product.category_id','=','tbl_category.id')
                ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_category.id','tbl_category.category_name','tbl_product.*','tbl_product_image.image_option','tbl_product_image.product_id')
                ->where('tbl_product_image.image_label',1)
                ->whereIn('category_id',$catid)
                ->whereIn('tbl_product.menufecture_id',$menufecture_id)
                ->where('product_name','LIKE','%'.$search."%")

                ->get();
     if ($searchdata) {
         return view('Frontend.Search.searchdata',[
                 'searchdata' => $searchdata,
       ]); 
        
     }
     else{
        return false;
     }

    
 

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
