<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use response;
use Validator;
use toastr;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $socialList =DB::table('tbl_social')
                        ->get();
         $socials =  view('Backend.Social.index')
                    ->with('socialList',$socialList);
         return view('Backend.admin_master')
                ->with('socials',$socials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $socials =  view('Backend.Social.add');
        return view('Backend.admin_master')
                ->with('socials',$socials);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'title'=>'required',
            'link'=>'required',
            'image'=>'required',
        ]);


        $data = array();
        // $data = $request->input('image');
        $socialimage=$request->file('image');
        $name=$socialimage->getClientOriginalName();
        $ext=$socialimage->getClientOriginalExtension();
        $UploadPath ='public/Backend/Socialimage/';
        $socialimage->move($UploadPath,$name);
        $imageUrl =$UploadPath.$name;

        $data['name']  = $request->name;
        $data['title'] = $request->title;
        $data['link']  = $request->link;
        $data['image'] = $imageUrl;
        $socials=DB::table('tbl_social')
                    ->insert($data);
     return response()->json($socials);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$social_id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$social_id)
    {
        $id = $request->social_id;
        $socialByid =DB::table('tbl_social')
                        ->where('id',$id)
                        ->first();

        $socials =  view('Backend.Social.edit')
                    ->with('socialByid',$socialByid);
        return view('Backend.admin_master')
                  ->with('socials',$socials);

       
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

        

        $data = array();
        $id =$request->id;
        $data['name'] =$request->name; 
        $data['title'] =$request->title; 
        $data['link'] =$request->link; 
       // return dd($socialImage);
// return dd($socialImage);
        $files  =$request->file('image');
       
    
    if ($files) {
        $filename=$files->getClientOriginalName();
        $picture = date('His').$filename;
        $UploadPath ='public/Backend/Socialimage/';
        $imageUrl =$UploadPath.$picture;
        $destinationPath = base_path().$UploadPath;  
        $success = $files->move($UploadPath,$picture);
         if ($success) {

      $data['image'] = $imageUrl;
          DB::table('tbl_social')
            ->where('id',$id)
            ->update($data);
        unlink($request->old_img_path);
         
            return response()->json();
        }
    }
    
        
        else{
          
         DB::table('tbl_social')
                ->where('id',$id)
                ->update($data);
        return response()->json();

        }

      
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id=$request->id;
        // $product = Product::findOrFail( $id );

    if ( $request->ajax() ) {
        $data = array();
        DB::table('tbl_social')
        ->where('id',$id)
        ->delete();

        return response(['msg' => 'Item deleted','status' => 'success']);
    }
    return response(['msg' => 'Failed deleting the Item', 'status' => 'failed']);
    }
}
