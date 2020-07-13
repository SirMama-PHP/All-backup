<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    
    function __construct(){
        $this->middleware('verified');
    }

    function category(){return view('backend/category');}

    function categorypost(Request $request){
//    echo $_POST['name'];
//     $cat = new category;
//     Database Field name / Form Input Name
//    $cat->category_name = $request->name;
//     $cat->save(); 

$request->validate([
    'category_name'=>['required','min:3','max:20'],['category_name.required'=>'name fill kore ashen']
 ]);

Category::insert([
    'category_name' =>$request->category_name,
    'created_at' =>Carbon::now()
]);
return back()->with('success','Category Added successfully');   
    }
    

    function view_category(){
       
        // $Category=Category::all();                               get
        $category=Category::orderBy('category_name','asc')->paginate(10);
        return view('backend.view-category',compact('category'));

    }

// findOrFail function only working for ID
// others where function like slug find and delete
function delete_category($id){
        category::findOrFail($id)->delete();
        return back()->with('delete','Delete Added successfully');
    }

function edit_category($id){
    $category = Category::findOrFail($id);
    return view('backend.edit-category',compact('category'));
}

function categoryupdate(Request $request){
    $id = $request->category_id;
    Category::findOrFail($id)->update([
        'category_name'=> $request->category_name,
    ]);
    return redirect('/view-category')->with('update','Updated data successfully');
}
    
}
