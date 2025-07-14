<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

     protected $status;

    // Constructor untuk menerima parameter
    public function __construct($status)
    {
        $this->status = $status;
    }

    public function collection()
    {
        if($this->status){

            return Product::select('products.name','childs.title as category_name','parent.title as parent_name','products.year','products.status','wherehouses.title as wherehouse_name','products.description')->join('wherehouses','wherehouses.id','=','products.wherehouse_id')->join('category_products as childs','childs.id','=','products.category_product_id')->join('category_products as parent','childs.parent_id','=','parent.id')->where('status',$this->status)->get();
        }
        else{
            return Product::select('products.name','childs.title as category_name','parent.title as parent_name','products.year','products.status','wherehouses.title as wherehouse_name','products.description')->join('wherehouses','wherehouses.id','=','products.wherehouse_id')->join('category_products as childs','childs.id','=','products.category_product_id')->join('category_products as parent','childs.parent_id','=','parent.id')->get();

        }
    }

      public function headings(): array
    {
        return ["Jenis Material", "Merk/Type", "Kategori","Tahun Peroleh", "Kondisi","Penyimpanan","Ket." ];
    }
}
