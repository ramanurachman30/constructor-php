<?php
class produk{
    public $namaBarang, 
            $merk, 
            $harga;
    
    public function getCetak(){
        return "$this->namaBarang, $this->merk, $this->harga";
    }
    public function __construct($namaBarang, $merk, $harga){
        $this->namaBarang = $namaBarang;
        $this->merk=$merk;
        $this->harga=$harga;
    }

}


$produk1 = new produk("Handphone","Realme 11",2000000);
$produk2 = new produk("flashdisk","HP",500000);
$produk3 = new produk("laptop","Asus ROG",50000000);
$produk4 = new produk("mouse","Logitech",120000);

echo "Nama Barang Handphone: " . $produk1->getCetak();
echo "<br>";
echo "Nama Barang flashdisk: " . $produk2->getCetak();
echo "<br>";
echo "Nama Barang laptop: " . $produk3->getCetak();
echo "<br>";
echo "Nama Barang Mouse: " . $produk4->getCetak();