@extends('barang.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your i
                            nput.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('barang.update', $Mahasiswa->Nim) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode_barang">kode_barang</label>
                            <input type="text" name="kode_barang" class="formcontrol" id="kode_barang"
                                value="{{ $Barang->kode_barang }}" ariadescribedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">nama_barang</label>
                            <input type="text" name="nama_barang" class="formcontrol" id="nama_barang"
                                value="{{ $Barang->nama_barang }}" ariadescribedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">kategori_barang</label>
                            <input type="text" name="kategori_barang" class="formcontrol" id="kategori_barang"
                                value="{{ $Barang->kategori_barang }}" ariadescribedby="kategori_barang">
                        </div>
                        <div class="form-group">
                            <label for="Kelas">harga</label>
                            <input type="Kelas" name="Kelas" class="formcontrol" id="Kelas"
                                value="{{ $Barang->Kelas }}" ariadescribedby="Kelas">
                        </div>
                        <div class="form-group">
                            <label for="qty">qty</label>
                            <input type="qty" name="qty" class="formcontrol" id="qty"
                                value="{{ $Barang->qty }}" ariadescribedby="qty">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
