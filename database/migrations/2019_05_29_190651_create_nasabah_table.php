<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->string('nasabah_id', 20);
            $table->addColumn('integer', 'jenis_nasabah', ['lenght' =>  '1'])->unsigned();
            $table->string('nama_nasabah', 35);
            $table->string('nama_alias', 50);
            $table->string('alamat', 100);
            $table->string('kelurahan', 30);
            $table->string('kecamatan', 30);
            $table->string('kode_pos', 5);
            $table->string('kota_id', 4);
            $table->string('telpon',25);
            $table->char('jenis_kelamin', 2);
            $table->string('pekerjaan', 35);
            $table->string('kode_area', 4);
            $table->char('pekerjaan_id', 3);
            $table->string('tempatlahir', 15);
            $table->date('tgllahir');
            $table->string('gelar_id', 4);
            $table->char('jenis_id', 1);
            $table->string('no_id', 30);
            $table->string('npwp', 16);
            $table->string('KOTA', 20);
            $table->decimal('AKUM_JASA_PINJ', 15, 2);
            $table->decimal('INDEX_SHU_PINJ', 15, 2);
            $table->decimal('SHU_PINJ, 15, 2');
            $table->decimal('AKUM_SIMP', 15, 2);
            $table->decimal('INDEX_SHU_SIMP', 15, 2);
            $table->decimal('SHU_SIMP', 15, 2);
            $table->string('IBU_KANDUNG',30);
            $table->string('KET_GELAR', 30);
            $table->string('NO_DIN', 20);
            $table->char('kode_golongan_debitur', 3);
            $table->string('Tempat_kerja', 50);
            $table->string('Kode_Bidang_Usaha', 5);
            $table->char('Kode_Negara', 3);
            $table->string('Kode_Hubungan_Debitur', 4);
            $table->string('NO_AKTE_AKHIR', 30);
            $table->date('TGL_AKHIR_AKTE');
            $table->char('NASABAH_GROUP1', 3);
            $table->char('NASABAH_GROUP2', 3);
            $table->char('NASABAH_GROUP3', 3);
            $table->string('NASABAH_GROUP4', 4);
            $table->string('NO_REK_SHU', 20);
            $table->tinyInteger('ANGGOTA');
            $table->string('PATH_FOTO', 150);
            $table->string('PATH_TTANGAN', 150);
            $table->date('tglid');
            $table->addColumn('tinyInteger','Black_List', ['lenght' => '3']);
            $table->string('TUJUAN_PEMBUKAAN_KYC',  50);
            $table->string('SUMBER_DANA_KYC', 50);
            $table->string('PENGGUNAAN_DANA_KYC', 50);
            $table->string('KET_PEKERJAAN', 50);
            $table->string('NO_NIP', 30);
            $table->date('TGL_BUKA');
            $table->decimal('PENDAPATAN_KYC', 15, 2);
            $table->string('ALAMAT_DOMISILI', 100);
            $table->string('NO_HP', 30);
            $table->addColumn('integer', 'TAGGAL_ULANGTAHUN',['length' => '2']);
            $table->addColumn('integer', 'BULAN_ULANGTAHUN', ['length' => '2']);
            $table->string('NAMA_KUASA', 30);
            $table->string('ALAMAT_KUASA', 40);
            $table->addColumn('tinyInteger', 'STATUS_PROSES', ['lenght' => '1' ])->unsigned();
            $table->addColumn('tinyInteger', 'STATUS_APPROVAL', ['lenght' => '1' ])->unsigned();
            $table->addColumn('tinyInteger', 'USER_APPROVAL', ['lenght' => '3' ])->unsigned();
            $table->string('kota_idSID', 4);
            $table->string('NO_PASSPORT', 20);
            $table->string('Status_Marital', 20);
            $table->date('TGL_MULAI_PASSPORT');
            $table->date('TGL_AKHIR_PASSPORT');
            $table->string('bentuk_perusahaan', 30);
            $table->string('alamat_email', 20);
            $table->string('mata_uang', 10);
            $table->string('akte_perusahaan', 30);
            $table->string('nama_pengurus1', 30);
            $table->string('jabatan_pengurus1', 30);
            $table->string('alamat_pengurus1', 100);
            $table->char('jnskelamin_pengurus1', 2);
            $table->string('tmp_lahir_pengurus1', 30);
            $table->date('tgl_lahir_pengurus1');
            $table->string('status_pengurus1', 20);
            $table->char('KODE_PJTKI', 3);
            $table->string('pendidikan_pengurus1', 20);
            $table->char('CAB', 3);
            $table->char('OUTLET', 3);
            $table->string('id_template', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nasabah');
    }
}
