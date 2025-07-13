<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryVideoStoreRequest;
use App\Http\Requests\GalleryVideoUpdateRequest;
use App\Models\GalleryVideo;
use Illuminate\Http\Request;

class GalleryVideoController extends Controller
{

    public function index(Request $request)
    {
        if(!checkPermission('read_galleryVideo')){
           abort(403);
        }
        $galleryVideos = GalleryVideo::orderBy('id','DESC')->get();

        return view('galleryVideo.index', [
            'galleryVideos' => $galleryVideos,
        ]);
    }

    public function create(Request $request)
    {
         if(!checkPermission('create_galleryVideo')){
           abort(403);
        }
        return view('galleryVideo.create');
    }

    public function store(GalleryVideoStoreRequest $request)
    {
        if(!checkPermission('create_galleryVideo')){
           abort(403);
        }
         $fileName = "";
        $file = $request->img_url;
             if($file){
            $fileName = "VideoGallery".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'Gallery/Videos';

            if($fileSize > 54644310){
                dd("File tidak boleh melebih 50mb");
            }
            elseif(!in_array($fileExtention,['mp4'])){
                dd("file harus berformat mp4");
            }
            // dd($file, $fileName, $fileSize, $fileExtention);
            // upload file

            $file->move($tujuan_upload, $fileName);

                }

        $data = array_merge($request->validated(), ['url'=>$fileName]);


        $galleryVideo = GalleryVideo::create($data);

        return redirect()->route('gallery-videos.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, GalleryVideo $galleryVideo)
    {
                abort(404);

    }

    public function edit(Request $request, GalleryVideo $galleryVideo)
    {
        if(!checkPermission('update_galleryVideo')){
           abort(403);
        }
        return view('galleryVideo.edit', [
            'galleryVideo' => $galleryVideo,
        ]);
    }

    public function update(GalleryVideoUpdateRequest $request, GalleryVideo $galleryVideo)
    {  
        if(!checkPermission('update_galleryVideo')){
           abort(403);
        }
         $fileName = "";
        $file = $request->img_url;
        // dd($file);
        // dd($request->img_url_old);
             if($file){
            $fileName = $request->img_url_old;
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'Gallery/Videos';

            if($fileSize > 54644310){
                dd("File tidak boleh melebih 50mb");
            }
            if(!in_array($fileExtention,['mp4'])){
                dd("file harus berformat mp4");
            }
            
            // dd($file, $fileName, $fileSize, $fileExtention);
            // upload file

            $file->move($tujuan_upload, $fileName);
            $data = [
                'title'=>$request->title,
                'description'=>$request->description,
                'url'=>$fileName];

                }
                else{
                $data = [
                'title'=>$request->title,
                'description'=>$request->description
            ];

                }


        $galleryVideo->update($data);

        return redirect()->route('gallery-videos.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, GalleryVideo $galleryVideo)
    {
        if(!checkPermission('delete_galleryVideo')){
           abort(403);
        }
         $filePath = public_path('Gallery/Videos/'.$galleryVideo->url);

        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }
        $galleryVideo->delete();

        return redirect()->route('gallery-videos.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
