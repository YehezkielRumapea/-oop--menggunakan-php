<?php

//Jualan komik & Game

class produk{
    public $judul = 'judul';
    public $penulis = 'penulis';
    public $penerbit = 'penerbit';
    public $harga = 0 ;

    
public function getlabel() {
    return "$this->judul, $this->harga";
}

}
$produk1 = new produk();
$produk1-> judul ="Vagabond";
$produk1-> penulis = "Takehiko Inoue";
$produk1-> penerbit = "Shounen Jump";
$produk1-> harga = "300.000";
echo "komik : " . $produk1-> getlabel();

echo "<br>";

$produk2 = new produk();
$produk2-> judul ="BloodBorne";
$produk2-> penulis = "FromSoftware";
$produk2-> penerbit = "Sony Computer";
$produk2-> harga = "499.999";
echo "Game : " . $produk2-> getlabel();
