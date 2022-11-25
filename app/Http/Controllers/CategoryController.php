<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');      
    }

    public function store(CategoryRequest $request)
    {
        $requestData = [
            'title' => $request->title,
        ];

        Category::create($requestData);

        return redirect()
            ->route('categories.index')
            ->withMessage('Successfully Created');
    }

    //public function show(Category $category)
    public function show($id)
    {
        $category = Category::find($id);
        return view('backend.category.show', compact('category'));
    }

    //public function edit(Category $category)
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    //public function update(Request $request, Category $category)
    {
        $category = Category::find($id);
        $requestData = [
            'title' => $request->title,
        ];

        $category->update($requestData);
        return redirect()->route('categories.index')->with(['message'=> 'Successfully Updated!']);
    }

    //public function destroy(Category $category)
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with(['message'=> 'Successfully deleted!!']);
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view('backend.category.trash', compact('categories'));
    }

    public function restore($id)
    {
        $Category = Category::onlyTrashed()->find($id);
        $Category->restore();
        return redirect()->route('categories.trash')->with(['message'=> 'Successfully Restored!']);
    }

    public function delete($id)
    {
        $Category = Category::onlyTrashed()->find($id);
        $Category->forceDelete();
        return redirect()->route('categories.trash')->with(['message'=> 'Successfully Deleted!']);
    }
}
