
<!-- resources/views/mahasiswa/form.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Form Input Nilai Mahasiswa</h2>
    <form method="POST" action="/store">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <!-- Tambahkan input untuk nilai-nya di sini -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

