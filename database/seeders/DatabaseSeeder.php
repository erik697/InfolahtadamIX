<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

          $permissions = [
    ["name" => "create_kategori"],
    ["name" => "read_kategori"],
    ["name" => "update_kategori"],
    ["name" => "delete_kategori"],
   
    ["name" => "create_kategoriBarang"],
    ["name" => "read_kategoriBarang"],
    ["name" => "update_kategoriBarang"],
    ["name" => "delete_kategoriBarang"],
    
    ["name" => "create_feedback"],
    ["name" => "read_feedback"],
    ["name" => "update_feedback"],
    ["name" => "delete_feedback"],

    ["name" => "create_galleryGambar"],
    ["name" => "read_galleryGambar"],
    ["name" => "update_galleryGambar"],
    ["name" => "delete_galleryGambar"],

    ["name" => "create_galleryVideo"],
    ["name" => "read_galleryVideo"],
    ["name" => "update_galleryVideo"],
    ["name" => "delete_galleryVideo"],

    ["name" => "create_persitGambar"],
    ["name" => "read_persitGambar"],
    ["name" => "update_persitGambar"],
    ["name" => "delete_persitGambar"],
    
    ["name" => "create_persitBerita"],
    ["name" => "read_persitBerita"],
    ["name" => "update_persitBerita"],
    ["name" => "delete_persitBerita"],
    
    ["name" => "create_pejabat"],
    ["name" => "read_pejabat"],
    ["name" => "update_pejabat"],
    ["name" => "delete_pejabat"],

    ["name" => "create_beritaUmum"],
    ["name" => "read_beritaUmum"],
    ["name" => "update_beritaUmum"],
    ["name" => "delete_beritaUmum"],
    
    ["name" => "create_barang"],
    ["name" => "read_barang"],
    ["name" => "update_barang"],
    ["name" => "delete_barang"],
    
    ["name" => "create_report"],
    ["name" => "read_report"],
    ["name" => "update_report"],
    ["name" => "delete_report"],
    
    ["name" => "create_role"],
    ["name" => "read_role"],
    ["name" => "update_role"],
    ["name" => "delete_role"],

    ["name" => "create_agenda"],
    ["name" => "read_agenda"],
    ["name" => "update_agenda"],
    ["name" => "delete_agenda"],
    
    ["name" => "create_tags"],
    ["name" => "read_tags"],
    ["name" => "update_tags"],
    ["name" => "delete_tags"],


    ["name" => "create_user"],
    ["name" => "read_user"],
    ["name" => "update_user"],
    ["name" => "delete_user"],

    ["name" => "create_gudang"],
    ["name" => "read_gudang"],
    ["name" => "update_gudang"],
    ["name" => "delete_gudang"],
    
    ["name" => "create_permission"],
    ["name" => "read_permission"],
    ["name" => "update_permission"],
    ["name" => "delete_permission"],
            ];
            DB::table('permissions')->insert($permissions);

           $getPermissions = Permission::get();
           $role = Role::factory()->create([
            'name' => 'super admin'
           ]);

           foreach($getPermissions as $item){
            RolePermission::factory()->create([
                'role_id' => $role->id,
                'permission_id' => $item->id
            ]);
           }

    User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'infolahtaAdmin@infolahta.com',
            'password' => '12345678',
            'role_id' => $role->id,
        ]);

        Permission::factory()->create([
            'name' => 'kelola_barang_gudang'
           ]);

         $wherehouses = [
    [
        'id' => 4,
        "user_id" => null,
    "title" => "TUUD"],
    [
        'id' => 5,
        "user_id" => null,
    "title" => "Gudang"],
    [
        'id' => 6,
        "user_id" => null,
    "title" => "Multimedia"],
    [
        'id' => 7,
        "user_id" => null,
    "title" => "Sisfomin"],
    [
        'id' => 8,
        "user_id" => null,
    "title" => "Masisfo"],
    [
        'id' => 9,
        "user_id" => null,
    "title" => "R.Server"],
    [
        'id' => 10,
        "user_id" => null,
    "title" => "Disinfolahta"],
    [
        'id' => 11,
        "user_id" => null,
    "title" => "Duklahta"],
    [
        'id' => 12,
        "user_id" => null,
    "title" => "Sisfoops"],
    [
        'id' => 13,
        "user_id" => null,
    "title" => "Spri"],
         ];
        
            DB::table('wherehouses')->insert($wherehouses);

        $positions = [
            [
                "position_id" => null,
                "name" => "Kainfolahta"
            ],
            [
                "position_id" => null,
                "name" => "Waka"
            ],
            [
                "position_id" => null,
                "name" => "Kasi Binsisfomin"
            ],
            [
                "position_id" => null,
                "name" => "Kasi Binsisfoops"
            ],
            [
                "position_id" => null,
                "name" => "Kasi Binmatsisfo"
            ],
            [
                "position_id" => null,
                "name" => "Kasi Duklahta"
            ],
            [
                "position_id" => null,
                "name" => "Kasi TUUD"
            ],
            [
                "position_id" => null,
                "name" => "Katim Bekharlap"
            ],
            [
                "position_id" => null,
                "name" => "Katim Multimedia"
            ],
            ];

            DB::table('positions')->insert($positions);

        
    }

    

}
