<?php
namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Image;
use App\Product;
use Carbon\Carbon;  

class ProductController extends Controller
{
    public function add_product()
    {
        $categories = Category::orderBy('category_name', 'asc')->get();
        $subcategory = SubCategory::orderBy('subcategory_name', 'asc')->get();
        return view('backend.product.product', ['categories' => $categories, 'subcategory' => $subcategory]);
    }

    public function post_product(Request $request)
    {

        $slug = strtolower(str_replace(' ', '-', $request->product_name));
        $slug_check=Product::where('slug', $slug)->count();

        if ($slug_check > 0) {
            $slug = $slug . '-' . time();
        }

        if ($request->hasFile('product_thumbnail')) {
            $image = $request->file('product_thumbnail');
            $ext = $slug . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(600, 622)->save(public_path('/img/thumbnail/'.$ext));

            Product::insert(['category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'product_name' => $request->product_name,
                'slug' => $slug,
                'product_summary' => $request->product_summary,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_quantity' => $request->product_quantity,
                'product_thumbnail' => $ext,
                'created_at' => Carbon::now(),
            ]);
        }
         else {

            Product::insert(['category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'product_name' => $request->product_name,
                'slug' => $slug,
                'product_summary' => $request->product_summary,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_quantity' => $request->product_quantity,
                'created_at' => Carbon::now(),
            ]);
        }
        return back();
    }

    function view_product(){
        $products = Product::paginate();
        return view('backend.product.view_product',compact('products'));
    }

}
