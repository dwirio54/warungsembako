@extends('layouts.index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h6>Produk</h6>
            <div class="row">
            @forelse($products as $product)
                <div class="col-md-4 pt-2">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ url('storage/'. $produk->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('product.show', $product->id)}}">
                                    {{$produk->name}}
                                </a>
                            </h5>
                            <p class="card-text">Rp.{{$produk->price}}</p>
                            <p class="text-secondary">Stock : {{$produk->stok}}</p>
                        </div>
                    </div>
                </div>
                @empty
                <h1 class="offset-md-4">Maaf produk belum Tersedia(/h1>)
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection