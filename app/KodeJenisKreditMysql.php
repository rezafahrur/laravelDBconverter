<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodeJenisKreditMysql extends Model
{
    //
    protected $connection = 'mysql';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'KODE_JENIS_KREDIT';
    protected $table = 'kodejeniskredit';
    protected $guarded = [];
}
