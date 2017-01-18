<?php
require('connection.php');

?>
<!doctype html>
<table>
    <tr>
        <td>Araç Numarası</td>
        <td>Plaka</td>
    </tr>
	 
    <?php 
            
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $verileriCek = mysqli_query($baglan,"select AracNo,Plaka from araclar");

                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysqli_fetch_array($verileriCek)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $AracNo = $b['AracNo'];
                    $Plaka = $b['Plaka'];
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<tr>
                    <td>$AracNo</td>
                    <td>$Plaka</td>
                </tr>";
                     
                }
                 
   ?>
                 
</table>

