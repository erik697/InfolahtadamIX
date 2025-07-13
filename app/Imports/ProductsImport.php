<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
           'name'    => $row[0], 
           'category_product_id'    => $row[1], 
           'wherehouse_id'    => $row[2], 
           'serial_number'    => $row[3], 
           'status'    => $row[4], 
           'year'    => $row[5], 
           'description'     => $row[6],
        ]);
    }
}
