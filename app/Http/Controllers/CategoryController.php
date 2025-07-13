<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_kategori')){
           abort(403);
        }
        $categories = Category::orderBy('id','DESC')->get();

        return view('category.index', [
            'categories' => $categories,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_kategori')){
           abort(403);
        }
        return view('category.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        if(!checkPermission('create_kategori')){
           abort(403);
        }
        $category = Category::create($request->validated());

        return redirect()->route('categories.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Category $category)
    {
        abort(404);
    }

    public function edit(Request $request, Category $category)
    {
        if(!checkPermission('update_kategori')){
           abort(403);
        }
        return view('category.edit', [
            'category' => $category,
        ]);
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
         if(!checkPermission('update_kategori')){
           abort(403);
        }
        $category->update($request->validated());


        return redirect()->route('categories.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, Category $category)
    {
         if(!checkPermission('delete_kategori')){
           abort(403);
        }
        $category->delete();

        return redirect()->route('categories.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
