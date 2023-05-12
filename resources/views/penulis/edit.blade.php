@extends('layout.v_template')

@section('content')
<div class="row">
    <div class="col-md-10">
        <h3> Edit Data Penulis</h3>
    </div>
    <div class="col">
        <a class="btn btn-danger" href="{{ route('penulis.show') }}">Beranda</a>
    </div>
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('penulis.update', $penulis) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Kode<span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kode" value="{{ old('kode', $penulis->kode) }}" />
            </div>
            <div class="mb-3">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nama" value="{{ old('nama', $penulis->nama) }}" />
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" value="{{ old('alamat', $penulis->alamat) }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggallahir" value="{{ old('tanggallahir', $penulis->tanggallahir) }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('penulis.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection