@extends('layouts.app')
@section('title', 'Edit Produk')

@section('content')
<div class="max-w-2xl">
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-8">

        @if ($errors->any())
            <div class="mb-6 bg-red-50 border border-red-200 text-red-600 text-sm px-4 py-3 rounded-lg">
                @foreach ($errors->all() as $error)
                    <p>• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('products.update', $product) }}" class="space-y-5">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm text-gray-600 mb-1.5">Nama Produk</label>
                    <input type="text" name="nama" value="{{ old('nama', $product->nama) }}"
                           class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1.5">Kode Barang</label>
                    <input type="text" name="kode_barang" value="{{ old('kode_barang', $product->kode_barang) }}"
                           class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1.5">Harga Beli</label>
                    <input type="number" name="harga_beli" value="{{ old('harga_beli', $product->harga_beli) }}"
                           class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1.5">Harga Jual</label>
                    <input type="number" name="harga_jual" value="{{ old('harga_jual', $product->harga_jual) }}"
                           class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1.5">Stok</label>
                    <input type="number" name="stok" value="{{ old('stok', $product->stok) }}"
                           class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label class="block text-sm text-gray-600 mb-1.5">Stok Minimum</label>
                    <input type="number" name="stok_minimum" value="{{ old('stok_minimum', $product->stok_minimum) }}"
                           class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
            </div>

            <div>
                <label class="block text-sm text-gray-600 mb-1.5">Deskripsi (opsional)</label>
                <textarea name="deskripsi" rows="3"
                          class="w-full px-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('deskripsi', $product->deskripsi) }}</textarea>
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                    Update Produk
                </button>
                <a href="{{ route('dashboard') }}"
                   class="px-6 py-2.5 rounded-lg text-sm font-medium text-gray-600 border border-gray-300 hover:bg-gray-50 transition-colors">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
