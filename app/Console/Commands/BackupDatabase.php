<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class BackupDatabase extends Command
{
    protected $signature = 'db:backup';
    protected $description = 'Backup database secara manual tanpa plugin';

    public function handle()
    {
        $filename = 'backup_' . Carbon::now()->format('Ymd_His') . '.sql';
        $path = storage_path('app/backups'); // direktori backup
        $fullPath = $path . '/' . $filename;

        // Pastikan folder backup ada
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        // Ambil konfigurasi database dari .env
        $db = config('database.connections.mysql');
        $command = "mysqldump --user={$db['username']} --password=\"{$db['password']}\" --host={$db['host']} {$db['database']} > {$fullPath}";

        $returnVar = null;
        $output = null;

        exec($command . ' 2>&1', $output, $returnVar);

if ($returnVar !== 0) {
    $this->error("❌ Backup gagal. Output:");
    foreach ($output as $line) {
        $this->error($line);
    }
} else {
    $this->info("✅ Backup berhasil: {$fullPath}");
}
    }
}
