<?php

namespace App\Http\Controllers;

use App\Models\WasteCategory;
use App\Models\Merchandise;

class ProductController extends Controller
{
    public function index()
    {
        $categories = WasteCategory::all();
        $merchandises = Merchandise::all();
        return view('product', compact('categories', 'merchandises'));
    }
}