@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    @role('admin')
                        <div class="ml-3 mb-3">
                            <a href="{{route('produck.create')}}" class="btn btn-info">Tambah Produk</a>
                        </div>
                    @endrole
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Tanggal</th>
                                @role('admin')
                                    <th>Options</th>
                                @endrole
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
                                    @role('admin')
                                        <td>
                                            <form action="{{route('product.destroy', $product->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-info btn-sm">Edit Produk</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus Produk</button>
                                            </form>
                                        </td>
                                    @endrole
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$produks->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection