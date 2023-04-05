@extends('barang.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Barang
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input. <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('barang.store')}}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="kode_barang">kode_barang</label>
                            <input type="text" name="kode_barang" class="form-control" id="kode_barang" aria-describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">nama_barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="detail_barang">detail_barang</label>
                            <input type="text" name="detail_barang" class="form-control" id="detail_barang" aria-describedby="detail_barang">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">kategori_barang</label>
                            <input type="text" name="kategori_barang" class="form-control" id="kategori_barang" aria-describedby="kategori_barang">
                        </div>
                        <div class="form-group">
                            <label for="harga">harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" aria-describedby="harga">
                        </div>
                        <div class="form-group">
                            <label for="qty">qty</label>
                            <input type="text" name="qty" class="form-control" id="qty" aria-describedby="qty">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection