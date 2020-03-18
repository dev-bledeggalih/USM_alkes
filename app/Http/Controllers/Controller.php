<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use DB;
use Session;
use App\Category;
use App\Product;
use App\Brand;
use App\Coupon;
use App\Order;
use App\Banner;
use App\User;
use App\CmsPage;
use App\Enquiry;
use App\Currency;
use App\ShippingCharge;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function mainCategories(){
    	$mainCategories = Category::where(['parent_id' => 0])->get();
    	$mainCategories = json_decode(json_encode($mainCategories));
    	/*echo "<pre>"; print_r($mainCategories); die;*/
    	return $mainCategories;
    }

    public static function showHead(){          
        if(Auth::check()){
            $user_email = Auth::user()->email;
            $userCart = DB::table('cart')->where(['user_email' => $user_email])->get();     
        }else{
            $session_id = Session::get('session_id');
            $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();    
        }
        
        foreach($userCart as $key => $product){
            $productDetails = Product::where('id',$product->product_id)->first();
            $userCart[$key]->image = $productDetails->image;
        }
        
        return $userCart;
    }


    public static function countSide(){

    	$sideCountCategory = Category::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountBrand = Brand::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountProduct = Product::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountCoupon = Coupon::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountOrder = Order::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountBanner = Banner::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountUser = User::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountCms = CmsPage::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountEnquiry = Enquiry::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountCurrency = Currency::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();
        $sideCountShipping = ShippingCharge::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->count();

        return $sideCountCategory;
    }

    public static function newItemAttr(){
        $newItemAttr = Product::whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-1 days')) )->get();

        return $newItemAttr;
    }

    public static function slideBrand(){

        $slideBrand = Brand::all();

        return $slideBrand;
    }

    public function contact(){

        return view('contact');
    }

    // public static function viewPages(){

    //     return $;
    // }


}
