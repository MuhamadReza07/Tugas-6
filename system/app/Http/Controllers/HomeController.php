<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
   
    
    function ShowBeranda(){
        return view('admin.beranda');
    }

    function ShowProduk(){
        return view('admin.produk');
    }

    function ShowKategori(){
        return view('admin.kategori');
    }

    function ShowPromo(){
        return view('admin.promo');
    }

    function test($produk, $hargaMin = 0, $hargaMax = 0){
        if($produk == 'kacamata'){
            echo "Tampilkan Produk Kacamata";
        }elseif($produk == 'sepeda'){
            echo "Produk sepeda";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }
}    