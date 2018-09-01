<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SittingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme_change = DB::table('tbl_sitting')
                        ->where('id',1)->first();
        $sitting = view('Backend.Sittings.sitting')
                ->with('theme_change',$theme_change);
        return view('Backend.admin_master')
                    ->with('sitting',$sitting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        
        // return response()->json($post);

        $data = array();
        $id= $request->id;
        $data['theme_name'] = $request->theme_name;
        $data['theme_dis'] = $request->theme_dis;
        $data['theme_author'] = $request->theme_author;
        $data['footer_text'] = $request->footer_text;
        $data['theme_color'] = $request->theme_color;
        $sittings = DB::table('tbl_sitting')
                    ->where('id',$id)
                    ->update($data);
        return response()->json($sittings);
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
