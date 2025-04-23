<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return Product::get();
    }

    public function show(Request $request)
    {
        $Id = $request->id;
        return Product::find($Id);
    }

    function store(Request $request){

        return Product::create($request->input());


    }
}
