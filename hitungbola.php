<?php 
   class bola{
   	public $r;
   	public $phi;

   	public function luas (){
   		$luas=4 * $this->phi * $this->r * $this->r;
   		return "hasil luas bola adalah $luas";
   	}
   	public function volume (){
   		$volume=4/3 * $this->phi * $this->r * $this->r * $this->r;
   		return "hasil volume bola adalah $volume";
   	}

   }

$ball=new bola();
$ball->r='80';
$ball->phi='3.14';

	echo $ball->luas(); echo"<br>";
	echo $ball->volume(); echo "<br>";
?>