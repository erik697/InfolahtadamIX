<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Imports\ProductsImport;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductLog;
use App\Models\Wherehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_barang')){
           abort(403);
        }

        if(checkPermission('kelola_barang_gudang')){
        $products = Product::whereIn('wherehouse_id', userWherehouse())->orderBy('id','DESC')->get();
        }
        else{
        $products = Product::orderBy('id','DESC')->get();

        }

        return view('product.index', [
            'products' => $products,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_barang')){
           abort(403);
        }
        $categoryProducts = CategoryProduct::where('parent_id','!=' ,null)->get();
        $wherehouses = Wherehouse::get();
        return view('product.create',
    [
        'categoryProducts' => $categoryProducts,
        'wherehouses' => $wherehouses,

    ]);
    }

    public function store(ProductStoreRequest $request)
    {
        if(!checkPermission('create_barang')){
           abort(403);
        }
        $product = Product::create($request->validated());

        $data = [
            'user_id'=>Auth::user()->id,
        'product_id'=>$product->id,
        'wherehouse_id'=>$request->wherehouse_id,
        'description'=>"Produk berhasil ditambahkan dengan status ".$request->status.".Ket : ".$request->description,
        ];
        ProductLog::create($data);

        return redirect()->route('products.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Product $product)
    {
        if(!checkPermission('read_barang')){
           abort(403);
        }
        return view('product.show', [
            'product' => $product,
        ]);
    }

    public function edit(Request $request, Product $product)
    {
        if(!checkPermission('update_barang')){
           abort(403);
        }
        $categoryProducts = CategoryProduct::where('parent_id','!=' ,null)->get();
        $wherehouses = Wherehouse::get();
        return view('product.edit', [
            'product' => $product,
            'categoryProducts' => $categoryProducts,
            'wherehouses' => $wherehouses,
        ]);
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        if(!checkPermission('update_barang')){
           abort(403);
        }
        if($product->status != $request->status && $product->wherehouse_id != $request->wherehouse_id){
            $wherehouse = Wherehouse::where('id',$request->wherehouse_id)->first();
            $description = "Status Produk Berubah dari ".$product->status." menjadi ".$request->status." dan "."Produk berpindah dari ".$product->wherehouse->title. " ke ".$wherehouse->title.".ket : ".$request->description;
        }
        if($product->status != $request->status){
            $description = "Status Produk Berubah  dari ".$product->status." menjadi ".$request->status.".ket : ".$request->description;
        }
        else if($product->wherehouse_id != $request->wherehouse_id){
            $wherehouse = Wherehouse::where('id',$request->wherehouse_id)->first();
            $description = "Produk berpindah dari ".$product->wherehouse->title. " ke ".$wherehouse->title.".ket : ".$request->description;
        }
        else{
             $description = "Data Penting Produk tidak ada yang berubah".".ket : ".$request->description;;
        }
        $product->update($request->validated());

           $data = [
            'user_id'=>Auth::user()->id,
            'product_id'=>$product->id,
            'wherehouse_id'=>$request->wherehouse_id,
            'description'=>$description,
            ];
        ProductLog::create($data);

        return redirect()->route('products.index')->with(['success' => 'Data berhasil diupdate!']);
    }

    public function destroy(Request $request, Product $product)
    {
        if(!checkPermission('delete_barang')){
           abort(403);
        }
        $product->delete();

        return redirect()->route('products.index')->with(['success' => 'Data berhasil dihapus!']);
    }

      public function importExcel(Request $request)
    {
        if(!checkPermission('create_barang')){
           abort(403);
        }
        return view('product.import');
    }

    public function importExcelProcess(Request $request)
    {
        if(!checkPermission('create_barang')){
           abort(403);
        }
        	// menangkap file excel
		$file = $request->file('excel');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('importFile',$nama_file);
 
		// import data
		Excel::import(new ProductsImport, public_path('/importFile/'.$nama_file));
                
        return redirect()->route('products.index')->with(['success' => 'Data berhasil diimport!']);

    }

    //   public function exportExcel(Request $request)
    // {
    //     return view('product.export');
    // }

    public function exportExcelProcess(Request $request)
    {
        if(!checkPermission('read_barang')){
           abort(403);
        }
        return Excel::download(new ProductsExport, 'users.xlsx');
    }
}
