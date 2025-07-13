<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductLog;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        if(!checkPermission('read_report')){
           abort(403);
        }
        if(checkPermission('kelola_barang_gudang')){
            $reports = Report::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get();
        }
        else{
            $reports = Report::orderBy('id','DESC')->get();
        }

        return view('report.index', [
            'reports' => $reports,
        ]);
    }

    public function create(Request $request)
    {
        if(!checkPermission('create_report')){
           abort(403);
        }
 
        if(checkPermission('kelola_barang_gudang')){
        $products = Product::whereIn('wherehouse_id', userWherehouse())->orderBy('id','DESC')->get();
        }
        else{
        $products = Product::orderBy('id','DESC')->get();

        }
        return view('report.create',
    [
        'products' => $products,

    ]);
    }

    public function store(Request $request)
    {
        if(!checkPermission('create_report')){
           abort(403);
        }
        Product::where('id', $request->product_id)->update(['status' => 'RR']);
        $product = Product::where('id', $request->product_id)->first();

        $data = [
            'user_id'=>Auth::user()->id,
        'product_id'=>$request->product_id,
        'status'=>"Pending",
        'message'=>$request->message,
        'img_url'=>"",
        ];
        Report::create($data);

          $data2 = [
            'user_id'=>Auth::user()->id,
        'product_id'=>$product->id,
        'wherehouse_id'=>$product->wherehouse_id,
        'description'=>"Status Barang Berubah menjadi  ".".Ket : ".$request->message,
        ];
        ProductLog::create($data2);

        return redirect()->route('reports.index')->with(['success' => 'Data berhasil ditambahkan!']);
    }

    public function show(Request $request, Product $product)
    {
               abort(404);

    }

    public function edit(Request $request, Report $report)
    {
        if(!checkPermission('update_report')){
           abort(403);
        }
        return view('report.edit', [
            'report' => $report
        ]);
    }

    public function update(Request $request, Report $report)
    {
        if(!checkPermission('update_report')){
           abort(403);
        }
        Product::where('id', $report->product_id)->update(['status' => $request->status]);
        $product = Product::where('id', $report->product_id)->first();

        // dd($report);

         $fileName = "";
        $file = $request->img_url;
        // dd($file);
             if($file){
            $fileName = "ImageGallery".date('Y-m-d-H-i-s').".".$file->extension();
            $fileSize = $file->getSize();
            $fileExtention = $file->extension();
		     $tujuan_upload = 'postImage';

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

        $data = [
            'user_id'=>Auth::user()->id,
        'status'=>"Done",
        'img_url'=>$fileName,
        ];
        Report::where('id', $report->id)->update($data);

        $data2 = [
        'user_id'=>Auth::user()->id,
        'product_id'=>$product->id,
        'wherehouse_id'=>$product->wherehouse_id,
        'description'=>"Status Barang Berubah menjadi  ".".Ket : ".$request->message,
        ];
        ProductLog::create($data2);

        return redirect()->route('products.show', $product->id);
    }

    public function destroy(Request $request, Report $report)
    {
        if(!checkPermission('delete_report')){
           abort(403);
        }
        $report->delete();

        return redirect()->route('reports.index')->with(['success' => 'Data berhasil dihapus!']);

    }
}
