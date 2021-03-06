@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <form action="{{route('product.update', $product->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama Kategori</label>
                                        <select name="kategori_id" id="" class="form-control">
                                            <option value="">Pilih Kategori</option>
                                            @foreach($categorys as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama produk</label>
                                        <input type="text" name="name" id="" value="{{$product->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Stok</label>
                                        <input type="text" name="stok" id="" value="{{$product->stok}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <input type="text" name="desk"value="{{$product->desk}}" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="text" name="price" value="{{$product->price}}" id="" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12 d-flex">
                                    <button type="submit" class="btn btn-info mr-3">Simpan produck</button>
                                    <a href="{{route('product')}}" type="submit" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection