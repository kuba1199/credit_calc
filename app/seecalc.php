<?php require_once dirname(__FILE__) .'/../cfg.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<style>
body{
	background-color:darkgrey;
}
#container{
	font-family: 'Akaya Telivigala', cursive;
	width: 400px;
	height	: 200px;
	background-color: lightblue;
	border-style: solid;
    border-width: 2px;
	border-radius: 2px;
	margin: 200px auto 150px;
	padding: 50px 30px 50px 80px;
	}
</style>
	
<div id = "container">
<form action="<?php print(_APP_URL);?>/app/calc_count.php" method="post">
	<label for="id_x">Kwota kredytu: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /><br />
	<label for="id_y">Czas kredytu: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br />
	<label for="id_z">Oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php if (isset($z)) print($z); ?>" /><br />
	<input type = "submit" value="Oblicz" />
</form>


<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>
</div>

</body>
</html>