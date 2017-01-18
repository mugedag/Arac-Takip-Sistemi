<?php
require('connection.php');


if ($_POST) {
	if (isset ($_POST['inputSifre'])){
		$eposta=strip_tags(trim($_POST['inputEmail']));
		$sifre=strip_tags(trim($_POST['inputSifre']));
		$sorgula=mysqli_query($baglan,"SELECT * FROM Kullanici where EPosta='".$eposta."' and Sifre='".$sifre."'");
		if (mysqli_num_rows($sorgula)>0){
			header ("Location:AracEkrani.php");
		}else {
			echo "Sonuç Yok";
		}
	}else{
		echo "Input email Verisi Geldi";
	}
	
}else{
	echo "Veriler Gelmedi";
}
?>