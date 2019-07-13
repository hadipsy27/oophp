<?php  

// global , diluar class
// define('NAMA', 'Hadi Prasetyo');

// echo NAMA;
// echo "<br>";


// bisa di masukkan ke dalam kelas, di pakai di oop
// const UMUR = 21;
// echo UMUR;

// class Coba{
// 	const NAMA = 'Hadi';
// }

// echo Coba::NAMA;

// menampilkan baris sekarang
// echo __LINE__; 
// kita bisa tau halaman file constan nya dimana
// echo __FILE__;
// menampilkan direktory file constan dari awal
// echo __DIR__;
// menukan kita di kelas apa
// echo __FUNCTION__;
// echo __CLASS__;
// echo __TRAIT__;
// echo __METHOD__;
// echo __NAMESPACE__;



// function coba(){
// 	return __FUNCTION__;
// }
// echo coba();

class Coba{
	public $kelas = __CLASS__;

}

$obj = new Coba();
echo $obj->kelas;









?>
