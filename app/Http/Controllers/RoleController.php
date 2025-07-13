<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function index(Request $request)
    {
        if(!checkPermission('read_role')){
           abort(403);
        }
        $roles = Role::orderBy('id','DESC')->get();
        return view('role.index', [
            'roles' => $roles,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_role')){
           abort(403);
        }
        $permissions = Permission::get();
        return view('role.create', ['permissions'=>$permissions]);
    }

    public function store(RoleStoreRequest $request)
    {
        if(!checkPermission('create_role')){
           abort(403);
        }
        $role = Role::create($request->validated());

        DB::table('role_permissions')->where('role_id', $role->id)->delete();
          foreach($request->permissions as $key=>$permission){
            $permissions []= [
                'role_id' => $role->id,
                'permission_id' => $permission
            ];
        }
        // dd($permissions);
            DB::table('role_permissions')->insert($permissions);

        return redirect()->route('roles.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Role $role)
    {
                abort(404);

    }

    public function edit(Request $request, Role $role)
    {
        if(!checkPermission('update_role')){
           abort(403);
        }
        $permissions = Permission::get();
        $selectedPermissions = $role->rolePermission->pluck('permission_id')->toArray();
        return view('role.edit', [
            'role' => $role,
            'permissions' =>$permissions,
            'selectedPermissions'=>$selectedPermissions
        ]);
    }

    public function update(RoleUpdateRequest $request, Role $role)
    {
        if(!checkPermission('update_role')){
           abort(403);
        }
        // dd($role->id);
        $permissions = [];
        DB::table('role_permissions')->where('role_id', $role->id)->delete();
          foreach($request->permissions as $key=>$permission){
            $permissions []= [
                'role_id' => $role->id,
                'permission_id' => $permission
            ];
        }
        // dd($permissions);
            DB::table('role_permissions')->insert($permissions);

        $role->update($request->validated());

        $request->session()->flash('role.id', $role->id);

        return redirect()->route('roles.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, Role $role)
    {
        if(!checkPermission('update_role')){
           abort(403);
        }
        DB::table('role_permissions')->where('role_id', $role->id)->delete();

        $role->delete();

        return redirect()->route('roles.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
