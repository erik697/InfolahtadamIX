<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryProductStoreRequest;
use App\Http\Requests\CategoryProductUpdateRequest;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_kategoriBarang')){
           abort(403);
        }
        $categoryProducts = CategoryProduct::orderBy('id','DESC')->get();
        return view('categoryProduct.index', [
            'categoryProducts' => $categoryProducts,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_kategoriBarang')){
           abort(403);
        }
        $categoryProducts = CategoryProduct::where('parent_id', null)->get();
        return view('categoryProduct.create',['categoryProducts' => $categoryProducts] );
    }

    public function store(CategoryProductStoreRequest $request)
    {
        if(!checkPermission('create_kategoriBarang')){
           abort(403);
        }
        
        $categoryProduct = CategoryProduct::create($request->validated());

        return redirect()->route('category-products.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, CategoryProduct $categoryProduct)
    {
                abort(404);

    }

    public function edit(Request $request, CategoryProduct $categoryProduct)
    {
        if(!checkPermission('update_kategoriBarang')){
           abort(403);
        }
        $categoryProducts = CategoryProduct::where('parent_id', null)->where('id','!=', $categoryProduct->id)->get();
        return view('categoryProduct.edit', [
            'categoryProduct' => $categoryProduct,
            'categoryProducts' => $categoryProducts,
        ]);
    }

    public function update(CategoryProductUpdateRequest $request, CategoryProduct $categoryProduct)
    {
        if(!checkPermission('update_kategoriBarang')){
           abort(403);
        }
        $categoryProduct->update($request->validated());

        return redirect()->route('category-products.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, CategoryProduct $categoryProduct)
    {
        if(!checkPermission('delete_kategoriBarang')){
           abort(403);
        }
        $categoryProduct->delete();

        return redirect()->route('category-products.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
