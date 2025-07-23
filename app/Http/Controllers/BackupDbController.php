<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class BackupDbController extends Controller
{
    public function index () {
    $path = storage_path('app/backups');

    if (!File::exists($path)) {
        return "Folder backup tidak ditemukan.";
    }

    $files = File::files($path);

    $data = collect($files)->map(function ($file) {
        return [
            'nama_file' => $file->getFilename(),
            'ukuran_kb' => round($file->getSize() / 1024, 2),
            'terakhir_diubah' => date('Y-m-d H:i:s', $file->getMTime()),
        ];
    });

    return view('backups.index', ['data' => $data]);
    
}

public function download ($id) {
    $path = storage_path("app/backups/{$id}");

    if (!file_exists($path)) {
        abort(404, 'File tidak ditemukan.');
    }

    return response()->download($path);
}
public function add () {

    // Ambil output dari command
        Artisan::call('db:backup');

        // Ambil output dari command
        $output = Artisan::output();

        return response()->json([
            'message' => 'Perintah backup dijalankan.',
            'output' => $output
        ]);
        dd($output);
    return redirect()->route('backup.index');
}
}
