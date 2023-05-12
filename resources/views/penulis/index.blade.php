@extends('layout.v_template')

@section('content')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="col-md-10">
        <h3> Daftar Penulis</h3>
    </div>
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <input class="form-control" type="text" name="penulis" value="{{ $penulis }}" placeholder="Search here..." />
            </div>
            <div class="col">
                <button class="btn btn-success">Refresh</button>
            </div>
            <div class="col">
                <a class="btn btn-primary" href="{{ route('penulis.create') }}">Add</a>
            </div>
            <div class="col">
                <a class="btn btn-warning" href="{{ route('penulis.show') }}">Beranda</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                <th>No. </th>
                <th>Kode</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Tanggal Lahir</th>
				<th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($penulisku as $penulis)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $penulis->kode }}</td>
                <td>{{ $penulis->nama }}</td>
                <td>{{ $penulis->alamat }}</td>
                <td>{{ $penulis->tanggallahir }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('penulis.edit', $penulis) }}">Edit</a>
                    <form method="POST" action="{{ route('penulis.destroy', $penulis) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection