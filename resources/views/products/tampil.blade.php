@extends('layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Produk</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">

               
               
                <img src="{{ asset('storage/' . $product->image_path) }}" class="card-img-top" alt="{{ $product->product_name }}" style="height: 200px; object-fit: cover;">

                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">Harga Jual: Rp {{ number_format($product->selling_price, 0, ',', '.') }}</p>
                        <p class="card-text">Harga Beli: Rp {{ number_format($product->buying_price, 0, ',', '.') }}</p>
                        <p class="card-text">Stok: {{ $product->qty > 0 ? 'Tersedia' : 'Habis' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
 