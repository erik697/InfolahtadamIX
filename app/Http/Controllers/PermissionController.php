<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionStoreRequest;
use App\Http\Requests\PermissionUpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
         if(!checkPermission('read_permission')){
           abort(403);
        }
        $permissions = Permission::orderBy('id','DESC')->get();

        return view('permission.index', [
            'permissions' => $permissions,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_permission')){
           abort(403);
        }
        $roles = Role::get();
        return view('permission.create', ['roles'=>$roles]);
    }

    public function store(PermissionStoreRequest $request)
    {
        if(!checkPermission('create_permission')){
           abort(403);
        }
        $permission = Permission::create($request->validated());

        return redirect()->route('permissions.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Permission $permission)
    {
                abort(404);

    }

    public function edit(Request $request, Permission $permission)
    {
        if(!checkPermission('update_permission')){
           abort(403);
        }
        return view('permission.edit', [
            'permission' => $permission,
        ]);
    }

    public function update(PermissionUpdateRequest $request, Permission $permission)
    {
        if(!checkPermission('update_permission')){
           abort(403);
        }
        $permission->update($request->validated());

        return redirect()->route('permissions.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, Permission $permission)
    {
        if(!checkPermission('delete_permission')){
           abort(403);
        }
        $permission->delete();

        return redirect()->route('permissions.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
