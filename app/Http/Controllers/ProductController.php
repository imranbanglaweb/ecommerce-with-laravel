<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use Toastr;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $allproducts = DB::table('tbl_product')
            ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
             ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
            ->where('tbl_product_image.image_label',1)
            ->select('tbl_product.*', 'tbl_category.category_name','tbl_product_image.image_option')
            // ->where('posts.id',2)
            ->orderBy('product_id','desc')
            ->get();
    $productlist =  view('Backend.Product.productlist')
                    ->with('allproducts',$allproducts);
        return view('Backend.admin_master')
                ->with('productlist',$productlist);
               
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menufectures =DB::table('tbl_menufecture')
                        ->select('id','brand_name')
                        ->get();
        $categories =DB::table('tbl_category')
                    ->select('id','category_name')->get();
        $product =  view('Backend.Product.addproduct')
                    ->with('categories',$categories)
                    ->with('menufectures',$menufectures);
            
        return view('Backend.admin_master')
                ->with(' $menufectures',$menufectures)
                ->with('product',$product);
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
                'product_name'=>'required',
                'category_id'=>'required',
                'menufecture_id'=>'required',
                'product_price'=>'required',
                'product_quantity'=>'required',
                'product_shortdis'=>'required',
                'product_longdis'=>'required',
                'product_status'=>'required',
                // 'product_image'=>'required',
            ]);

    $data = array();
    $data['product_name']=$request->product_name;
    $data['category_id']=$request->category_id;
    $data['menufecture_id']=$request->menufecture_id;
    $data['product_price']=$request->product_price;
    $data['product_quantity']=$request->product_quantity;
    $data['product_shortdis']=$request->product_shortdis;
    $data['product_longdis']=$request->product_longdis;
    $data['product_status']=$request->product_status;
// return dd($data);
// exit();
    $product_id = DB::table('tbl_product')
                    ->insertGetId($data);
        
    $this->do_upload($request,$product_id);

   Toastr::success('Product Added', 'Info', ["positionClass" => "toast-top-right"]);
        return redirect()->route('product.create');
    }

     public function do_upload($request,$product_id)
    {
        $picture = '';
        $i=1;
        if ($request->hasFile('product_image')) 
        {
        $files = $request->file('product_image');
        foreach($files as $file){
        $filename = $file->getClientOriginalName();
        //$extension = $file->getClientOriginalExtension();
        $picture = date('His').$filename;
        $image_url='product_image/'.$picture;
        $destinationPath = base_path() . '\product_image';
        $success=$file->move($destinationPath, $picture);
            
         
                if ($success) {
                    $idata = array();
                    $idata['product_id'] = $product_id;
                    $idata['image_option'] = $image_url;
                    if ($i===1) {
                        $idata['image_label'] = 1;
                    } else {
                        $idata['image_label'] = 0;
                    }

                    DB::table('tbl_product_image')->insert($idata);
                }
                else{
                    echo "Upload Error";
                }
                $i++;
        }
        }
        return;
    }

      public function ProductDetails($id){
        // return dd($id);
        // exit();
    $menu          =  DB::table('tbl_category')->take(5)->get();
    $header_menu = view('Frontend.includes.header_menu')
                    ->with('menu',$menu);
    $footer_bottom = view('Frontend.includes.footer_bottom')
                    ->with('menu',$menu);

    $data = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                 ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_product.*','tbl_product_image.image_label','tbl_product_image.image_option')
                ->where('tbl_product.product_id',$id)
                ->where('tbl_product_image.image_label',1)
                ->first();
    $allproductsImage = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_id')
                ->select('tbl_product.*','tbl_product_image.*')
                ->where('tbl_product.product_id',$id)
                ->get();
    $products = DB::table('tbl_product')
                ->join('tbl_product_image','tbl_product.product_id','=','tbl_product_image.product_image_id')
                  ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
                ->select('tbl_menufecture.brand_name','tbl_product.*','tbl_product_image.*')
                // ->where('image_label',1)
                ->get();

    $product_details =view('Frontend.Product.product_details')
                    ->with('data',$data)
                    ->with('products',$products)
                    ->with('allproductsImage',$allproductsImage);

    return  view('Frontend.home')
            ->with('header_menu',$header_menu)
            ->with('footer_bottom',$footer_bottom)
            ->with('product_details',$product_details);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = DB::table('tbl_product')
            ->join('tbl_category', 'tbl_product.category_id', '=','tbl_category.id')
            ->join('tbl_menufecture','tbl_menufecture.id','=','tbl_product.menufecture_id')
             ->select('tbl_product.*', 'tbl_category.category_name','tbl_menufecture.brand_name')
            ->where('tbl_product.product_id',$id)
            ->first();
        $productImage=DB::table('tbl_product_image')
                        ->where('product_id',$id)
                         ->select('image_option')
                        ->get(); 
                        // return dd($productImage);
                        // exit();    
           
        $productdetails = view('Backend.Product.details')
                            ->with('products',$products)
                        ->with('productImage',$productImage);
            return view('Backend.admin_master')
                    ->with('productdetails',$productdetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $catbyid  = DB::table('tbl_category')
                    ->where('id',$id)
                    ->first();
        $category =  view('Backend.Category.edit')
                    ->with('catbyid',$catbyid); 

        return view('Backend.admin_master')
                ->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function PublishedStatus(Request $request,$id){
// return dd($id);
        $id =$request->id;
        $data = array();
        $data['product_status'] =0; 

        $product =DB::table('tbl_product')
                ->where('product_id',$id)
                ->update($data);
        return response()->json($product);

    }
public function UnPublishedStatus(Request $request,$id){
// return dd($id);
        $id =$request->id;
        $data = array();
        $data['product_status'] =1; 

        $product =DB::table('tbl_product')
                ->where('product_id',$id)
                ->update($data);
        return response()->json($product);

    }

    public function update(Request $request, $id)
    {
          // $this->validate($request,[
         //        'c_name'=>'required',
         //        'c_dis'=>'required',
         //        'slug'=>'required',
         //    ]);
        $data = array();

        $data['category_name']=$request->category_name;
        $data['category_dis']=$request->category_dis;
        $data['category_slug']=$request->category_slug;

      DB::table('tbl_category')
                    ->where('id',$id)
                    ->update($data);

        Toastr::success('Category Updated', 'Info', ["positionClass" => "toast-top-right"]);            
        return redirect()
            ->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           DB::table('tbl_category')
            ->where('id', $id)
            ->delete();
        Toastr::warning('Category Deleted', 'Info', ["positionClass" => "toast-top-right"]);
       return redirect()->route('category.index');
    }
}
