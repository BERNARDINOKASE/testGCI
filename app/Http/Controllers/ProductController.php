<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts()
    {
        $data = Products::all();
        dd($data);
    }
}
