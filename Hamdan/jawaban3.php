<?php
 class warnet{
    public $Harga = "6.000";
    public $nama_pengguna = "Hamdan";
    public $waktu_main = "2 jam";

    public function __construct(){
        echo "ini berasal dari construct warnet";
    }
    public function ambil_waktu(){
        echo "ambil_waktu milik $this->nama_pengguna dengan harga $this->Harga waktu $this->waktu_main";
    }
    public function __destruct(){
        echo "ini berasal dari destruct warnet" ;
    }
   
 }
 $waktu_hamdan = new warnet();
    echo "<br/>";
    echo $waktu_hamdan->ambil_waktu();
    echo "<br/>";
    ?>