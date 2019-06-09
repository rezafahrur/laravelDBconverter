<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKodejeniskreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kodejeniskredit', function (Blueprint $table) {
            $table->char('KODE_JENIS_KREDIT', 3)->primary();
            $table->string('DESKRIPSI_JENIS_KREDIT', 40);
            $table->char('TYPE_PINJAMAN_DEFAULT', 3);
            $table->string('KODE_PERK_KREDIT', 20);
            $table->string('KODE_PERK_BUNGA', 20);
            $table->string('FLAG_HITUNG_SHU', 5);
            $table->string('FLAG_ANGGOTA', 15)->nullable()->default('SEMUA ANGGOTA');
            $table->addColumn('smallInteger','PROSEN_PRODUK_SHU',['length'=>'5']);
            $table->addColumn('smallInteger','BOBOT_PRODUK_SHU',['length'=>'5']);
            $table->decimal('SALDO_MINIMUM_SHU', 15,  2);
            $table->decimal('AKUM_SALDO_PRODUK', 17,  2);
            $table->decimal('EKIVALEN_SHU', 7, 5);
            $table->string('KODE_BIAYA_SHU', 20);
            $table->decimal('PROSEN_PROVISI', 5, 2);
            $table->decimal('PROSEN_ADMIN', 5, 2);
            $table->decimal('PROSEN_NOTARIS', 5, 2);
            $table->decimal('PROSEN_PREMI', 5, 2);
            $table->addColumn('integer', 'JML_TAP_LANCAR', ['lenght' => '3']);
            $table->addColumn('integer', 'JML_TAP_KLANCAR', ['lenght' => '3']);
            $table->addColumn('integer', 'JML_TAP_DIRAGUKAN', ['lenght' => '3']);
            $table->addColumn('integer', 'JML_TAB_LANCAR', ['lenght' => '3']);
            $table->addColumn('integer', 'JML_TAB_KLANCAR', ['lenght' => '3']);
            $table->addColumn('integer', 'JML_TAB_DIRAGUKAN', ['lenght' => '3']);
            $table->addColumn('integer', 'GRACE_PERIOD_DENDA', ['lenght' => '11']);
            $table->string('BASE_DENDA', 50);
            $table->string('FLAG_JADWAL', 18);
            $table->string('FLAG_BUNGA', 12);
            $table->string('METODE_BUNGA', 18);
            $table->decimal('JML_DENDA', 8, 6);
            $table->string('METODE_JURNAL', 10)->nullable();
            $table->string('RUMUS_DENDA', 100)->nullable();
            $table->string('RUMUS_BUNGA', 100)->nullable();
            $table->string('TYPE_JURNAL_DEFAULT', 10);
            $table->string('TYPE_AKAD_DEFAULT', 3);
            $table->string('KODE_PERK_TANGGUH', 10);
            $table->string('KODE_PERK_PPAP', 20);
            $table->char('KODE_SUMBER_DANA_DEFAULT', 2);
            $table->string('KODE_PERK_DEBIUS', 20);
            $table->string('KODE_PERK_TITIPAN_ABP', 20);
            $table->string('KODE_PERK_REKENING_ABP', 20);
            $table->string('KODE_PERK_TITIPAN_BUNGA_ABP', 20);
            $table->string('KODE_PERK_REKENING_BUNGA_ABP', 20);
            $table->string('KODE_PERK_HIBAH_ABP', 20);
            $table->addColumn('tinyInteger', 'TYPE_CHANNELING_DEFAULT', ['lenght' => '3']);
            $table->addColumn('tinyInteger', 'TYPE_AMORTISASI_DEFAULT', ['lenght' => '3']);
            $table->addColumn('tinyInteger', 'TYPE_ABP_DEFAULT', ['lenght' => '3']);
            $table->decimal('NISBAH_DEFAULT', 5, 2);
            $table->string('TYPE_JURNAL_ABP_DEFAULT', 10);
            $table->string('KODE_PERK_PROVISI', 20);
            $table->string('KODE_PERK_PREMI', 20);
            $table->string('KODE_PERK_ADM', 20);
            $table->string('KODE_PERK_LAIN', 20);
            $table->string('KODE_PERK_NOTARIEL', 20);
            $table->string('KODE_PERK_DENDA', 20);
            $table->string('KODE_PERK_PREMI_KENDARAAN', 20);
            $table->string('KODE_PERK_ANGS_ADM', 20);
            $table->string('KODE_PERK_ANGS_LAIN', 20);
            $table->string('FORMAT_NOREK_1', 10);
            $table->string('FORMAT_NOREK_2', 10);
            $table->addColumn('tinyInteger', 'COUNTER_AWAL', ['lenght' => '2']);
            $table->addColumn('tinyInteger', 'COUNTER_AKHIR', ['lenght' => '2']);
            $table->addColumn('tinyInteger', 'COUNTER_LENGTH', ['lenght' => '2']);
            $table->addColumn('tinyInteger', 'NOREK_LENGTH', ['lenght' => '2']);
            $table->string('SEPARATOR_1', 10);
            $table->decimal('NOMINAL_ADMIN', 12, 2);
            $table->decimal('DENDA_AFTER_JT_DEFAULT', 8, 6);
            $table->decimal('MINIMUM_PLAFON', 15, 2);
            $table->decimal('MAKSIMUM_PLAFON', 15, 2);
            $table->decimal('PENALTI_PELUNASAN_DINI', 5, 2);
            $table->char('kode_perk_biaya_transaksi', 20)->nullable();
            $table->addColumn('tinyInteger', 'TYPE_AMORTISASI_BIAYA_TRANSAKSI_DEFAULT', ['lenght' => '1'])->nullable()->default(0);
            $table->char('KODE_PERK_PENDPTAN_BYTRANS', 20)->nullable();
            $table->char('kode_perk_ttp_provisi', 20)->nullable();
            $table->string('PENDPTAN_BUNGA_YAD', 20)->nullable();
            $table->string('KODE_PERK_PENDPTAN_BY_TRANS', 20)->nullable();
            $table->string('KODE_PERK_TTP_ADM', 20)->nullable();
            $table->string('KODE_PERK_SIMP_POKOK', 20)->nullable();
            $table->string('KODE_PERK_SIMP_WAJIB', 20)->nullable();
            $table->string('KODE_PERK_KOREKSI_PBYAD', 20)->nullable();
            $table->string('KODE_PERK_REK_ADM', 20)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kodejeniskredit');
    }
}
