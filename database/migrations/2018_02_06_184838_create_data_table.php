<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',50);
            $table->string('jurusan',50);
            $table->string('prodi',50);
            $table->float('ipk',2,2);
            $table->string('skripsi',100);
            $table->string('no_telp',25);
            $table->string('email',50);
            $table->string('instagram',20);
            $table->string('web',30);
            $table->string('sosmed',50);
            $table->string('alamat',120);
            $table->string('kegiatan',20);
            $table->string('lainnya',50);
            $table->string('tempat_kerja',50);
            $table->string('posisi',20);
            $table->string('jabatan',20);
            $table->string('sertifikat',120);
            $table->string('lomba',120);
            $table->string('prestasi',120);
            $table->string('minat_dosen',5);
            $table->timestamps();
        });

        Schema::table('data', function(Blueprint $table){
          $table->string('web')->nullable()->change();
          $table->string('sosmed')->nullable()->change();
          $table->string('lainnya')->nullable()->change();
          $table->string('tempat_kerja')->nullable()->change();
          $table->string('posisi')->nullable()->change();
          $table->string('jabatan')->nullable()->change();
          $table->string('sertifikat')->nullable()->change();
          $table->string('lomba')->nullable()->change();
          $table->string('prestasi')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
