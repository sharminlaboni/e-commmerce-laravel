<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
//use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(15);
        return view('backend.product.index', compact('products'));
    }

    public  function show($id)
    {
        $product = Product::find($id);
        return view('backend.product.show', compact('product'));
    }
    public function create()
    {
        $category = Category::pluck('title','id')->toArray();
        $brand = Brand::pluck('name', 'id')->toArray();
        return view('backend.product.create', compact('category','brand'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $requestData =[
            // coloum name of db || name of input field
            'name'=> $request->name,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'sold'=>$request->sold,
            'category_id'=>$request->category_id,
            'image' => $this->uploadImage($request->file('image')),

        ];

        Product::create($requestData);
        return redirect()
                ->route('products.index')
                ->withMessage('Successfully created');
    }

    public function edit($id)
    {
        $category = Category::pluck('title','id')->toArray();
        $brand = Brand::pluck('name', 'id')->toArray();
        $product = Product::find($id);
        return view('backend.product.edit', compact('product', 'category', 'brand'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $requestData = [
            'name'=> $request->name,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'sold'=>$request->sold,
            'category_id'=>$request->category_id,
            'image' => $this->uploadImage($request->file('image'))

        ];

        $product->update($requestData);
        return redirect()->route('products.index')->with(['message'=> 'Successfully Updated!']);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with(['message'=> 'Successfully deleted!!']);
    }
    public function trash()
    {
        $products= Product::onlyTrashed()->get();
        return view('backend.product.trash', compact('products')); 
    }

    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect()->route('products.trash')->with(['message'=> 'Successfully Restored!']);
    }

    public function delete($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->forceDelete();
        return redirect()->route('products.trash')->with(['message'=> 'Successfully Deleted!']);
    }

    public function uploadImage($image)
    {
        $originalName = $image->getClientOriginalName();
        $fileName = date('Y-m-d') . time() . $originalName;

        $image->move(storage_path('/app/public/products'), $fileName);

        //Image::make($image)
             //->resize(200, 200)
            //->save(storage_path() . '/app/public/products/' . $fileName);
        return $fileName;
    }
}
