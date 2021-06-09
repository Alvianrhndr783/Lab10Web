<?php
/**
 * Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
 **/

include "form.php";
echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("","Input Form");
$form->addfield("txtnim","Nim");
$form->addfield("txtnama","Nama");
$form->addfield("txtalamat","Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";

?>