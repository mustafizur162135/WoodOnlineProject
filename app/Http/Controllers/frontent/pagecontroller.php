<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;


class pagecontroller extends Controller
{
    
    public function index()
    {
        $products = product::all();
        return view('frontent.pages.index', compact('products'));
        //print_r(product::all(category::class));
        // print_r($this->belongsTo(category::class));

    }
}
