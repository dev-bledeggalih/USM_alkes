<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Brand;
use Image;

class BrandsController extends Controller
{
	 public function addBrand(Request $request){
    	if($request->isMethod('post')){

            $request->validate([
                'name' => 'required|string',
                'image' => 'required|mimes:png,jpg,jpeg',
                'description' => 'max:200'
            ]);

            $data = $request->all();
    		//echo "<pre>"; print_r($data); die;	

    		$brand = new Brand;
			$brand->name = $data['name'];
			$brand->description = $data['description'];
			// dd($data);
            // kalo si subBanner nya 0 entar dijadiin slideshow, kalo subBanner nya != 0 entar dijadiin sub banner per grid nya
    //         	$image_tmp = Input::file('image');
				// $extension = $image_tmp->getClientOriginalExtension();
				// dd($extension);
				// $fileName = rand(111,99999).'.'.$extension;
    //             $brand_path = 'images/frontend_images/brands/'.$fileName;
    //             Image::make($image_tmp)->resize(500, 500)->save($brand_path);
    //             $brand->image = $fileName;

            if($request->hasFile('image')){
                $image = Input::file('image');
                // dd($image_tmp->isValid());
                if ($image->isValid()) {
                    // Upload Images after Resize
                    $extension = $image->getClientOriginalExtension();
                    $fileName = rand(111,99999).'.'.$extension;
                    $brand_path = 'images/frontend_images/brands/'.$fileName;
                        Image::make($image)->resize(500, 500)->save($brand_path);
                        $brand->image = $fileName; 
                }
            }

            // $image = $data['image'];
            // $brand_path = 'images/frontend_images/brands/'.$image;
            // $brandImage = Image::make($image)->resize(500,500)->stream();
            // // Image::make($image_tmp)->resize(500, 500)->save($brand_path);
            // $brand->image = $image;
            // dd($brand->image);
			$brand->save();
			return redirect()->back()->with('flash_message_success', 'Brand has been added successfully');
    	}
    	
    	return view('admin.brands.add_brand');
    }
    public function editBrand(Request $request,$id=null){

        if($request->isMethod('post')){

            $request->validate([
                'name' => 'required|string',
                'image' => 'required|mimes:png,jpg,jpeg',
                'description' => 'max:200'
            ]);

            $data = $request->all();
            /*echo "<pre>"; print_r($data); */

            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111,99999).'.'.$extension;
                    $brand_path = 'images/frontend_images/brands/'.$fileName;
                        Image::make($image_tmp)->resize(500, 500)->save($brand_path);
                        $brand->image = $fileName; 
                }
            }
            Brand::where('id',$id)->update(['name'=>$data['name'],'image'=>$fileName,'description'=>$data['description']]);
            return redirect()->back()->with('flash_message_success','Brand has been edited Successfully');

        }
        $bannerDetails = Brand::where('id',$id)->first();
        return view('admin.brands.edit_brand')->with(compact('brandDetails'));
    }

    public function viewBrand(){
        $brands = Brand::get();
        return view('admin.brands.view_brand')->with(compact('brands'));
    }

    public function deleteBrand($id = null){
        Brand::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success', 'Brand has been deleted successfully');
    }
}