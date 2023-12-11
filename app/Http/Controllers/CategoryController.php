<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Kategori Produk');
        return view('kategori.index', $data);
    }

    public function create()
    {
        $data = array('title' => 'Form Produk');
        return view('kategori.create', $data);
    }

    public function edit($id)
    {
        $data = array('title' => 'Form Edit Produk');
        return view('kategori.edit', $data);
    }
}
