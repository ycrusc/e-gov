<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        return "ini dari Controller";
    }

    public function blog($id)
    {
        return "ini dari Controller" . $id;
    }

    public function beranda()
    {
        $data = array('nama' => 'Yohanes Crusc');
        return view('beranda', $data);
    }
}
