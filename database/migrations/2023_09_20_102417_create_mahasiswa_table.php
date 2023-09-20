<?php

// database/migrations/[timestamp]_create_mahasiswa_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nilai_quis');
            $table->integer('nilai_tugas');
            $table->integer('nilai_absensi');
            $table->integer('nilai_praktek');
            $table->integer('nilai_uas');
            $table->char('grade', 1)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
