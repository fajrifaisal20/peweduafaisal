<?php 
	class hitung{
	//set pproperty
		public $a;
		public $b;
		public $hasil;


		//set method
		public function tambah(){
			$hasil=$this->a + $this->b;
			return "hasil tambah adalah $hasil";
		}
		public function kurang(){
			$hasil=$this->a - $this->b;
			return "hasil kurang adalah $hasil";
		}
		public function kali(){
			$hasil=$this->a * $this->b;
			return "hasil kali adalah $hasil";
		}
		public function bagi(){
			$hasil=$this->a / $this->b;
			return "hasil bagi adalah $hasil";
		}

	}
	$angka=new hitung();
	$angka->a='22337';
	$angka->b='7234';

	echo $angka->tambah(); echo "<br>";
	echo $angka->kurang(); echo "<br>";
	echo $angka->kali(); echo "<br>";
	echo $angka->bagi(); echo "<br>";


 ?>



