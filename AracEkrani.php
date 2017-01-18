<?php
require('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>MEVCUT ARAÇ LİSTESİ</h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Araç Numarası</th>
        <th>Model</th>
        <th>Plaka</th>
		<th>Kullanım Tipi</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
            
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $verileriCek = mysqli_query($baglan,"select AracNo,Model, Plaka, KullanimTipi from araclar");

                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysqli_fetch_array($verileriCek)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $AracNo = $b['AracNo'];
                    $Plaka = $b['Plaka'];
					$Model = $b['Model'];
					$KullanimTipi = $b['KullanimTipi'];
					//$link = "http//www.google.com.tr"
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<tr>";
                    echo "<td>$AracNo</td>";
					echo "<td>$Model</td>";
                    echo"<td>$Plaka</td>";
					echo"<td>$KullanimTipi</td>";
					echo"<td><a href=\"aracdetay.php?AracNo=$AracNo\" >Görüntüle</a></td>";
                echo"</tr>";
                     
                }
                 
   ?>
    </tbody>
  </table>
</div>

</body>
</html>