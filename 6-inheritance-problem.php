<?php 

class Produk{
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;


public function __construct($judul="judul", $penulis="Penulis",$penerbit="penerbit", $harga=0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
	$this->judul = $judul;
	$this->penulis = $penulis;
	$this->penerbit = $penerbit;
	$this->harga = $harga;
	$this->jmlHalaman = $jmlHalaman;
	$this->waktuMain = $waktuMain;
	$this->tipe = $tipe;
}

	public function getLabel(){
		
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoLengkap(){
		// Komik : Naruto | Masashi Kishimoto, Shoen Jump (Rp. 30000) - 100 Halaman.

		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if ($this->tipe == "Game") {
			$str .=" - {$this->waktuMain} Jam.";
		}

		return $str;

	}
}
class CetakInfoProduk{
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shoen Jump", 30000, 100, 0,"Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony", 25000, 0, 50, "Game");

// Komik : punya jumlah halaman 100
// Game : punya waktu main 50 jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();