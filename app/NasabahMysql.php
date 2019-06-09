<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NasabahMysql extends Model
{
    //
    protected $connection = 'mysql';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'nasabah_id';
    protected $table = 'nasabah';
    protected $guarded = [];
}
