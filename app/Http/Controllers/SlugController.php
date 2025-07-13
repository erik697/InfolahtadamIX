<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlugStoreRequest;
use App\Http\Requests\SlugUpdateRequest;
use App\Models\Slug;
use Illuminate\Http\Request;

class SlugController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_tags')){
           abort(403);
        }
        $slugs = Slug::orderBy('id','DESC')->get();

        return view('slug.index', [
            'slugs' => $slugs,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_tags')){
           abort(403);
        }
        return view('slug.create');
    }

    public function store(SlugStoreRequest $request)
    {
        if(!checkPermission('create_tags')){
           abort(403);
        }
        $slug = Slug::create($request->validated());

        return redirect()->route('slugs.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Slug $slug)
    {
               abort(404);

    }

    public function edit(Request $request, Slug $slug)
    {
        if(!checkPermission('tags_tags')){
           abort(403);
        }
        return view('slug.edit', [
            'slug' => $slug,
        ]);
    }

    public function update(SlugUpdateRequest $request, Slug $slug)
    {
        if(!checkPermission('tags_tags')){
           abort(403);
        }
        $slug->update($request->validated());

        return redirect()->route('slugs.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, Slug $slug)
    {
        if(!checkPermission('delete_tags')){
           abort(403);
        }
        $slug->delete();

        return redirect()->route('slugs.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
