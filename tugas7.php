<?php
class produk{
	public $namaBarang,
	   $merk, 
	   $harga,
	   $ukuransepatu,
	   $desain;

	public function getCetak(){
		return "$this->merk, (Rp $this->harga)";
	}
	public function __construct($namaBarang="nama barang",$merk="merk",$harga=0, $ukuransepatu="ukuran sepatu", $desain="desain"){
	$this->namaBarang =$namaBarang;
	$this->merk=$merk;
	$this->harga=$harga;
	$this->ukuransepatu=$ukuransepatu;
	$this->desain=$desain;
 	}

	public function cetakInfo(){
		$str="{$this->namaBarang}, {$this->getCetak()}";
		return $str;
		}
	}
	class sepatu extends produk{
		public function cetakInfo(){
			$str="Sepatu: {$this->namaBarang}, {$this->getcetak()} | Ukuran Sepatu: {$this->ukuransepatu}";
			return $str;
		}
	}
	class kaos_kaki extends produk{
		public function cetakInfo(){
			$str="Kaon Kaki : {$this->namaBarang}, {$this->getcetak()} | Desain: {$this->desain}";
			return $str;
		}
	}
$produk1 = new sepatu("NIKE", "ADIDAS", 600000, "40");
$produk2 = new kaos_kaki("PISANG", "DEDAUNAN", 50000, "-", "(JAMISTILL)");

echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";

?>