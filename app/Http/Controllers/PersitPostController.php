<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\PersitImage;
use App\Models\PersitPost;
use Illuminate\Http\Request;

class PersitPostController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_persitBerita')){
           abort(403);
        }
        $persitPosts = PersitPost::orderBy('id','DESC')->get();

        return view('persitPost.index', [
            'persitPosts' => $persitPosts,
        ]);
    }

    public function create(Request $request)
    {
         if(!checkPermission('create_persitBerita')){
           abort(403);
        }
        return view('persitPost.create');
    }

    public function store(PostStoreRequest $request)
    {
        if(!checkPermission('create_persitBerita')){
           abort(403);
        }
        $fileName = "";
        $req= $request;
        $file = $request->img_url;
             if($file){
            $fileName = "ImagePersitPost".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		    $tujuan_upload = 'ImagePersitPost';
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

        $post = PersitPost::create($data);


            $dataImage = [
                'title' => $req->title,
                'description' => 'Post',
                'url' =>$fileName
            ];
        PersitImage::create($dataImage);

        return redirect()->route('persit-posts.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, PersitPost $persitPost)
    {
                abort(404);

    }

    public function edit(Request $request, PersitPost $persitPost)
    {
        if(!checkPermission('update_persitBerita')){
           abort(403);
        }

        return view('persitPost.edit',
    [
        'persitPost' => $persitPost
    ]);
    }

    public function update(PostUpdateRequest $request, PersitPost $persitPost)
    {
        if(!checkPermission('update_persitBerita')){
           abort(403);
        }
         // dd($request->all());
        $categories = [];
        $slugs = [];
        $fileName = $request->img_url_old;
        $req= $request;
        $file = $request->img_url;
             if($file){
             $fileName = $request->img_url_old != "" ? $request->img_url_old : "ImagePersitPost".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		    $tujuan_upload = 'ImagePersitPost';
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

        $persitPost->update($data);

        return redirect()->route('persit-posts.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, PersitPost $persitPost)
    {
        if(!checkPermission('delete_persitBerita')){
           abort(403);
        }

            $filePath = public_path('ImagePersitPost/'.$persitPost->img_url);

        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }
        PersitImage::where('url', $persitPost->img_url)->delete();

        $persitPost->delete();

        return redirect()->route('persit-posts.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
