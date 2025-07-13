<?php

namespace App\Http\Controllers;

use App\Http\Requests\scheduleStoreRequest;
use App\Http\Requests\scheduleUpdateRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class scheduleController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_agenda')){
           abort(403);
        }
        $schedules = Schedule::orderBy('id','DESC')->get();

        return view('schedule.index', [
            'schedules' => $schedules,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_agenda')){
           abort(403);
        }
        return view('schedule.create');
    }

    public function store(scheduleStoreRequest $request)
    {
        if(!checkPermission('create_agenda')){
           abort(403);
        }
         $fileName = "";
        $file = $request->img_url;
        // dd($file);
             if($file){
            $fileName = "Agenda_".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'ScheduleFile';

            if($fileSize > 5464431){
                dd("File tidak boleh melebih 5mb");
            }
            elseif(!in_array($fileExtention,['pdf'])){
                dd("file harus berformat pdf");
            }
            // dd($file, $fileName, $fileSize, $fileExtention);
            // upload file

            $file->move($tujuan_upload, $fileName);

                }

        $data = array_merge($request->validated(), ['url'=>$fileName]);

        $schedule = Schedule::create($data);

        return redirect()->route('schedules.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, schedule $schedule)
    {
                abort(404);

    }

    public function edit(Request $request, schedule $schedule)
    {
        if(!checkPermission('update_agenda')){
           abort(403);
        }
        return view('schedule.edit', [
            'schedule' => $schedule,
        ]);
    }

    public function update(scheduleUpdateRequest $request, schedule $schedule)
    {
        if(!checkPermission('update_agenda')){
           abort(403);
        }

         $fileName = "";
        $file = $request->img_url;
        // dd($file);
             if($file){
            $fileName = $request->img_url_old ? $request->img_url_old : "Agenda_".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'ScheduleFile';

            if($fileSize > 5464431){
                dd("File tidak boleh melebih 5mb");
            }
            elseif(!in_array($fileExtention,['pdf'])){
                dd("file harus berformat pdf");
            }
            // dd($file, $fileName, $fileSize, $fileExtention);
            // upload file

            $file->move($tujuan_upload, $fileName);

                }

        $data = array_merge($request->validated(), ['url'=>$fileName]);

        $schedule->update($data);

        return redirect()->route('schedules.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, schedule $schedule)
    {
        if(!checkPermission('update_agenda')){
           abort(403);
        }

         $filePath = public_path('ScheduleFile/'.$schedule->url);

        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }
        $schedule->delete();

        return redirect()->route('schedules.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
