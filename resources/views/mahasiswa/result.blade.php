<!-- resources/views/mahasiswa/result.blade.php -->

@extends('layout.main')

@section('content')
<div class="container">
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <a href="/chart">Lihat Grafik</a>
</div>
@endsection
