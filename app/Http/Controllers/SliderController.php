<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use Toastr;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $sliders =DB::table('tbl_slider')
                        ->get();
        $allsliders =  view('Backend.Slider.sliderlist')
                       ->with('sliders',$sliders);
            
        return view('Backend.admin_master')
                ->with('allsliders',$allsliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        $allsliders =  view('Backend.Slider.addslider');
        return view('Backend.admin_master')
                ->with('allsliders',$allsliders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'slider_title' => 'required',
            'slider_caption' => 'required',
            'slider_content' => 'required',
            'slider_link' => 'required',
            'slider_status' => 'required',
            
        ]);

          $sliderImage=$request->file('slider_image');
          $name=$sliderImage->getClientOriginalName();
          $UploadPath ='public/Backend/SliderImage/';
          $sliderImage->move($UploadPath,$name);
          $imageUrl =$UploadPath.$name;

        $data = array();
        $data['slider_title'] = $request->slider_title;
        $data['slider_caption'] = $request->slider_caption;
        $data['slider_content'] = $request->slider_content;
        $data['slider_link'] = $request->slider_link;
        $data['slider_status'] = $request->slider_status;

        $data['slider_image'] = $imageUrl;
         DB::table('tbl_slider')
                ->insert($data);

     Toastr::success('Slider Added', 'Info', ["positionClass" => "toast-top-right"]);

            return redirect('slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function PublishedStatus(Request $request,$id){
// return dd($id);
        $id =$request->id;
        $data = array();
        $data['slider_status'] =0; 

        $slider =DB::table('tbl_slider')
                ->where('id',$id)
                ->update($data);
        return response()->json($slider);

    }
public function UnPublishedStatus(Request $request,$id){
// return dd($id);
        $id =$request->id;
        $data = array();
        $data['slider_status'] =1; 

        $slider =DB::table('tbl_slider')
                ->where('id',$id)
                ->update($data);
        return response()->json($slider);

    }

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
        $editSliderByid = DB::table('tbl_slider')
                        ->where('id',$id)->first();
         $allsliders =  view('Backend.Slider.editslider')
                        ->with('editSliderByid',$editSliderByid);
        return view('Backend.admin_master')
                ->with('allsliders',$allsliders);
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
        $data['slider_title'] = $request->slider_title;
        $data['slider_caption'] = $request->slider_caption;
        $data['slider_content'] = $request->slider_content;
        $data['slider_link'] = $request->slider_link;
        $data['slider_status'] = $request->slider_status;
       // return dd($data);
// return dd($socialImage);
        $files  =$request->file('slider_image');
       
    
    if ($files) {
        $filename=$files->getClientOriginalName();
        $picture = date('His').$filename;
        $UploadPath ='public/Backend/SliderImage/';
        $imageUrl =$UploadPath.$picture;
        $destinationPath = base_path().$UploadPath;  
        $success = $files->move($UploadPath,$picture);
         if ($success) {

      $data['slider_image'] = $imageUrl;
          DB::table('tbl_slider')
            ->where('id',$id)
            ->update($data);
        unlink($request->old_img_path);
         
            return response()->json();
        }
    }
    
        
        else{
          
         DB::table('tbl_slider')
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
        //
    }
}
