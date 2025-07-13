<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\GalleryImage;
use App\Models\Post;
use App\Models\Slug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index(Request $request)
    {
        if(!checkPermission('read_beritaUmum')){
           abort(403);
        }
        $posts = Post::orderBy('id','DESC')->get();

        return view('post.index', [
            'posts' => $posts,
        ]);
    }

    public function create(Request $request)
    {
         if(!checkPermission('create_beritaUmum')){
           abort(403);
        }
        $categories = Category::get();
        $slugs = Slug::get();
        return view('post.create', [
            'categories' => $categories,
            'slugs' => $slugs,
        ]);
    }

    public function store(PostStoreRequest $request)
    {
        if(!checkPermission('create_beritaUmum')){
           abort(403);
        }
        // dd($request->all());
        $categories = [];
        $slugs = [];
        $fileName = "";
        $req= $request;
        $file = $request->img_url;
             if($file){
            $fileName = "ImagePost".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		    $tujuan_upload = 'postImage';
            if($fileSize > 5464431){
                dd("File tidak boleh melebih 5mb");
            }
            elseif(!in_array($fileExtention,['jpg','png','jpeg'])){
                dd("file harus berformat jpg,png atau jpeg");
            }
            // dd($file, $fileName, $fileSize, $fileExtention);
            // upload file
            $file->move($tujuan_upload, $fileName);
                }

        if($req->status){
            $data = array_merge($req->all(), ["published_at" => date('Y-m-d H:i:s'), "status" => "Published",'img_url'=>$fileName]);
        }
        else{
            $data = array_merge($req->all(), [ "status" => "Draft",'img_url'=>$fileName]);
        }

        foreach($request->categories as $key=>$category){
            $categories []= [
                'category_id' => $category
            ];
        }
        foreach($request->slugs as $key=>$slug){
            $slugs []= [
                'slug_id' => $slug
            ];
        }



        $post = Post::create($data);
        $post_id = $post->id;

           // Menambahkan 'post_id' ke setiap baris
            $post_category = array_map(function($item) use($post_id) {
                $item['post_id'] = $post_id; // Menambahkan kolom 'post_id'
                return $item;
            }, $categories);
            DB::table('post_categories')->insert($post_category);

            $post_slug = array_map(function($item) use($post_id) {
                $item['post_id'] = $post_id; // Menambahkan kolom 'post_id'
                return $item;
            }, $slugs);
            DB::table('post_slugs')->insert($post_slug);
            // $request->session()->flash('transaction.id', $transaction->id);


            $dataImage = [
                'title' => $req->title,
                'description' => 'Post',
                'url' =>$fileName
            ];
        GalleryImage::create($dataImage);

        return redirect()->route('posts.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Post $post)
    {
                abort(404);

    }

    public function edit(Request $request, Post $post)
    {
        if(!checkPermission('update_beritaUmum')){
           abort(403);
        }
        $categories = Category::get();
        $slugs = Slug::get();
        $selectedCategories = $post->postCategory->pluck('category_id')->toArray();
        $selectedSlugs = $post->postSlug->pluck('slug_id')->toArray();

        return view('post.edit', [
            'post' => $post,
            'categories' => $categories,
            'slugs' => $slugs,
            'selectedCategories' => $selectedCategories,
            'selectedSlugs' => $selectedSlugs,
        ]);
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        if(!checkPermission('update_beritaUmum')){
           abort(403);
        }

         DB::table('post_categories')->where('post_id',$post->id)->delete();
        DB::table('post_slugs')->where('post_id',$post->id)->delete();
         // dd($request->all());
        $categories = [];
        $slugs = [];
        $fileName = $request->img_url_old;
        $req= $request;
        $file = $request->img_url;
             if($file){
             $fileName = $request->img_url_old != "" ? $request->img_url_old : "ImagePost".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		    $tujuan_upload = 'postImage';
            if($fileSize > 5464431){
                dd("File tidak boleh melebih 5mb");
            }
            elseif(!in_array($fileExtention,['jpg','png','jpeg'])){
                dd("file harus berformat jpg,png atau jpeg");
            }
            // dd($file, $fileName, $fileSize, $fileExtention);
            // upload file
            $file->move($tujuan_upload, $fileName);
                }

        if($req->status){
            $data = array_merge($req->all(), ["published_at" => date('Y-m-d H:i:s'), "status" => "Published",'img_url'=>$fileName]);
        }
        else{
            $data = array_merge($req->all(), [ "status" => "Draft",'img_url'=>$fileName]);
        }

        foreach($request->categories as $key=>$category){
            $categories []= [
                'category_id' => $category
            ];
        }
        foreach($request->slugs as $key=>$slug){
            $slugs []= [
                'slug_id' => $slug
            ];
        }



        $post->update($data);
        $post_id = $post->id;

           // Menambahkan 'post_id' ke setiap baris
            $post_category = array_map(function($item) use($post_id) {
                $item['post_id'] = $post_id; // Menambahkan kolom 'post_id'
                return $item;
            }, $categories);
            DB::table('post_categories')->insert($post_category);

            $post_slug = array_map(function($item) use($post_id) {
                $item['post_id'] = $post_id; // Menambahkan kolom 'post_id'
                return $item;
            }, $slugs);
            DB::table('post_slugs')->insert($post_slug);
            // $request->session()->flash('transaction.id', $transaction->id);

        return redirect()->route('posts.index')->with(['success' => 'Data berhasil dihapus!']);
    }

    public function destroy(Request $request, Post $post)
    {
        if(!checkPermission('delete_beritaUmum')){
           abort(403);
        }

            $filePath = public_path('postImage/'.$post->img_url);

        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }

        DB::table('post_categories')->where('post_id',$post->id)->delete();
        DB::table('post_slugs')->where('post_id',$post->id)->delete();

        $post->delete();

        return redirect()->route('posts.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
