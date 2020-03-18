<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Banner;

class IndexController extends Controller
{
    public function index(){

    	// Get all Products
    	$productsAll = Product::inRandomOrder()->where('status',1)->where('feature_item',1)->paginate(3);
    	/*$productsAll = json_decode(json_encode($productsAll));*/
    	/*dump($productsAll);*/
    	/*echo "<pre>"; print_r($productsAll);die;*/


    	// Get All Categories and Sub Categories
    	$categories_menu = "";
    	$categories = Category::with('categories')->where(['parent_id' => 0])->get();
    	$categories = json_decode(json_encode($categories));
    	/*echo "<pre>"; print_r($categories); die;*/
		foreach($categories as $cat){
			$categories_menu .= "
			<div class='panel-heading'>
				<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordian' href='#".$cat->id."'>
						<span class='badge pull-right'><i class='fa fa-plus'></i></span>
						".$cat->name."
					</a>
				</h4>
			</div>
			<div id='".$cat->id."' class='panel-collapse collapse'>
				<div class='panel-body'>
					<ul>";
					$sub_categories = Category::where(['parent_id' => $cat->id])->get();
					foreach($sub_categories as $sub_cat){
						$categories_menu .= "<li><a href='#'>".$sub_cat->name." </a></li>";
					}
						$categories_menu .= "</ul>
				</div>
			</div>
			";		
		}
		$featuredProd = Product::where([
			['status','=','1'],
			['feature_item','=','1']])->get();




		$banners = Banner::where([
			['status','=','1'],
			['subBanner','=','0']])->get();

		$subBanner = Banner::where([
			['status','=','1'],
			['subBanner','=','1']])->get();// kalo si status 1 sama subBanner1 nya isinya 1 maka tampilin di grid 1
		$subBanner2 = Banner::where([
			['status','=','1'],
			['subBanner','=','2']])->get();// kalo si status 1 sama subBanner2 nya isinya 2 maka tampilin di grid 2
		$subBanner3 = Banner::where([
			['status','=','1'],
			['subBanner','=','3']])->get();// kalo si status 1 sama subBanner3 nya isinya 3 maka tampilin di grid 3
		$subBanner4 = Banner::where([
			['status','=','1'],
			['subBanner','=','4']])->get();// kalo si status 1 sama subBanner4 nya isinya 4 maka tampilin di grid 4
		
		$lastProd = Product::orderBy('id', 'desc')->take(10)->get();
		$bestProd = Product::orderBy('id', 'desc')->take(10)->get();
		

		$smallHotProd = Product::orderBy('id', 'desc')->take(3)->get(); //show 3 product yang diskon. BLOM KELAR
		$smallFeatProd = Product::orderBy('id', 'desc')->take(3)->get(); //show 3 featured product terbaru. YG INI UDAH KELAR
		$smallSaleProd = Product::orderBy('id', 'desc')->take(3)->get(); //show 3 product yang terakhir di order. BLOM KELAR
		$smallTopProd = Product::orderBy('id', 'desc')->take(3)->get(); //show 3 product yang paling banyak di order. BLOM KELAR
		// dd($lastProd);


		// kalo mau di set 7 hari di edit terakhir, kalo lebih dari 7 hari gak ditampilin
		// $date = \Carbon\Carbon::today()->subDays(30);
		// $lastProd = Product::where('created_at', '>=', $date)->get();
		// // dd($lastProd);

		// Meta tags
		$meta_title = "Schon Home";
		$meta_description = "Schon uvu vwe vwe osas";
		$meta_keywords = "meta kyyy keywords";
    	return view('index')->with(compact('productsAll','categories_menu','categories','featuredProd','banners','subBanner','subBanner2','subBanner3','subBanner4','bestProd','lastProd','smallHotProd','smallFeatProd','smallSaleProd','smallTopProd','meta_title','meta_description','meta_keywords'));
    }
}
