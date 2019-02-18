<?php

class Matrix{
	public $baris = 0;
	public $kolom = 0;
	public $matrix = array();
	
	public function setMatrix($n){
		$this->baris = $n;
		$this->kolom = $n;
		
		for($i = 0; $i < $this->baris; $i++){
			for($j = 0; $j < $this->kolom; $j++){
				$this->matrix[$i][$j] = "*";
			}
		}
	}
	
	public function showMatrix(){
		echo "<table border=1 style='border-collapse: collapse;'>";
		for($i = 0; $i < $this->baris; $i++){
			echo "<tr>";
			for($j = 0; $j < $this->kolom; $j++){
				echo "<td>";
				if(@$this->matrix[$i][$j] != null){
					echo @$this->matrix[$i][$j];
				} else {
					echo "#";
				}
				echo "</td>";	
			} 
			echo "</tr>";
		}	
		echo "</table>";
	}
	
	public function form1(){
		echo "<form method='POST'>";
		echo "input : <input type='number' value='".@$_POST['input']."' name='input' />";
		echo "<input type='submit' value='submit' />";
		echo "</form>";
	}
	
	public function form2(){
		echo "<form method='POST'>";
		echo "n 1 : <input type='number' value='".@$_POST['input']."' name='input' /><br/>";
		echo "n 2 : <input type='number' value='".@$_POST['input2']."' name='input2' /><br/>";
		echo "<input type='submit' value='submit' />";
		echo "</form>";
	}
}

/*
$jawab = new Soal4B();
$jawab->form1();
$jawab->setMatrix(@$_POST['input']);
$jawab->showMatrix();
*/