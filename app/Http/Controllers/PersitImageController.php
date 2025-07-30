<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryImageStoreRequest;
use App\Http\Requests\GalleryImageUpdateRequest;
use App\Models\PersitImage;
use Illuminate\Http\Request;

class PersitImageController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_persitGambar')){
           abort(403);
        }
        $persitImages = PersitImage::orderBy('id','DESC')->get();

        return view('persitImage.index', [
            'persitImages' => $persitImages,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_persitGambar')){
           abort(403);
        }
        return view('persitImage.create');
    }

    public function store(GalleryImageStoreRequest $request)
    {
         if(!checkPermission('create_persitGambar')){
           abort(403);
        }
         $fileName = "";
        $file = $request->img_url;
        // dd($file);
             if($file){
            $fileName = "ImageGallery".date('Y-m-d-H-i-s').".".$file->extension();
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

        $data = array_merge($request->validated(), ['url'=>$fileName]);


        $persitImage = PersitImage::create($data);

        return redirect()->route('persit-images.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function edit(Request $request, PersitImage $persitImage)
    {
         if(!checkPermission('update_persitGambar')){
           abort(403);
        }
        return view('persitImage.edit', [
            'persitImage' => $persitImage,
        ]);
    }

    public function update(GalleryImageUpdateRequest $request, PersitImage $persitImage)
    {
        if(!checkPermission('update_persitGambar')){
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
		     $tujuan_upload = 'ImagePersitPost';

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


        $persitImage->update($data);
            // dd("Y");

        return redirect()->route('persit-images.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, PersitImage $persitImage)
    {
        if(!checkPermission('delete_persitGambar')){
           abort(403);
        }
        $filePath = public_path('ImagePersitPost/'.$persitImage->url);

        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }
        $persitImage->delete();

        return redirect()->route('persit-images.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
