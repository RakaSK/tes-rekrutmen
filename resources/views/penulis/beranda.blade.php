@extends('layout.v_template')
@section('content')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <head>
        <title>Penerbit Buku</title>
    </head>
    <body>
        <header>
            <h1>Penerbit Buku</h1>
        </header>
        <div class="card-header">
            <form class="row row-cols-auto g-3">
                <div class="col">
                    <a class="btn btn-danger" href="{{ route('penulis.show') }}">Beranda</a>
                </div>
                <div class="col">
                    <a class="btn btn-warning" href="{{ route('penulis.create') }}">Input Penulis</a>
                </div>
                <div class="col">
                    <a class="btn btn-primary" href="{{ route('penulis.index') }}">Daftar Penulis</a>
                </div>
            </form>
        </div>
        <main>
            <p>Selamat datang di Penerbit Buku!</p>
            <p>Kami adalah penerbit yang menerbitkan buku-buku berkualitas dengan penulis-penulis terbaik di Indonesia.</p>
        </main>
        <footer>
            <p>&copy; 2023 Penerbit Buku. All rights reserved.</p>
        </footer>
    </body>
</div>
@endsection