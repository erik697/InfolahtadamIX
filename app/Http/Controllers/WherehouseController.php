<?php

namespace App\Http\Controllers;

use App\Http\Requests\WherehouseStoreRequest;
use App\Http\Requests\WherehouseUpdateRequest;
use App\Models\User;
use App\Models\Wherehouse;
use Illuminate\Http\Request;

class WherehouseController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_gudang')){
           abort(403);
        }
        if(checkPermission('kelola_barang_gudang')){
            $wherehouses = Wherehouse::whereIn('id', userWherehouse())->orderBy('id','DESC')->get();
        }
        else{
            $wherehouses = Wherehouse::orderBy('id','DESC')->get();
        }

        return view('wherehouse.index', [
            'wherehouses' => $wherehouses,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('update_gudang')){
           abort(403);
        }
        $users = User::get();
        return view('wherehouse.create',['users' => $users]);
    }

    public function store(WherehouseStoreRequest $request)
    {
        if(!checkPermission('update_gudang')){
           abort(403);
        }
        $wherehouse = Wherehouse::create($request->validated());

        return redirect()->route('wherehouses.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Wherehouse $wherehouse)
    {
                abort(404);

    }

    public function edit(Request $request, Wherehouse $wherehouse)
    {
        if(!checkPermission('update_gudang')){
           abort(403);
        }
        $users = User::get();

        return view('wherehouse.edit', [
            'wherehouse' => $wherehouse,
            'users' => $users
        ]);
    }

    public function update(WherehouseUpdateRequest $request, Wherehouse $wherehouse)
    {
        if(!checkPermission('update_gudang')){
           abort(403);
        }
        $wherehouse->update($request->validated());

        return redirect()->route('wherehouses.index')->with(['success' => 'Data berhasil dirubah!']);
    }

    public function destroy(Request $request, Wherehouse $wherehouse)
    {
        if(!checkPermission('delete_gudang')){
           abort(403);
        }
        $wherehouse->delete();

        return redirect()->route('wherehouses.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
