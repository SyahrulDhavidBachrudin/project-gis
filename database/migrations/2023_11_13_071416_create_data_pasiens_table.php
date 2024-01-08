<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pasiens', function (Blueprint $table) {
            $table->string('Kasus');
            $table->string('ttl');
            $table->string('NIK');
            $table->string('Alamat1');
            $table->string('Kelurahan1');
            $table->string('Kecamatan1');
            $table->string('Pekerjaan');
            $table->string('kelamin');
            $table->string('No_HP');
            $table->string('Nama_Ortu')->nullable;
            $table->string('Tgl_Digigit');
            $table->string('Tgl_Dilaporkan');
            $table->string('Jenis_Hewan');
            $table->string('bdn_digigit');
            $table->string('Tipe_Luka');
            $table->string('Riwayat')->nullable;
            $table->string('Provokasi')->nullable;
            $table->string('JL');
            $table->string('Kelurahan2');
            $table->string('Kecamatan2');
            $table->string('Hewan_Menggigit');
            $table->string('Kondisi_Hewan');
            $table->string('Pernah_Menggigit')->nullable;
            $table->string('Kapan')->nullable;
            $table->string('berapa')->nullable;
            $table->string('ya1')->nullable;
            $table->string('tgl_keringat')->nullable;
            $table->string('ya2')->nullable;
            $table->string('tgl_menelan')->nullable;
            $table->string('ya3')->nullable;
            $table->string('tgl_takut')->nullable;
            $table->string('ya4')->nullable;
            $table->string('tgl_peka')->nullable;
            $table->string('ya5')->nullable;
            $table->string('tgl_mata')->nullable;
            $table->string('ya6')->nullable;
            $table->string('tgl_liur')->nullable;
            $table->string('ya7')->nullable;
            $table->string('tgl_sua')->nullable;
            $table->string('ya8')->nullable;
            $table->string('tgl_nyeri')->nullable;
            $table->string('ya9')->nullable;
            $table->string('tgl_mala')->nullable;
            $table->string('ya10')->nullable;
            $table->string('tgl_demam')->nullable;
            $table->string('ya11')->nullable;
            $table->string('tgl_mual')->nullable;
            $table->string('ya12')->nullable;
            $table->string('tgl_nafsu')->nullable;
            $table->string('Merawat_Luka');
            $table->string('Tempat_Berobat');
            $table->string('Obat');
            $table->string('VAR');
            $table->string('isi1')->nullable;
            $table->string('isi2')->nullable;
            $table->string('isi3')->nullable;
            $table->string('Keterangan');
            $table->string('Kondisi_VAR');
            $table->string('Nama_Pemilik');
            $table->string('Alamat3')->nullable;
            $table->string('Kelurahan3'->nullable);
            $table->string('Kecamatan3'->nullable);
            $table->string('Vaksin')->nullable;
            $table->string('tgl_vksn')->nullable;
            $table->string('Resume');
            $table->string('Foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pasiens');
    }
};