<?php
require('connection.php');

?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>ARAÇ BİLGİLERİ</h2>
  <p>Seçtiğiniz araca ait tüm işlemleri bu sayfa aracılığı ile yürütebilirsiniz.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Araç Künyesi</a></li>
    <li><a data-toggle="tab" href="#menu1">Yolcu Bilgileri</a></li>
    <li><a data-toggle="tab" href="#menu2">Güzergah</a></li>
    <li><a data-toggle="tab" href="#menu3">Trafik Cezası ve Vergi Durumu</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Araç Künyesi</h3>
	  <?php
		$data = $_GET["AracNo"];
		$verileriCek = mysqli_query($baglan,"select * from arackunyesi where AracNo=$data");
		$b=mysqli_fetch_array($verileriCek);
			//echo $b['AracNo'];
		?>
		<div class="container">
		  <!--<h2>Horizontal form: control states</h2>-->
		  <form class="form-horizontal">
			
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Araç No.</label>
			  <div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $b['AracNo'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Plaka</label>
			  <div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $b['Plaka'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Ruhsat No</label>
			  <div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $b['RuhsatNo'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Sicil No</label>
			  <div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $b['SicilNo'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Trafik Sigorta Kurumu</label>
			  <div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $b['TirafikSigKurum'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Kasko Kurumu</label>
			  <div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $b['KaskoKurum'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Sorumlu Personel</label>
			  <div class="col-sm-10">
				<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $b['Sorumlu'] ?>" disabled>
			  </div>
			</div>
			<div>
				<a href="AracKunyeGuncelle.php?AracNo=<?php echo $b['AracNo'] ?>" class="btn btn-info" role="button">Düzenle</a>
			</div>
		 </form>
		</div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Yolcu Listesi</h3>
	 
		<div class="container">
		<table class="table table-striped">
			<thead>
			  <tr>
				<th>Araç Numarası</th>
				<th>Yolcu İsmi</th>
				<th>Yolcu Soyismi</th>
				<th>Adres</th>
				<th>Telefon Numarası</th>
				<th></th>
			  </tr>
			</thead>
			<tbody>
				<?php 			
				//Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
				$verileriCek = mysqli_query($baglan,"select AracNo,Isim, Soyisim, Adres,Telefon	from yolculistesi where AracNo=$data");
				//Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
				while ($b=mysqli_fetch_array($verileriCek)){
					 
					//Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
					$AracNo = $b['AracNo'];
					$Isim = $b['Isim'];
					$Soyisim = $b['Soyisim'];
					$Adres = $b['Adres'];
					$Telefon = $b['Telefon'];
					//$link = "http//www.google.com.tr"
					 
					//Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
					echo "<tr>";
					echo "<td>$AracNo</td>";
					echo "<td>$Isim</td>";
					echo"<td>$Soyisim</td>";
					echo"<td>$Adres</td>";
					echo"<td>$Telefon</td>";
				echo"</tr>";			 
				}						 
				?>
			</tbody>
		  </table>  
		</div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Güzergah</h3>
      <p>Güzergah burada görüntülenecek</p>
	  <!DOCTYPE html>
		<html>
		<body>

		<div id="map" style="width:100%;height:500px"></div>

		<script>
		function myMap() {
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {
			center: new google.maps.LatLng(51.508742,-0.120850),
			zoom: 5
		  };
		var map = new google.maps.Map(mapCanvas, mapOptions);
		}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

		</body>
		</html>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Trafik Cezası ve Vergi Durumu</h3>
      <p>Trafik Cezası ve Vergi Durumu bilgileri burada görüntülenecek</p>
    </div>
  </div>
</div>

</body>
</html>
