<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;
use DB;
use File;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = DB::table('tbl_logo')->get();
        $logo = view('Backend.Logo.logolist')
                    ->with('logos',$logos);
        return view('Backend.admin_master')
                ->with('logo',$logo);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo = view('Backend.Logo.addlogo');
        return view('Backend.admin_master')
                ->with('logo',$logo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'logo_title'=>'required',
        //     'logo_link'=>'required',

        //     ]);
        $data = array();
    
        $logoimage=$request->file('logo_image');
        $name=$logoimage->getClientOriginalName();
        $UploadPath ='public/Backend/LogoImage/';
        $logoimage->move($UploadPath,$name);
        $imageUrl =$UploadPath.$name;

        $data['logo_title'] = $request->logo_title;
        $data['logo_link'] = $request->logo_link;
        $data['logo_image']=$imageUrl;

        Toastr::success('Logo Added', 'Info', ["positionClass" => "toast-top-right"]);

        DB::table('tbl_logo')->insert($data);
                    return redirect('/logo');
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
    public function edit(Request $request,$id)
    {
        $id = $request->id;
        $logo = DB::table('tbl_logo')
                ->where('id',$id)
                ->first();
          return response()->json($logo);
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
        $data['logo_title'] = $request->logo_title;
        $data['logo_link'] = $request->logo_link;
       // return dd($data);

        $files  =$request->file('logo_image');
       // return dd($files);
    
    if ($files) {
        $filename=$files->getClientOriginalName();
        $picture = date('His').$filename;
        $UploadPath ='public/Backend/LogoImage/';
        $imageUrl =$UploadPath.$picture;
        $destinationPath = base_path().$UploadPath;  
        $success = $files->move($UploadPath,$picture);
         if ($success) {

      $data['logo_image'] = $imageUrl;
          DB::table('tbl_logo')
            ->where('id',$id)
            ->update($data);
        unlink($request->old_img_path);
         
            return response()->json();
        }
    }
    
        
        else{
          
         DB::table('tbl_logo')
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
    public function destroy($id)
    {
        DB::table('tbl_logo')
        ->where('id',$id)
        ->delete();
        return response()->json();
    }
}
