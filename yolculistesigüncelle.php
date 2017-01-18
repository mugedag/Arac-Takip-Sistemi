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
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <h3>Yolcu Bilgileri Güncelle</h3>
	<?php
		$data = $_GET["AracNo"];
		$verileriCek = mysqli_query($baglan,"select * from yolculistesi where AracNo=$data");
		$b=mysqli_fetch_array($verileriCek);
			//echo $b['AracNo'];
	?>
	<div class="container">
		
		<!--<h2>Horizontal form: control states</h2>-->
		<form class="form-signin" action="arackunyekaydet.php" method="POST">
			
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Araç No.</label>
			  <div class="col-sm-10">
				<input id="focusedInput" type="text" name="AracNumarasi" class="form-control" value="<?php echo $b['AracNo'] ?>"/>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Yolcu Ismi</label>
			  <div class="col-sm-10">
				<input class="form-control" name="Isim" id="disabledInput" type="text" placeholder="<?php echo $b['Isim'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Yolcu Soyismi</label>
			  <div class="col-sm-10">
				<input class="form-control" name = "Soyisim" id="disabledInput" type="text" placeholder="<?php echo $b['Soyisim'] ?>" disabled>
			  </div>
			</div>
			<div class="form-group">
			  <label class="col-sm-2 control-label">Adres</label>
			  <div class="col-sm-10">
				<input class="form-control" name= "Adres" id="focusedInput" type="text" value="<?php echo $b['Adres'] ?>">
			  </div>
			</div>
			<div class="form-group">
			  <label class="col-sm-2 control-label">Telefon</label>
			  <div class="col-sm-10">			
				<input id="focusedInput2" type="text" name="Telefon" class="form-control" value="<?php echo $b['Telefon'] ?>"/>			
			  </div>
			</div>
		
			<input type="submit" class="btn btn-info" value="Kaydet">
	
		</form>
    </div>   
</div>

</body>

</html>
