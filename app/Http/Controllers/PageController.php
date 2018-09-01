<?php

namespace App\Http\Controllers;
use DB;
use Toastr;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Page($page_slug)
    {

		$header_bottom = view('Frontend.includes.header_bottom');
		$header_menu = view('Frontend.includes.header_menu');
		$mens = view('Frontend.includes.mens');
		  $menu       =  DB::table('tbl_category')->take(4)->get();
		$footer_bottom = view('Frontend.includes.footer_bottom')
						->with('menu',$menu);
		$coupons = view('Frontend.includes.coupons');
		$men_footer = view('Frontend.includes.men_footer');
		$pageByid = DB::table('tbl_page')
					->Where('page_slug', $page_slug)
					->first();
	    $pageDisplay = view('Frontend.page.details')
	    				->with(compact('pageByid'));

	    return  view('Frontend.frontend_master')
	    		->with('header_bottom',$header_bottom)
	    		->with('header_menu',$header_menu)
	    		->with('mens',$mens)
	    		->with('footer_bottom',$footer_bottom)
	    		->with('coupons',$coupons)
	    		->with('men_footer',$men_footer)
	    		->with('pageDisplay',$pageDisplay);
    }

    // Backend

    public function index(){
 		$pages = DB::table('tbl_page')->get();
 		$page =  view('Backend.Pages.index')
 				->with('pages',$pages);
        	return view('Backend.admin_master')
                ->with('page',$page);
    }
    public function create(){
 		$page =  view('Backend.Pages.add');
        	return view('Backend.admin_master')
                ->with('page',$page);
    }

    public function store(Request $req){

    	$page_title = $req->page_title;
    	$page_dis = $req->page_dis;
    	$page_slug = $req->page_slug;

    	$data = array();
    	$data['page_title'] = $page_title;
    	$data['page_dis']   = $page_dis;
    	$data['page_slug']  = $page_slug;

    	$page = DB::table('tbl_page')->insert($data);
    	return response()->json($page);

    }

    public  function destroy($id){

    	 DB::table('tbl_page')
            ->where('id', $id)
            ->delete();

        Toastr::warning('Page Deleted', 'Info', ["positionClass" => "toast-top-right"]);
       return redirect('page');
    }
}
