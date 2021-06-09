<?php
/**
 * Program sederhana pendefinisian class dan pemanggilan class.
 **/

 class mb_encoding_aliases
 {
     private $warna;
     private $merk;
     private $harga;

     public function __constuct()
     {
         $this->warna = "Biru";
         $this->merk = "BMW";
         $this->harga = "10000000";
     }
     public function gatiwarna ($warnaBaru)
     {
         $this->warna = $warnaBaru;
     }
     public function tampilWarna ()
     {
         echo "Warna mobilnya : " .  $this->warna;
     }
 }
 //membuat objek mobil
 $a = new Mobil ();
 $b = new Mobil ();

 //memanggil Objek
 echo "<b>Mobil Pertama</b><br>";
 $a->tampilWarna();
 echo "<br>Mobil pertama ganti warna<br>";
 $a->gantiWarna("Merah");
 $a->tampilWarna();

 //memanggil objek
 echo "<br><b>Mobil kedua</b><br>"
 $b->gantiWarna("Hijau")
 $b->tampilWarna();

 ?>