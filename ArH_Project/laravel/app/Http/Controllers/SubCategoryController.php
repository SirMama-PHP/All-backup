<?php

namespace App\Http\Controllers;
use App\Category;
use App\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function sub_addcategory(){
        $categories = Category::orderBy('category_name','asc')->get();
        return view('backend.subcategory.subcategory',compact('categories'));
    }

    function subcategorypost(Request $request){
        
        SubCategory::insert([
            'subcategory_name' =>$request->subcategory_name,
            'category_id' =>$request->category_id,
            'created_at' =>Carbon::now(),
        ]);
        return back()->with('success','Sub Category Added Successfully');
    }
    function view_subcategory(){
        $scount = SubCategory::count();
        $subcategories = SubCategory::with('get_category')->paginate(10);
        return view('backend.subcategory.view-subcategory',compact('subcategories','scount'));
    
    }
    function delete_subcategory($id){
        SubCategory::findOrFail($id)->delete();
        return back();
    }
    function edit_subcategory(){
        return view('backend.subcategory');
        SubCategory::all();
    }
    function subcategoryupdate(){
        return view('backend.subcategory');
        SubCategory::all();
    }


    function  deleted_subcategory(){
        $scount = SubCategory::onlyTrashed()->count();
        $subcategories = SubCategory::onlyTrashed()->paginate(10);
        return view('backend.subcategory.deleted-subcategory',compact('subcategories','scount'));
    }

    function restore_subcategory($id){
        SubCategory::withTrashed()->findOrFail($id)->restore();
        return back()->with('restore','Data Restored successfully');
    }
    function permanent_subcategory($id){
        SubCategory::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('restore','Data Deleted permanently');
         
    }
}
