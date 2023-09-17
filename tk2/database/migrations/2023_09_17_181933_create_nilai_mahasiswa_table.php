<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up()
{
Schema::create('nilai_mahasiswa', function (Blueprint $table) {
$table->id();
$table->string('nim');
$table->integer('nilai_quis');
$table->integer('nilai_tugas');
$table->integer('nilai_absensi');
$table->integer('nilai_praktek');
$table->integer('nilai_uas');
$table->integer('grade');
$table->timestamps();
});
}
public function down()
{
Schema::dropIfExists('nilai_mahasiswa');
}
};
