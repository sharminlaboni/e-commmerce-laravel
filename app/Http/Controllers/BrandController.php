<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;

use Illuminate\Http\Request;

class BrandController extends Controller
{

        public function index()
        {
            $brands =  Brand::all();
            return view('backend.brand.index', compact('brands'));
        }

        public function create()
        {
            return view('backend.brand.create');
        }

        public function store(BrandRequest $request)
        {


            $requestData = [
                'name' => $request->name,
            ];

            Brand::create($requestData);

            return redirect()
                ->route('brands.index')
                ->withMessage('Successfully Created');
        }


        public function show($id)
        {
            $brand = Brand::find($id);
            return view('backend.brand.show', compact('brand'));
        }

        public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand.edit', compact('brand'));
    }

    public function update(BrandRequest $request, $id)

    {
        $brand = Brand::find($id);
        $requestData = [
            'name' => $request->name,
        ];

        $brand->update($requestData);
        return redirect()->route('brands.index')->with(['message'=> 'Successfully Updated!']);
    }

    public function destroy($id)
      {
          $brand = Brand::find($id);
          $brand->delete();
          return redirect()->route('brands.index')->with(['message'=> 'Successfully deleted!!']);
      }
      public function trash()
      {
          $brands= Brand::onlyTrashed()->get();
          return view('backend.brand.trash', compact('brands'));
      }

      public function restore($id)
      {
          $brand = Brand::onlyTrashed()->find($id);
          $brand->restore();
          return redirect()->route('brands.trash')->with(['message'=> 'Successfully Restored!']);
      }

      public function delete($id)
      {
          $brand = Brand::onlyTrashed()->find($id);
          $brand->forceDelete();
          return redirect()->route('brands.trash')->with(['message'=> 'Successfully Deleted!']);
      }

    }


