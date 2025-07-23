<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(Request $request)
    {
        if(!checkPermission('read_user')){
           abort(403);
        }
        $users = User::orderBy('id','DESC')->get();

        return view('user.index', [
            'users' => $users,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_user')){
           abort(403);
        }
        $roles = Role::get();
        return view('user.create',['roles'=>$roles]);
    }

    public function store(Request $request)
    {
        if(!checkPermission('create_user')){
           abort(403);
        }
        $category = User::create($request->all());

        return redirect()->route('users.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, User $user)
    {
                abort(404);

    }

    public function edit(Request $request, User $user)
    {
        if(!checkPermission('update_user')){
           abort(403);
        }
        $roles = Role::get();

        return view('user.edit', [
            'user' => $user,
            'roles'=>$roles,
        ]);
    }

    public function update(Request $request, User $user)
    {
        if(!checkPermission('update_user')){
           abort(403);
        }
        if($request->password != ""){
        $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $request->role_id
        ];
        
        }
        else{

            $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id
        ];
        }
        $user->update($data);

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('users.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, User $user)
    {
        if(!checkPermission('delete_user')){
           abort(403);
        }
        $user->delete();

        return redirect()->route('users.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
