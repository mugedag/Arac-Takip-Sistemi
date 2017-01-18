<?php
require('connection.php');

$TrfSigKurumu = strip_tags(trim($_POST['TrfSigKurum']));
	if (isset ($_POST['AracNumarasi'])){
		$AracNumara= strip_tags(trim($_POST['AracNumarasi']));
	}
$KaskoKurum = strip_tags(trim($_POST['Kasko']));
$Sorumlu = strip_tags(trim($_POST['SorumluPer']));
$kaydet = mysqli_query($baglan,"update arackunyesi set TirafikSigKurum='".$TrfSigKurumu."', KaskoKurum='".$KaskoKurum."', Sorumlu='".$Sorumlu."' where AracNo='".$AracNumara."'");
 if($kaydet){
      //header(sprintf("Location: " .$_SERVER['HTTP_REFERER']));
	  echo '<div align="center">"Kaydetme işlemi başarılı!"</div>';
	  //header ("Location:AracEkrani.php");
 }
 else{
     echo "Kaydetme işlemi başarısız..";
     }
 
?>

<!DOCTYPE html>
<html>
	<form class="form-signin" action="AracEkrani.php" method="POST">
	<div align= "center">
	<input type="submit" class="btn btn-info" value="Tamam">
	</div>
	</form>
</html>