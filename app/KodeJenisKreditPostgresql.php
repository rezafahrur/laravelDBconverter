<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodeJenisKreditPostgresql extends Model
{
    //
    protected $connection = 'pgsql';
    public $timestamps = false;
    public $incrementing = false;
 //   protected $primaryKey = 'nasabah_id';
    protected $table = 'kodejeniskredit';
    protected $guarded = [];
}
