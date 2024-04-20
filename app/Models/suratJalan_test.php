<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Polyfill\Uuid\Uuid;

class suratJalan_test 
{
    use HasFactory;
    private static $suratJalan = [
        [
            "nomorSuratJalan" => "290978",
            "tglPengiriman" => "08/03/2024",
            "jumlahBarang" => "3",
            "namaBarang" => "Anti Slip",
        ],
    ];

    public static function all()
    {
        return  self::$suratJalan;
    }
}
