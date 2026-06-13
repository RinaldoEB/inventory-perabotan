<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Tampilkan semua produk
    public function index()
    {
        $products = Product::latest()->paginate(10);
        $totalStok = Product::sum('stok');
        $lowStock = Product::where('stok', '<=', 5)->count();
        $totalNilai = Product::selectRaw('SUM(harga_jual * stok) as total')->value('total');

        return view('products.index', compact('products', 'totalStok', 'lowStock', 'totalNilai'));
    }

    // Tampilkan form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:products',
            'nama'        => 'required',
            'harga_beli'  => 'required|numeric',
            'harga_jual'  => 'required|numeric',
            'stok'        => 'required|integer',
        ]);

        Product::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Tampilkan form edit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update produk
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'kode_barang' => 'required|unique:products,kode_barang,' . $product->id,
            'nama'        => 'required',
            'harga_beli'  => 'required|numeric',
            'harga_jual'  => 'required|numeric',
            'stok'        => 'required|integer',
        ]);

        $product->update($request->all());

        return redirect()->route('dashboard')->with('success', 'Produk berhasil diupdate!');
    }

    // Hapus produk
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Produk berhasil dihapus!');
    }
}
