<x-layout>
    <h1>Daftar Produk</h1>
    <p>Berikut adalah katalog barang yang kami jual:</p>

    <!-- Membungkus daftar produk agar rapi -->
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;">
        
       <!-- Looping data produk dari Controller -->
        @foreach ($products as $product)
            <div style="border: 1px solid #ccc; padding: 15px; width: 250px; border-radius: 8px;">
                
                <!-- TAMPILKAN GAMBAR DI SINI -->
                @if($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px; margin-bottom: 10px;">
                @endif

                <h3 style="margin-top: 0;">{{ $product->name }}</h3>
                
                <p style="color: gray; font-size: 14px;">
                    Kategori: {{ $product->category->name ?? 'Tanpa Kategori' }}
                </p>
                
                <p>Harga: <b>Rp {{ number_format($product->price, 0, ',', '.') }}</b></p>
                <p>Stok: {{ $product->stock }} pcs</p>
                <p>{{ $product->description }}</p>
            </div>
        @endforeach

    </div>

    <!-- Menampilkan tombol Pagination (Next/Previous) -->
    <div>
        {{ $products->links() }}
    </div>
</x-layout>