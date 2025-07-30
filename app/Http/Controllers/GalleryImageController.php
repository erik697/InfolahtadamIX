<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryImageStoreRequest;
use App\Http\Requests\GalleryImageUpdateRequest;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{


    public function index(Request $request)
    {
        if(!checkPermission('read_galleryGambar')){
           abort(403);
        }
        $galleryImages = GalleryImage::orderBy('id','DESC')->get();

        return view('galleryImage.index', [
            'galleryImages' => $galleryImages,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_galleryGambar')){
           abort(403);
        }
        return view('galleryImage.create');
    }

    public function store(GalleryImageStoreRequest $request)
    {
         if(!checkPermission('create_galleryGambar')){
           abort(403);
        }
         $fileName = "";
        $file = $request->img_url;
        // dd($file);
             if($file){
            $fileName = "ImageGallery".date('Y-m-d-H-i-s').".".$file->extension();
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

        $data = array_merge($request->validated(), ['url'=>$fileName]);


        $galleryImage = GalleryImage::create($data);

        return redirect()->route('gallery-images.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, GalleryImage $galleryImage)
    {
               abort(404);

    }

    public function edit(Request $request, GalleryImage $galleryImage)
    {
         if(!checkPermission('update_galleryGambar')){
           abort(403);
        }
        return view('galleryImage.edit', [
            'galleryImage' => $galleryImage,
        ]);
    }

    public function update(GalleryImageUpdateRequest $request, GalleryImage $galleryImage)
    {
        if(!checkPermission('update_galleryGambar')){
                abort(403);
                }
         $fileName = "";
        $file = $request->img_url;
        // dd($file);
        // dd($request->img_url_old);
             if($file){
            $fileName = "ImageGallery".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'postImage';

            if($fileSize > 5464431){
                dd("File tidak boleh melebih 5mb");
            }
            if(!in_array($fileExtention,['jpg','png','jpeg'])){
                dd("file harus berformat jpg,png atau jpeg");
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


        $galleryImage->update($data);
            // dd("Y");

        return redirect()->route('gallery-images.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, GalleryImage $galleryImage)
    {
        if(!checkPermission('delete_galleryGambar')){
           abort(403);
        }
        $filePath = public_path('postImage/'.$galleryImage->url);

        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }
        $galleryImage->delete();

        return redirect()->route('gallery-images.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
