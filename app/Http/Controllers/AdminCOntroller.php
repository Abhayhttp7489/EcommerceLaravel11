<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCOntroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function brand()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);
        return view('admin.brands', compact('brands'));
    }
}