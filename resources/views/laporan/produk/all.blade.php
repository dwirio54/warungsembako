@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <P>
                <b>
                    <h3>{{ config('app.name', 'Laravel') }}
                        <br>
                        Kawasan EJIP Industrial Park Lot 4E, Jl. Cisokan Raya, Sukaresmi, Cikarang Sel.,
                        <br>
                        Bekasi, Jawa Barat 17550
                    </h3>
                    <hr>
                </P>
        </div>
        <div class="">
            <h4>Laporan Produk</h4>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>stock</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->kategori->name}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->stok}}</td>
                        <td>{{$product->created_at->format('Y-m-d')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection