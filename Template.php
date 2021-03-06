<?php

INCLUDE '../Matrix.php';
INCLUDE '../DeretAngka.php';

class Soal3B extends Matrix{

	private $deret;

	public function __construct(){
		$this->deret = new DeretAngka();
	}

	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				$this->matrix[$i][$j] = "-";
			}
		}
	}
}

$jawab = new Soal4B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();

