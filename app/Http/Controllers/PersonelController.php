<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonelStoreRequest;
use App\Http\Requests\PersonelUpdateRequest;
use App\Models\Personel;
use App\Models\Position;
use Illuminate\Http\Request;

class PersonelController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_pejabat')){
           abort(403);
        }
        $personels = Personel::orderBy('id','DESC')->get();

        return view('personel.index', [
            'personels' => $personels,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_pejabat')){
           abort(403);
        }
        $positions = Position::get();
        return view('personel.create', ['positions'=>$positions]);
    }

    public function store(PersonelStoreRequest $request)
    {
        if(!checkPermission('create_pejabat')){
           abort(403);
        }

          $fileName = "";
        $file = $request->img_url;
        // dd($file);
             if($file){
            $fileName = "ImagePersonel".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'Personel/';

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

        $data = array_merge($request->validated(), ['img_url'=>$fileName]);

        $personel = Personel::create($data);

        return redirect()->route('personels.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Personel $personel)
    {
                abort(404);

    }

    public function edit(Request $request, Personel $personel)
    {
        if(!checkPermission('update_pejabat')){
           abort(403);
        }
        $positions = Position::get();
        return view('personel.edit', [
            'personel' => $personel,
            'positions'=>$positions
        ]);
    }

    public function update(PersonelUpdateRequest $request, Personel $personel)
    {
        if(!checkPermission('update_pejabat')){
           abort(403);
        }
          $fileName = "";
        $file = $request->img_url;
        // dd($file);
             if($file){
            $fileName = $request->img_url_old != "" ? $request->img_url_old : "ImagePersonel".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'Personel/';

            if($fileSize > 5464431){
                dd("File tidak boleh melebih 5mb");
            }
            elseif(!in_array($fileExtention,['jpg','png','jpeg'])){
                dd("file harus berformat jpg,png atau jpeg");
            }
            // dd($file, $fileName, $fileSize, $fileExtention);
            // upload file

            $file->move($tujuan_upload, $fileName);
        $data = array_merge($request->validated(), ['img_url'=>$fileName]);

                }
            else{
                    $data = $request->validated();

                }
        
        $personel->update($data);

        return redirect()->route('personels.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, Personel $personel)
    {
        if(!checkPermission('delete_pejabat')){
           abort(403);
        }
        $filePath = public_path('Personel/'.$personel->img_url);

        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }

        $personel->delete();

        return redirect()->route('personels.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
