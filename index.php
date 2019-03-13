<?php

echo "Bilangan Prima <br>";
$sp=10; //start point bilangan prima
$fp=150; //finish point bilangan prima
for ($i=$sp; $i <= $fp ; $i++) { 
	# code...
	$x=0;
	for ($a=1; $a <=$i ; $a++) { 
		# code...
		if ($i % $a == 0) {
			# code...
			$x++;
		}
	}
	if ($x==2) {
		# code...
		echo $i.', ';
	}
}
echo "<br> Bilangan Faktorial <br>";
$sf=1; //start point bilangan faktorial
$ff=7; //finish point bilangan faktorial
for ($b=$sf; $b <= $ff; $b++) { 
	# code...
	$f=$sf;
	echo $b."! = ";
	for ($c=$b; $c > 0 ; $c--) { 
		# code...
		if ($c == 1) {
			# code...
			echo "1 = ".$f;
		}else{
			echo $c." x ";
		}
		$f*=$c;
	}
	echo "<br>";
}
echo "Bilangan Fibonacci <br>";
$jf=20; //jumlah angka fibonacci yang akan dicetak
$pf=0; //angka pertama fibonacci first
$kf=1; //angka kedua fibonacci second
$fb = $pf.', '.$kf;
for ($y=0; $y < $jf ; $y++) { 
	# code...
	$o=$pf+$kf;
	$fb.= ', '.$o;
	$pf=$kf;
	$kf=$o;
}
echo $fb.'<br>';
echo "Fungsi curl() adalah untuk mengambil laman web atau json data dari suatu web service bisa dikatakan fungsi php untuk melakukan HTTP Request<br>";

function luas_lingkaran($jari){
	$hasil = 0;
	if ($jari%7==0) {
		# code...
		$hasil = 22 * $jari * $jari / 7;
	} else {
		$hasil = 3.14 * $jari * $jari;
	}
	return $hasil;

}
echo "Luas Lingkaran = ".luas_lingkaran(14)."<br>";
function volume_bola($jari){
	$hasil = 0;
	if ($jari%7==0) {
		# code...
		$hasil = (22 * $jari * $jari * $jari / 7) * 4 / 3;
	} else {
		$hasil = (3.14 * $jari * $jari * $jari) * 4 / 3;
	}
	return $hasil;
}

echo "Volume Bola = ".volume_bola(7)."<br>";

echo "<center>";
$jb=6;//jumlah bintang yang ingin dicetakd
for ($i=$jb; $i >= 1 ; $i--) { 
	# code...
	for ($x=$jb; $x > $i ; $x--) { 
		# code...
		echo "*";
	}
	echo "<br>";
	//$jb++;
}
for ($i=1; $i <= $jb-2 ; $i++) { 
	# code...
	for ($x=$i; $x <= $jb-2 ; $x++) { 
		# code...
		echo "*";
	}
	echo "<br>";
	
}

echo "</center>Fungsi parseInt() adalah mengubah string menjadi data tipe integer<br>";
echo "Fungsi parseFloat() adalah mengubah string menjadi data tipe float<br>";
echo "Fungsi eval() adalah mengevaluasi ekspresi atau pernyataan, bisa dianalogikan sebuah parser contoh eval('x*y') akan menghasilkan hasil kali dari x dan y<br>";
echo "Fungsi window.prompt adalah menampilkan window pop up<br>";
echo "Fungsi alert adalah menampilkan pop up peringatan<br>";
echo "Fungsi window.close adalah menutup window pop up yg sedang aktif<br>";
echo "Fungsi console.log adalah membantu kita mencari kesalahan dalam javascript<br>";
echo "Fungsi console.info adalah menampilkan info pada console javascript<br>";
echo "Konsep web service adalah memungkinkannya adanya suatu komunikasi antar sistem menggunakan fungsi http request kemudian server melakukan http response dengan metode get post delete put options<br>";
echo "Perbedaan INNER LEFT RIGHT JOIN<br>";
echo "INNER : menampilkan data dari beberapa tabel yang memiliki hubungan data yg sama atau key yang sama antara suatu kolom dengan perintah ON<br>";
echo "LEFT : menampilkan data yang berada di kiri dari beberapa tabel tanpa memiliki data yg sama atau key yang sama antara suatu kolom, data yang kosong akan bernilai null<br>";
echo "RIGHT : kebalikan dari left, menampilkan data yang berada di kanan dari beberapa tabel tanpa memiliki data yg sama atau key yang sama antara suatu kolom, data yang kosong akan bernilai null<br>";
$s=9; // batas cetak angka
for ($i=$s; $i >=1 ; $i--) { 
	# code...
	for ($z=$i; $z > 1 ; $z--) { 
		# code...
		echo "&nbsp;&nbsp;";
	}
	for ($x=$s; $x >= $i ; $x--) { 
		# code...
		echo $x;
	}
	echo "<br>";
}

echo "Fungsi __get adalah mengambil nilai dari suatu variabel pada session yg sedang aktif, biasanya saya gunakan untuk mengambil data informasi login pada aplikasi saya<br>";
echo "Fungsi __set adalah mendeklarasikan data pada session yg sedang aktif, biasanya saya gunakan untuk mennyimpan data autentikasi login pada session aplikasi saya<br>";
echo "Fungsi __isset adalah untuk mengecek apakah sudah dideklarasikan suatu data pada variabel session yang sedang aktif, biasanya saya gunakan untuk validasi apakah sudah login, kalau ya masuk ke dashboard, jika tidak maka dialihkan laman login<br>";
echo "Fungsi __unset adalah membatalkan atau menghapus suatu data pada variabel session yg sedang aktif, saya jarang pakai, mending langsung session destroy aja.<br>";
echo "Fungsi __call adalah memanggil metode yang tidak dapat diakses dalam suatu object<br>";
echo "Fungsi __callStatic adalah  memanggil metode yang tidak dapat diakses dalam suatu object yang bernilai static<br>";

?>