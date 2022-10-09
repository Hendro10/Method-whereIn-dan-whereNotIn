<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump($collection);

    }

    public function collectionDua()
    {
        $collection = collect([
            [1, 2, 3, 4, 5]
        ]);
        echo $collection;

        echo "<br>";

        $collection = collect([
            [6, 7, 8, 9, 10]
        ]);
        echo $collection;

        echo "<br>";

        $collection = collect([
            [11, 12, 13, 14, 15]
        ]);
        echo $collection;
    }

    public function collectionTiga()
    {
        //  berguna untuk mengurutkan isi collection

        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump( $collection->sort() );
        // {"0":1,"2":3,"5":3,"3":4,"4":5,"6":5,"7":7,"1":9}

    }

    public function collectionEmpat()
    {
        //  cara penulisan lain dari perulangan foreach.

        $collection = collect([
            "nama" => "Hendro Gunawan",
            "sekolah" => "Universitas Siber Asia",
            "kota" => "Jakarta",
            "jurusan" => "PJJ Informatika",
            ]);

        foreach( $collection as $key => $val ) {
            echo "$key= $val <br>";
            }
    }

    public function collectionLima()
    {
        $collection = collect([
            ['namaProduk' => 'Laptop A', 'harga' => 59990000],
            ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
            ['namaProduk' => 'Speaker C', 'harga' => 350000],
            ]);

        // Cari element dengan harga 1599000, 2999000, 3999000
        dump( $collection->whereIn('harga', [1599000, 2999000, 3999000]) );

        // Cari element dengan harga selain 1599000, 2999000, 3999000
        dump( $collection->whereNotIn('harga', [1599000, 2999000, 3999000]) );
    }

    public function collectionEnam()
    {
        //... isi method collectionEnam
    }
}
