<?php

// app/Http/Controllers/MahasiswaController.php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    // ...

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nilai_quis' => 'required|numeric',
            'nilai_tugas' => 'required|numeric',
            'nilai_absensi' => 'required|numeric',
            'nilai_praktek' => 'required|numeric',
            'nilai_uas' => 'required|numeric',
        ]);

        // Hitung grade
        $nilaiTotal = $request->input('nilai_quis') + $request->input('nilai_tugas') +
            $request->input('nilai_absensi') + $request->input('nilai_praktek') +
            $request->input('nilai_uas');

        if ($nilaiTotal <= 65) {
            $grade = 'D';
        } elseif ($nilaiTotal <= 75) {
            $grade = 'C';
        } elseif ($nilaiTotal <= 85) {
            $grade = 'B';
        } else {
            $grade = 'A';
        }

        // Simpan data mahasiswa ke dalam database
        Mahasiswa::create([
            'nama' => $request->input('nama'),
            'nilai_quis' => $request->input('nilai_quis'),
            'nilai_tugas' => $request->input('nilai_tugas'),
            'nilai_absensi' => $request->input('nilai_absensi'),
            'nilai_praktek' => $request->input('nilai_praktek'),
            'nilai_uas' => $request->input('nilai_uas'),
            'grade' => $grade,
        ]);

        return redirect('/')->with('success', 'Data mahasiswa berhasil disimpan.');
    }
}
