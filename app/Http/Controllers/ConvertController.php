<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KodeJenisKreditMysql;
use App\KodeJenisKreditPostgresql;

class ConvertController extends Controller
{
    //

    function convert()
    {
        KodeJenisKreditMysql::chunk(200, function($mysqls) 
        {
           foreach ($mysqls as $m)
           {
              $p = new KodeJenisKreditPostgresql();
              $p->fill( $m->getAttributes() );  
              $p->save();
           }
        });
        echo "Sukses Migrasi Ke PostgreSQL";
    }
}
