
<!-- resources/views/mahasiswa/form.blade.php -->

@extends('layout.main')

@section('content')
<div class="container">
    <h2>Form Input Nilai Mahasiswa</h2>
    <form method="POST" action="/store">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="nilai_quis">Nilai Quis</label>
            <input type="number" class="form-control" id="nilai_quis" name="nilai_quis">
        </div>
        <div class="form-group">
            <label for="nilai_tugas">Nilai Tugas</label>
            <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas">
        </div>
        <div class="form-group">
            <label for="nilai_absensi">Nilai Absensi</label>
            <input type="number" class="form-control" id="nilai_absensi" name="nilai_absensi">
        </div>
        <div class="form-group">
            <label for="nilai_praktek">Nilai Praktek</label>
            <input type="number" class="form-control" id="nilai_praktek" name="nilai_praktek">
        </div>
        <div class="form-group">
            <label for="nilai_uas">Nilai UAS</label>
            <input type="number" class="form-control" id="nilai_uas" name="nilai_uas">
        </div>
        <!-- Tambahkan input untuk nilai-nya di sini -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

