<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data ['nama'] = "Tri Andini";
        $data ['jk'] = "Perempuan";
        return view('belajar', $data);
    }

public function create()
{
    return view ('produk.form');
}
public function show()
{
    return view ('produk.show');
}
public function store(Request $request)
{
    $rules = [
        'kategori_produk' => 'required',
        'nama_produk' => 'required|alpha',
        'harga_produk' => 'required|numeric|min:1000',
        'stok' => 'min:1'
    ];
    $this->validate($request, $rules);
    $data = $request->all();
    return view('produk.show', $data);
}
}