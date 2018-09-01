<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensController extends Controller
{
    public function Mens(){
		$header = view('Frontend.header');
		$header_bottom = view('Frontend.header_bottom');
		$men_header_menu = view('Frontend.men_header_menu');
		$mens = view('Frontend.mens');
		$footer_bottom = view('Frontend.footer_bottom');
		$coupons = view('Frontend.coupons');
		$men_footer = view('Frontend.men_footer');
	    return  view('Frontend.menoffer')
	    		->with('header',$header)
	    		->with('header_bottom',$header_bottom)
	    		->with('men_header_menu',$men_header_menu)
	    		->with('mens',$mens)
	    		->with('footer_bottom',$footer_bottom)
	    		->with('coupons',$coupons)
	    		->with('men_footer',$men_footer);
    }
}
