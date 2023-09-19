<?php

namespace App\Http\Controllers;

use App\Models\NilaiMahasiswa;
use Illuminate\Http\Request;

class NilaiMahasiswaController extends Controller
{
public function index()
{
$nilai_mahasiswa = NilaiMahasiswa::all();

return view('nilai_mahasiswa.index', [
'nilai_mahasiswa' => $nilai_mahasiswa,
]);
}

public function store(Request $request)
{
$nilai_mahasiswa = new NilaiMahasiswa();
$nilai_mahasiswa->nim = $request->input('nim');
$nilai_mahasiswa->nilai_quis = $request->input('nilai_quis');
$nilai_mahasiswa->nilai_tugas = $request->input('nilai_tugas');
$nilai_mahasiswa->nilai_absensi = $request->input('nilai_absensi');
$nilai_mahasiswa->nilai_praktek = $request->input('nilai_praktek');
$nilai_mahasiswa->nilai_uas = $request->input('nilai_uas');

$nilai_mah

