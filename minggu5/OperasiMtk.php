<?php
	
	function penjumlahan($x,$y){
		$jumlah = $x + $y;

		echo "PENJUMLAHAN <br>";
		echo "Operator : + <br>";
		echo "Hasil = $jumlah";
	}

	function pengurangan($x,$y){
		$jumlah = $x - $y;

		echo "PENGURANGAN <br>";
		echo "Operator : - <br>";
		echo "Hasil = $jumlah";
	}

	function pembagian($x,$y){
		$jumlah = $x / $y;

		echo "PEMBAGIAN <br>";
		echo "Operator : / <br>";
		echo "Hasil = $jumlah";
	}

function perkalian($x,$y){
		$jumlah = $x * $y;

		echo "PENJUMLAHAN <br>";
		echo "Operator : * <br>";
		echo "Hasil = $jumlah";
	}

function modulus($x,$y){
		$jumlah = $x % $y;

		echo "MODULUS <br>";
		echo "Operator : % <br>";
		echo "Hasil = $jumlah";
	}


	$a = $_POST['angka1'];
	$b = $_POST['angka2'];
	echo "Bilangan 1 : ";
	echo $a; 
	echo "<br> Bilangan 2 : ";
	echo $b;


	echo "<br> <br> Berikut merupakan hasil dari setiap operasi<br><br>";

		penjumlahan($a,$b);
		echo "<br><br>";
		pengurangan($a,$b);
		echo "<br><br>";
		pembagian($a,$b);
		echo "<br><br>";
		perkalian($a,$b);
		echo "<br><br>";
		modulus($a,$b);
	
?>