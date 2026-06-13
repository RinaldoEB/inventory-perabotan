@extends('layouts.app')
@section('title', 'Inventory')

@section('content')

{{-- Metric Cards --}}
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Total Produk</p>
        <h2 class="text-3xl font-bold text-gray-800">{{ $products->total() }}</h2>
    </div>
    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Total Stok</p>
        <h2 class="text-3xl font-bold text-gray-800">{{ number_format($totalStok) }}</h2>
    </div>
    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Nilai Stok</p>
        <h2 class="text-3xl font-bold text-gray-800">Rp {{ number_format($totalNilai, 0, ',', '.') }}</h2>
    </div>
    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm border-l-4 border-l-red-500">
        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Stok Menipis</p>
        <h2 class="text-3xl font-bold text-red-500">{{ $lowStock }}</h2>
        <p class="text-xs text-red-400 mt-2 font-medium">Perlu perhatian</p>
    </div>
</div>

{{-- Tabel Produk --}}
<div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-base font-semibold text-gray-800">Daftar Produk</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Nama Produk</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Kode</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Harga Beli</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Harga Jual</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-400 uppercase">Stok</th>
                    <th class="px-6 py-3 text-xs font-semibold text-gray-400 uppercase text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($products as $product)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-gray-800">{{ $product->nama }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $product->kode_barang }}</td>
                    <td class="px-6 py-4 text-gray-600">Rp {{ number_format($product->harga_beli, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 text-gray-600">Rp {{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        @if ($product->stok <= $product->stok_minimum)
                            <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-700">
                                Menipis ({{ $product->stok }})
                            </span>
                        @else
                            <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-blue-50 text-blue-600">
                                Tersedia ({{ $product->stok }})
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('products.edit', $product) }}"
                               class="p-1.5 text-gray-400 hover:text-blue-600 transition-colors">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </a>
                            <form method="POST" action="{{ route('products.destroy', $product) }}"
                                  onsubmit="return confirm('Yakin hapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-1.5 text-gray-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-gray-400 text-sm">
                        Belum ada produk. Tambah produk pertama kamu!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if ($products->hasPages())
    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
        {{ $products->links() }}
    </div>
    @endif
</div>

@endsection
