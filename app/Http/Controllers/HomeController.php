<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

        {
            // return view('home');
            // $theme_changes = DB::table('tbl_sitting')
            //             ->where('id',1)->first();
            // $sittings = view('Backend.header')
            //             ->with('theme_changes',
            //                 $theme_changes);
            $main_content = view('Backend.main_content');
            return view('Backend.admin_master')
                    ->with('main_content',$main_content);
        }
}
